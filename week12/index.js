require('dotenv').config();
const express = require('express');
const path = require('path');
const ejs = require('ejs');
const session = require('express-session');
const PORT = process.env.PORT || 5000
const url = require('url');
var bodyParser = require('body-parser')
const pg = require('pg-promise')({});
var conString = process.env.DATABASE_URL || "postgres://healthuser:Health@localhost:5432/project2";
const db = pg(conString);
const { getSalt, getHash} = require('./util');
const app = express();
var sess = {
    secret: process.env.COOKIE_SECRET,
    cookie: {}
  }
   
  if (app.get('env') === 'production') {
    app.set('trust proxy', 1) // trust first proxy
    sess.cookie.secure = true // serve secure cookies
  }
   
  app.use(session(sess))




app.use(bodyParser.urlencoded({
    extended: true
}));

// accept json 
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(logRequest)
app.get('/', (req,res)=> {
    res.render('test')
});

app.post('/login', (req, res) => {
   console.log(req.body.username);
   
   var username = req.body.username;
   var pass = req.body.password;
   db.one('SELECT password, salt, id FROM person WHERE user_name = $1', [username])
   .then(result => {
        let hash = getHash(result.salt, pass);
        console.log(result.password)
        console.log(hash)
        if (hash == result.password) {
            req.session.userId = result.id;
            req.session.uersname = username;
            res.json({success: true})
        }
        else {
            res.status(401)
               .json({success: false})
        }
   }).catch(err =>{
       console.log(err);
       res.status(401)
            .json({success: false})

   })
  
})

app.post('/logout', (req, res) => {
    //console.log(req.session.username)

    if(req.session.userId != null) {
       req.session.destroy(error => {
           if (error) {
               res.json({success: false});  
           } else {
               res.json({ success : true});
           }
       }); 
    }
    else {
        res.json({success: false});
    }
})

app.get('/getServerTime', verifyLogin, (req, res) => {
    var time = new Date();
    res.status(200)
       .json({success:true, time:time})
})

app.post('/createUser', (req, res) => {
    var name = "";
    var username = req.body.username;
    var pass = req.body.password;
    var salt = getSalt();
   // console.log(typeof pass)
   // console.log(typeof salt)
    var hash = getHash(salt, pass);
    
    const query = db.one('INSERT INTO person (name, password, user_name, salt) VALUES ($1, $2, $3, $4) RETURNING id',
    [name, hash, username, salt])
    .then(id => {
        req.session.userId = id;
        res.json({success: true})
        
    }).catch(err => {
        console.log(err);
    })

})

function logRequest(req, res, next) {
    console.log("Received a request for: " + req.url);
    next();

}
function verifyLogin(req, res, next) {
   if(req.session.userId) {
       console.log(req.session.userId)
       next();
   } else {
    console.log(req.session.userId)
       res.status(401)
          .json({success:false})
   }
}



app.listen(PORT, () => console.log(`Listening on ${ PORT }`));


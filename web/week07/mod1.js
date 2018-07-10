var mymod = require("./mod2");
var dir = process.argv[2];
var ext = process.argv[3];

mymod(dir,ext,function(err,files){
    if(err){
        throw new Error("Error");
    }
    else{
        for(var i = 0; i < files.length; i++){
            console.log(files[i]);
        }
    };
});


/* 

var filemodule = require("./module.js");

var dir = process.argv[2];
var ext = process.argv[3];

filemodule(dir,ext,function(err,files){
    if(err){
        throw new Error("Error");
    }
    else{
        for(var i = 0; i < files.length; i++){
            console.log(files[i]);
        }
    };
});

*/

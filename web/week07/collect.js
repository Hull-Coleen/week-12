const http = require("http");

const url = process.argv[2];
http.get(url, (res) => {
	let responseData = "";
	res.setEncoding("utf8");
	res.on("data", (data) => {
		responseData += data;
		
	});
     res.on("end", () => {
		console.log(responseData.length);
        console.log(responseData);		
	 });
} );

/*

var http = require('http')
    var bl = require('bl')

    http.get(process.argv[2], function (response) {
      response.pipe(bl(function (err, data) {
        if (err) {
          return console.error(err)
        }
        data = data.toString()
        console.log(data.length)
        console.log(data)
      }))
    })
	
	*/
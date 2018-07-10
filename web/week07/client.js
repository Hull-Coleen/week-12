var http = require('http');
//var concatStream = require('concat-stream');

var urls = process.argv.slice(2),
    results = [],
    resultsCount = 0;

urls.forEach((url, i) => {
  http.get(url, (response) => {
    response.setEncoding('utf8');
	let responseData = "";
	response.on("data", (data) => {
		responseData += data;
		
	});
    response.on("end", () => {
		results[i] = responseData;
		resultsCount++;
        //console.log(responseData);	
		if (resultsCount === urls.length) {
           results.forEach((result) => {
           console.log(result);
           });
        }		
	});

  });    
});
/*

 var http = require('http')
    var bl = require('bl')
    var results = []
    var count = 0

    function printResults () {
      for (var i = 0; i < 3; i++) {
        console.log(results[i])
      }
    }

    function httpGet (index) {
      http.get(process.argv[2 + index], function (response) {
        response.pipe(bl(function (err, data) {
          if (err) {
            return console.error(err)
          }

          results[index] = data.toString()
          count++

          if (count === 3) {
            printResults()
          }
        }))
      })
    }

    for (var i = 0; i < 3; i++) {
      httpGet(i)
    }
	
	*/
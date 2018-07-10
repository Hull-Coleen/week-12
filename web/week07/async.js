var fs = require('fs');
var file = process.argv[2];

fs.readFile(file, function finishedReading(error, movieData) {
	if (error) return console.error(error);
    var test = movieData.toString();
    var res = test.split("\n");
    console.log(res.length -1);
	
})
/*

  var fs = require('fs')
    var file = process.argv[2]

    fs.readFile(file, function (err, contents) {
      if (err) {
        return console.log(err)
      }
      // fs.readFile(file, 'utf8', callback) can also be used
      var lines = contents.toString().split('\n').length - 1
      console.log(lines)
    })
	
	*/
/*var fs = require('fs');
var file = process.argv[2];

fs.readFile(file, function finishedReading(error, movieData) {
	if (error) return console.error(error);
    var test = movieData.toString();
    var res = test.split("\n");
    console.log(res.length -1);
	
})*/
var fs = require('fs');

var filename = process.argv[2];

file = fs.readFileSync(filename);

contents = file.toString();

console.log(contents.split('\n').length - 1);
var fs = require('fs');
var path = process.argv[2];
var type = "." + process.argv[3];
var result = new Array();
fs.readdir(path, function callback(error, list) {
	if (error) return console.error(error);
	for (i = 0; i < list.length; i++) {
		if (list[i].includes(type)) {
			console.log(list[i]);
		}
		
	}
   
}); 
/*

    var fs = require('fs')
    var path = require('path')

    var folder = process.argv[2]
    var ext = '.' + process.argv[3]

    fs.readdir(folder, function (err, files) {
      if (err) return console.error(err)
      files.forEach(function (file) {
        if (path.extname(file) === ext) {
          console.log(file)
        }
      })
    })
	*/
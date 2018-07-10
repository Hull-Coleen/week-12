var fs = require("fs");
var path = require("path");

module.exports = function(dirname,extension,callback){
    var list = [];

    fs.readdir(dirname, function(err,files){
        if(err){
            return callback(err);
        }
        else{
            extension = '.' + extension
            files.forEach(function(fileName){
                if(path.extname(fileName) === extension){
                    list.push(fileName);
                }
            })
        }
        return callback(null,list);
    })
};

/*


 var fs = require('fs')
    var path = require('path')

    module.exports = function (dir, filterStr, callback) {
      fs.readdir(dir, function (err, list) {
        if (err) {
          return callback(err)
        }

        list = list.filter(function (file) {
          return path.extname(file) === '.' + filterStr
        })

        callback(null, list)
      })
    }
	
	*/
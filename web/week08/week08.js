const http = require('http');
const fs = require('fs');
var parsedurl = require('url');
var querystring = require('querystring');
function onRequest(request, response) {
	var u = parsedurl.parse(request.url, true);
	var q = u.query;
	
	console.log(q);
	console.log(request.url);
	
	
	if (request.url == "/home") {
		response.writeHead(200, {'Content_Type': 'text/html'});
	   //fs.readFile('./welcome.html', null, function(error, data) {
		 //  if (error) {
			//   response.write("page did not load");
		   //} else { 
		     //  response.write(data);
		   //}
		   response.write("<h1>Welcome to the Home Page</h1>");
		   response.end();
	    //}); 
    }		
	else if (request.url == "/getData") {
		var result = '{ "name":"Coleen Hull" , "class":"CS313" }';
		response.writeHead(200, { 'Content-Type': 'application/json' })
        response.end(JSON.stringify(result))
	}
	else if (u.pathname == "/add") {
		 var params = querystring.parse(parsedurl.parse(request.url).query);
		 response.writeHead(200, {'Content_Type': 'text/html'});
		 if ('a' in params && 'b' in params) {
		     var test = parseInt(q.a) + parseInt(q.b);
		     response.write('<h1>' + test + '</h1>');
		 }
		 response.end();
	}
	else {
		//fs.readFile('./error.html', null, function(error, data) {
		  // if (error) {
			//   response.write("page did not load");
		   //} 
		   //else { 
		     //  response.write(data);
		  // }
		  response.writeHead(404, {"Content-Type": "text/html"});
		  response.write("<h1>Page Not Found</h1>");
		   response.end();
		//});
	}
}
http.createServer(onRequest).listen(8080);


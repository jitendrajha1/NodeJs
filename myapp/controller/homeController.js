var env = require('../config');
var fs    = require("fs");
var mysql      = require('mysql');
var multipart = require('connect-multiparty');

exports.index = function(req, res, next) {
	var connection = mysql.createConnection(env.config.db);
	connection.connect();
	connection.query('SELECT * from products', function(err, rows, fields) {
	  	if (err) throw err;
		connection.end();
	  	res.render('index',{ products :  rows } );
	});
}

exports.aboutUs = function(req, res, next) {
  	res.render('about');
}


exports.pro = function(req, res, next) {
  	res.render('product');
}

exports.postPro = function(req, res, next) {

	if (!req.form.isValid) {
		//console.log(req.form.errors);
		console.log(req.form.getErrors());
		res.locals.errors = req.form.getErrors();
		res.render('product');
        //console.log(req.form.errors);
    } else {
    	fs.readFile(req.files.image.path, function (err, data) {
			  var ImgName = req.files.image.originalFilename;
			  var newPath = res.locals.uploads + ImgName;
			  console.log(newPath);
			  fs.writeFile(newPath, data, function (err) {
			    	console.log(req.body, req.files);
			    	var connection = mysql.createConnection(env.config.db);
					connection.connect();
					connection.query("INSERT INTO products (`title`, `price`,`image`) value ('" + req.body.title +"','" + req.body.price +"','" + ImgName +"')", function(err, rows, fields) {
					  	if (err) throw err;
						connection.end();
					  	res.redirect('/');
					});
	  				
			  });
		});
    }
		//console.log(res.locals.uploads);
	
	
}
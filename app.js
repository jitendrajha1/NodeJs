var http = require('http');
var express = require('express');
var app  =  express(); //for creating routes

//===============routes=====================
app.get('/',function(req, res, next){
	res.send('Welcome To Express First Application');
});

//======creating server==================
http.createServer(app).listen('5000',function(){
	console.log('server run at 5000');
});
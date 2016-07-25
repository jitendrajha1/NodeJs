var express = require('express');
var router = express.Router();
var home = require('../controller/homeController');
var multipart = require('connect-multiparty');
var multipartMiddleware = multipart();
var form = require("express-form"),
    field = form.field;

/* GET home page. */
router.get('/', home.index);
router.get('/product', home.pro);


router.post('/product',
			 multipartMiddleware,
			 function(req, res, next){
			 	console.log(req.body, req.files);
			 	if(req.files.image.originalFilename != '')
			 		req.body.image = req.files.image
			 	next()
			 },
			  form(
			    field("title").trim().required().is(/^[a-z]+$/),
			    field("price").trim().required().isFloat(),
			    field("image").required()
			  ),
			  home.postPro);

module.exports = router;

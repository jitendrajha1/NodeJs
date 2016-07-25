var express = require('express');
var router = express.Router();
var about_us = require('../controller/homeController');
/* GET home page. */
router.get('/', about_us.aboutUs);

module.exports = router;
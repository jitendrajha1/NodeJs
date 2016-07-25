/*var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'root',
  database : 'nodejs_db'
});
connection.connect();
exports.connection = function(){
   return connection;
}*/

exports.config = {
	db : {
	  host     : 'localhost',
	  user     : 'root',
	  password : 'root',
	  database : 'nodejs_db'
	}
}
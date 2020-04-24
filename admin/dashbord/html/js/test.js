const mysql = require('mysql');
var con = mysql.createConnection({
    host: "db4free.net",
    user: "poomzaadekd2020",
    password: "0811582889zX",
    database: "dekdanalatic2020"
  });
    con.connect(function(err) {
        if (err) throw err;
        // if connection is successful
        con.query("SELECT * FROM pre_web LIMIT 0,10", function (err, result, fields) {
          // if any error while executing above query, throw error
          if (err) throw err;
          // if there is no error, you have the result
          // iterate for all the rows in result
          Object.keys(result).forEach(function(key) {
            var row = result[key];
            console.log(row.pk_web)
          });
        });
      });
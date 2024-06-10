//Postgress Connection
const { Client } = require('pg')
const client = new Client({
  host: 'localhost',
  user:'root',
  password: 'root',
  database: 'master',
  port: '3030',
});
client.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

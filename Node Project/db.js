//Postgress Connection
const { Client } = require('pg')
const client = new Client({
  host: '',
  database: '',
  port: '',
})
client.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

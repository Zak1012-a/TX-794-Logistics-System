<html>
  <head>
    
  </head>
  <body>
    <?php
      // MySQL Database Login
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $dbname = "database_name";

      // Create connection
      $conn = new mysqli($servername, 
      $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " 
          . $conn->connect_error);
      }

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // collect value of input field
      $data = $_REQUEST['val1'];

      if (empty($data)) {
          echo "data is empty";
      } else {
          echo $data;
      }
    }
    ?>
  </body>
</html>

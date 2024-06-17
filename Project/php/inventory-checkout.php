<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  
  <body>
    <center>
      <?php
            // servername     =>     localhost
            // username       =>     root
            // password       =>     empty
            // database name  =>     master
            $conn = mysqli_connect("localhost","root","","master")

            // Check Connection
            if($conn === false){
              die("ERROR: Couldn't Connect. "
                 . mysqli_connect_error())
            }

            // Taking Data Input from Form
           $item_type = $_REQUEST['item_type'];
           $item_size = $_REQUEST['item_size'];
           $item_cut = $_REQUEST['item_cut'];
           $item_name = $_REQUEST['item_name'];
           $serial_number = $_REQUEST['serial_number'];
           $issued = $_REQUEST['issued'];
           $date_of_issue = $_REQUEST['date_of_issue'];
           $issued_to = $_REQUEST['issued_to'];
           $date_of_return = $_REQUEST['date_of_return']; 
             

            // Preforming insert query execution
            // Table Name cadet_data
            $sql = "INSERT INTO master_inventory VALUES ('$item_type','$item_size','$item_cut','$item_name','$serial_number','$issued','$date_of_issue','$issued_to','$date_of_return')";

            if(mysqli_query($conn, $sql)){
              echo "<h3>Data Stored in Database</h3>";

              
            }
            // Close Connection
            mysqli_close($conn); 
      ?>
    </center>
  </body>
</html>

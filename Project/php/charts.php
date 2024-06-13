 <?php
            // servername     =>     localhost
            // username       =>     root
            // password       =>     empty
            // database name  =>     master
            $conn = mysqli_connect("localhost","root","","staff")

            // Check Connection
            if($conn === false){
              die("ERROR: Couldn't Connect. "
                 . mysqli_connect_error())
            }
?>

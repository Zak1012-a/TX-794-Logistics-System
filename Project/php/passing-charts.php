 <?php
            // servername     =>     localhost
            // username       =>     root
            // password       =>     empty
            // database name  =>     master
            $conn = mysqli_connect("localhost","root","","staff");

            // Check Connection
            if($conn === false){
              die("ERROR: Couldn't Connect. "
                 . mysqli_connect_error());
            }
            // Taking Data From The Database
            $sql = "SELECT * FROM passing_data";
            $rows = array();
            while($r = mysqli_fetch_assoc($sql)) {
                $rows[] = $r;
            }
            // JSON Encoding
            print json_encode($rows);
            
        
?>

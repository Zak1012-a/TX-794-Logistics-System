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
            $conn = mysqli_connect("localhost","root","","staff")

            // Check Connection
            if($conn === false){
              die("ERROR: Couldn't Connect. "
                 . mysqli_connect_error())
            }

            // Taking Data Input from Form
            $flight = $_REQUEST['flight'];
            $cadet_role =  $_REQUEST['cadet_role'];
            $cadet_name_first =  $_REQUEST['cadet_name_first'];
            $cadet_rank =  $_REQUEST['cadet_rank'];
            $cadet_id =  $_REQUEST['cadet_id'];
            $cadet_year =  $_REQUEST['cadet_year'];
            $passing    =  $_REQUEST['passing'];
            $hq_paperwork =  $_REQUEST['hq_paperwork'];
            $awards =  $_REQUEST['awards'];
            $cords = $_REQUEST['cords'];
            $community_service_hours = $_REQUEST['community_service_hours'];
            $drill_team = $_REQUEST['drill_team'];
            $saber_team = $_REQUEST['saber_team'];
            $color_guard = $_REQUEST['color_guard'];
            
            
            
      ?>
    </center>
  </body>
</html>

<?php
header('Refresh: 1; URL=/sbtjob.php');

$servername = "sql307.epizy.com";
$username = "epiz_30270344";
$password = "Atuer2bkfnyP";
$dbname = "epiz_30270344_ajps";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check
  if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

//variable  value
         $id=  Null;
        $cmp =  $_REQUEST['cpname'];
        $pst = $_REQUEST['pst'];
        $sal =  $_REQUEST['sal'];
        $loc = $_REQUEST['loc'];
        $cat = $_REQUEST['catg'];
        $pbl = $_REQUEST['pblh'];

 $sql = "INSERT INTO comp (company, post, salary, city, type, date)  VALUES ('$cmp','$pst','$sal','$loc','$cat','$pbl')";

 if(mysqli_query($conn, $sql)){
            echo "<center><br><br><br><h3>Yor Job successfully PUBLISHED</h3><br><br><p>Now you are redirecting to previous page</p></center>"; 
 

        }

else{
            echo "ERROR:  $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>



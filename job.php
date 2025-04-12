<!DOCTYPE html>
<html>
<style>


@import url('https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap');


body{
background-color: #e8e8e8;
font-family: 'Karla', sans-serif;

}

.back{
background-color: #2a2a72;
background-image: linear-gradient(115deg, #2a2a72 0%, #009ffd 74%);
height:500px;
color:white;
overflow:hidden;
}

.title{
  font-family:arial;
  font-size:40px;
  font-weight:80;
  letter-spacing:5px;    
  
}

.box{

padding:20px 10px;
margin-top:-240px;
margin-bottom:15px;
background-color: white;
box-shadow:5px 7px 12px black;
border-radius: 1%;
max-width:85%;
min-height:450px;
text-align:center;
color:black;
overflow:hidden;
}
table {

  border: 1px solid #ccc;
  color:black;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}



table tr {
  background-color: #f8f8f8;
  border: 5px solid white;

}

table th,
table td {
  padding: 10px;
  text-align: center;
}

table th {
  font-size: 14px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.apply{
   margin:2%;
    font-size: 12px;
    height: 35px ;
    padding: 0px 10px;
    border: none ;
    border-radius:5px;
   background: #157efb;
   color: white;
}
.apply:hover{
    background: #f5f5f5;
  color:#157efb;
}
  
.apply:active{
  
    background: #b97ebb;
    color:white;

}
</style>

<body>
<section class='back'>
<center><h1 class='title'>All Jobs</h1>
<br>
<p><b>Here You can choose your desired jobs.<br>also you can submit your CV/Resume,then you can further proceed for interview </b></p>

</center>
 </section>  

<?php
$servername = "sql307.epizy.com";
$username = "epiz_30270344";
$password = "Atuer2bkfnyP";
$dbname = "epiz_30270344_ajps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, company, post , salary , city , type, date FROM comp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><div class='box' ><table> <tr>
    <th>Comp. ID</th>
    <th>Company</th>
    <th>Post</th>
    <th>Salary</th>
    <th>Location</th>
    <th>Category</th>
    <th>Published on</th>
    <th>Apply</th>
  </tr>";  
  
  
  
  // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr><td>  ". $row["id"]. " </td><td> ". $row["company"]. "  </td><td>  " . $row["post"] . "  </td><td>  " .  $row["salary"] .
        "  </td><td> " . $row["city"] ."  </td><td>  " . $row["type"] ." </td><td> " . $row["date"] ."</td><td> 
        <a href='jobform.php?cid=$row[id]&cn=$row[company]&po=$row[post]&sl=$row[salary]&ct=$row[city]&tp=$row[type]&dt=$row[date] '>
        <button  class='apply'>Apply Now</button></a>
      
        </td></tr> ";
    }
    echo "</table></div></center>";
} 



else {
    echo "0 results";
}

$conn->close();
?>

</body>


</html>

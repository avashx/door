<?php


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

        $cid=$_GET['cid'];
        $cn=$_GET['cn'];
        $po=$_GET['po'];
        $sl=$_GET['sl'];
        $ct=$_GET['ct'];
        $tp=$_GET['tp'];
        $ctg=$_GET['ctg'];
        $dt=$_GET['dt'];
?>

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
height:650px;
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
margin-top:-140px;
margin-bottom:25px;
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
  color:black;
  border-collapse: seprate;
  margin: 0;
  border-spacing: 0 8px;
  padding: 0;
  width: 80%;
  font-size: 16px;
  table-layout: fixed;
}



table tr {
  background-color: #f8f8f8;
  border: 5px solid white;
  border-radius:5%;
  

}

table th,
table td {
  padding: 10px;
  text-align: center;
  height:160%;
}

table th {
    background-color:#d9d9d9;
  font-size: 13px;
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
.form1{
  margin:2% 2%;
  display: inline-block;
  height: 32px;
  padding: 6px 16px;
  width: 35%;
  border: none;
  background-color: #f3f3f3;
  }

</style>

 <body>
        <section class='back'>
        <center><h1 class='title'>Meeting</h1>
        <br>
        <p><b>You can Schedule a meeting.<br>or an interview for following Candidate.</b></p><br>   
  <hr style="width:50%">   
<br>
<h1>Selected Company Details</h1>
      
 <table> <tr>
 <th>Cand. ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Pref. City</th>
    <th>Phone</th>
    <th>Qualification</th>
    <th>Category</th>
     <th>W.F.H</th>
     </tr>
      <br> 
   <tr><td>  <?php echo "$cid"?> </td><td><?php echo "$cn"?>  </td><td><?php echo "$po"?>  </td><td><?php echo "$sl"?> 
     </td><td> <?php echo "$ct"?>   </td><td> <?php echo "$tp"?> </td><td> <?php echo "$ctg"?> </td><td><?php echo "$dt"?> </td></tr> 
    </table><br>
          
          
          
          
          
          </center>
 </section>  

<center>
<section>
<div class='box' >

<form action="meetsec.php" method="post" >
    	<input	placeholder="Interviwer Name"
     class="form1" type="text" name="interviwer" >

     <input class="form1" placeholder="Date-of-Meeting"  type="text" onfocus="(this.type='date')"   name="dob" >

     <input class="form1" placeholder="Time-of-Meeting"  type="text" onfocus="(this.type='time')"   name="dob" >

   <input placeholder="Email"
     class="form1" type="email" name="email" >
     <br><br>
<small><b>Additional Remarks: </b></small><br>
   <textarea  placeholder=" "
    class="form1"  name="dis" > </textarea>
<br>
<input type="checkbox"  name="wfh" value="wfh">  <small><b>I Confirm the candidate for the meeting </b></small></input>
<br><br>

     		
    <br>
		<input type="submit" class="apply" value="Schedule">
       
  
	</form>
 <a href="https://calendar.google.com/calendar/u/0/r/eventedit?vcon=meet&dates=now&hl=en-GB&pli=1" target="_blank" ><input type="submit" class="apply" value="Schedule on Google Meet"></a>


</div>
</section>

<br>
<h1>Dream Job</h1>
<small><b>Developed By Aman Vashishth</b></small>
<br><br>


  </center>


</body>
</html>

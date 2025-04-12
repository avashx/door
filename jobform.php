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
        <center><h1 class='title'>Application Form</h1>
        <br>
        <p><b>Here You can submit Application.<br>and can also appoint meeting</b></p><br>   
  <hr style="width:50%">   
<br>
<h1>Selected Company Details</h1>
      
 <table> <tr>
    <th>Comp. ID</th>
    <th>Company</th>
    <th>Post</th>
    <th>Salary</th>
    <th>Location</th>
    <th>Category</th>
    <th>Published on</th>
    </tr>
      <br> 
   <tr><td>  <?php echo "$cid"?> </td><td><?php echo "$cn"?>  </td><td><?php echo "$po"?>  </td><td><?php echo "$sl"?> 
     </td><td> <?php echo "$ct"?>   </td><td> <?php echo "$tp"?> </td><td><?php echo "$dt"?> </td></tr> 
    </table><br>
          
          
          
          
          
          </center>
 </section>  

<center>
<section>
<div class='box' >

<form action="applicant.php" method="post" >
    	<input	placeholder="First Name"
     class="form1" type="text" name="firstname" >

   <input placeholder="Last Name"
     class="form1" type="text" name="lastname" >
  <input placeholder="Father's Name"
     class="form1" type="text" name="fathername" >

   <input placeholder="Email"
     class="form1" type="email" name="email" >

    <input placeholder="Perm. Address"
    class="form1" type="address" name="address" >

  <input  placeholder="City"
     class="form1" type="text" name="city" >

   <input  placeholder="Phone"
    class="form1" type="tel" name="phone" >

  
	


     <input class="form1" placeholder="Date-of-Birth"  type="text" onfocus="(this.type='date')"   name="dob" >


    <select name="qul" id="" class="form1">
<option value="">Primary Qualification</option>
<option value="B.tech">B.Tech</option>
<option value="M.Tech">M.Tech</option>
<option value="B.Sc">B.Sc</option>
<option value="M.Sc">M.Sc</option>
<option value="M.Ba">M.Ba</option>
<option value="12th">12th only</option>
<option value="10th">10th only</option>
</select>
 

       <select name="catg" id="" class="form1">
<option value="">Job Prefrence</option>
<option value="Full-Time">Full Time</option>
<option value="Part-Time">Part Time</option>
<option value="Freelance">Freelance</option>
<option value="Internship">Internship</option>
<option value="Temporary">Temporary</option>
</select><br><br>
<small><b>Additional Qualification/Achivements: </b></small><br>
   <textarea  placeholder=" "
    class="form1"  name="dis" > </textarea>
<br>
<input type="checkbox"  name="wfh" value="wfh">  <small><b>I Prefer Work From Home </b></small></input>
<br><br>
   <small><b>CV/Resume: </b></small>
    <input class="form1" type="file" name="file" >
		
   
		
    <br>
		<input type="submit" class="apply" value="Submit">
  
	</form>

</div>
</section>

<br>
<h1>Dream Job</h1>
<small><b>Developed By Aman Vashishth</b></small>
<br><br>


  </center>


</body>
</html>
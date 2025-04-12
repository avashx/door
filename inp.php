<html>
  <head>
    <title>AVJ</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap');

      :root {
        --rec: none;
        /*display recent jobs*/
      }

      body {
        background-color: #e8e8e8;
        color: white;
        margin: -1%;
        font-family: 'Karla', sans-serif;
      }

      body::-webkit-scrollbar {
        display: none;
      }

      .back {
        background-color: #2a2a72;
        background-image: linear-gradient(115deg, #2a2a72 0%, #009ffd 74%);
        height: 500px;
        overflow: hidden;
      }

      a {
        text-decoration: none;
        color: white;
      }

      h2 {
        font-weight: 100;
      }

      .sectop {
        margin-top: 6px;
        min-height: 300px;
        margin: 1% 8%;
        color: white;
        overflow: hidden;
      }

      .img {
        padding-right: 5%;
        float: right;
        width: 30%;
        height: auto;
      }

      .intro {
        margin-top: -2%;
        color: white;
        font-family: arial;
        font-size: 40px;
        font-weight: 80;
        letter-spacing: 5px;
      }

      .box {
        margin: auto;
        padding-top: 10px;
        padding-bottom: 20px;
        margin-top: -80px;
        margin-bottom: 15px;
        background-color: white;
        box-shadow: 5px 7px 12px #868B8E;
        border-radius: 1%;
        max-width: 85%;
        min-height: 450px;
        text-align: center;
        color: black;
        overflow: hidden;
      }

      .card {
        width: 150px;
        height: calc(11.7 * 150px / 9);
        background-color: white;
        border-radius: 12px;
        margin: 20px 5%;
        text-align: center;
        border: solid 2px #444444;
        cursor: pointer;
        overflow: hidden;
        color: black;
        box-shadow: 5px 7px 12px #141F72;
        display: inline-block;
      }

      .card:hover {
        background-color: black;
        color: white;
        box-shadow: 10px 18px 15px #753a88;
      }

      .search {
        width: 400px;
        height: 40px;
        padding: 0 1rem;
        background: #e8e8e8;
        border-radius: 2%;
        border: 1px;
        transition: transform 0.1s ease-in-out;
      }

      .frm {
        padding: 2% 2%;
        border-radius: 2%;
      }

      .form {
        height: 40px;
        background: #fff;
        font-size: 15px;
        color: black;
        padding-left: 10px;
        margin: 2% 1%;
        border: 1px solid #d9d9d9;
      }

      .form1 {
        margin: 2% 2%;
        display: inline-block;
        height: 32px;
        padding: 6px 16px;
        width: 35%;
        border: none;
        background-color: #f3f3f3;
      }

      .btn {
        margin: 2%;
        font-size: 15px;
        height: 40px;
        padding: 0px 40px;
        border: none;
        border-radius: 5px;
        background: #00d363;
        color: white;
      }

      .btn1 {
        margin: 2%;
        font-size: 15px;
        height: 40px;
        padding: 0px 40px;
        border: none;
        border-radius: 5px;
        background: #157efb;
        color: white;
      }

      .btn:hover,
      .btn1:hover {
        background: #f5f5f5;
        color: #157efb;
      }

      .btn:active,
      .btn1:active {
        background: #b97ebb;
        color: white;
      }

      .btn2 {
        padding: 13px 45.5px;
        border: solid 2px #444444;
        border-radius: 47px;
        text-align: center;
        font-size: 14px;
        margin-right: 15px;
        margin-left: 15px;
        transition: .4s;
      }

      .btn2:hover {
        background-color: black;
        color: white;
      }

      .sec2 {
        margin: auto;
        padding-top: 10px;
        padding-bottom: 20px;
        margin-top: 30px;
        margin-bottom: 15px;
        background-color: white;
        border-radius: 1%;
        max-width: 85%;
        min-height: 350px;
        text-align: center;
        color: black;
        box-shadow: 5px 7px 12px #868B8E;
      }

      .pplr {
        margin: 2%;
        font-size: 15px;
        height: 40px;
        min-width: 15%;
        padding: 5px 10px;
        border: 1px solid #d5f3e2;
        border-radius: 5px;
        background: white;
        color: #1a1a1a;
      }

      .search:hover,
      .search:focus,
      .pplr:hover {
        background-color: black;
        color: white;
      }

        {
        background-color: black;
        color: white;
      }

      .rec {
        text-align: center;
        margin: auto;
        padding-top: 10px;
        padding-bottom: 20px;
        margin-top: 30px;
        margin-bottom: 15px;
        color: black;
        display: var(--rec);
      }

      table {
        border: 1px solid #ccc;
        color: black;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 95%;
        table-layout: fixed;
      }

      table tr {
        background-color: white;
        border: 15px solid #e8e8e8;
      }

      table tr:hover {
        box-shadow: 7px 10px 8px #753a88;
        transform: scale(1.01);
        transition: all 0.2s ease-in-out;
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

      .blue {
        display: inline-block;
        background: blue;
        padding: 2px 6px;
        font-size: 75%;
        color: black;
        border: none;
        font-weight: 700;
        text-align: center;
        border-radius: 25px;
      }

      .blue:active {
        background: #157efb;
        color: white;
      }

      .green {
        display: inline-block;
        background: green;
        padding: 4px 6px;
        color: white;
        font-size: 75%;
        font-weight: 700;
        text-align: center;
        border-radius: 25px;
      }

      .blue {
        display: inline-block;
        color: white;
        background: blue;
        padding: 4px 6px;
        font-size: 75%;
        font-weight: 700;
        text-align: center;
        border-radius: 25px;
      }

      .red {
        display: inline-block;
        background: red;
        padding: 4px 6px;
        font-size: 75%;
        font-weight: 700;
        color: white;
        text-align: center;
        border-radius: 25px;
      }

      .load {
        padding: 10% 6px;
        position: fixed;
        z-index: 999999;
        background: #fff;
        width: 100%;
        height: 100%;
        color: black;
        text-align: center;
        animation: var(--lod);
        animation-fill-mode: forwards;
      }

      @keyframes fadeOut {
        100% {
          opacity: 0;
          visibility: hidden;
        }
      }
    </style>
  </head>
  <body>
    <center>
      <div class="load">
        <img src="https://seeklogo.com/images/I/integrated-institute-of-technolgy-iit-dwarka-logo-4DC6165CC8-seeklogo.com.png" height="150px">
        <br>
        <br>
        <h1>ADVANCED JOB PROVIDING SYSTEM</h1>
        <p>
          <b>A Minor Project</b>
          <br>
          <br>
          <br> INTEGRATED INSTITUTE OF TECHNOLOGY
        </p>
        <br>
        <hr style="width:50%">
        <br>
        <h1>ITESM </h1>
        <h2>(5ᵗʰ sem)</h2>
      </div>
    </center>
    <section class="back">
      <div class="sectop">
        <div style="float: right;padding: 3%;">
          <a href="/sbtjob.php" class="green">Publish a job</a>
        </div>
        <h2>ADVANCED JOB PROVIDING SYSTEM</h2>
        <br>
        <img class="img" src="https://avstudy.herokuapp.com/anim.png"></img>
        <h3>Join Us</h3>
        <h3 class="intro">DREAM-JOB</h3>
        <small>
          <p>(make your career with us)</p>
        </small>
      </div>
    </section>
    <section class="box">
      <h2>New Job for New Generation</h2>
      <br>
      <div>
        <a href="/job.php">
          <input type="button" value="Find a Job" class="btn1">
        </a>
        <input type="button" onclick="window.location.href='/cdd.php'" value="Find a Candidate" class="btn1">
      </div>
      <br>
      <form action='' method='GET'>
        <input class="search" required name="search" type="text" value="
        <?php if(isset($_GET['search'])) {echo $_GET['serach'];}?>" placeholder='Search for your Desired Job, Place, Post'>
        <button type="submit" class="btn">Search</button>
        <br>
        <br>
        <div>
      </form>
      <center> <?php

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

//filter search
 if(isset($_GET['search']))
 {
     $filtervalues = $_GET['search'];
      $query="SELECT * FROM comp WHERE CONCAT(company,post,city,type) LIKE '%$filtervalues%'";
      $query_run=mysqli_query($conn,$query);

      ?> <div>
          <center>
            <h4> Followings are Search Results </h4>
          </center>
          <table>
            <tr>
              <th>Co. ID</th>
              <th>Company</th>
              <th>Post</th>
              <th>Salary</th>
              <th>Location</th>
              <th>Category</th>
              <th>Published on</th>
              <th>Apply</th>
            </tr> <?php
if (mysqli_num_rows($query_run) > 0)
{
    foreach ($query_run as $items)
    {
?> <tr>
              <td> <?=$items['id']; ?> </td>
              <td> <?=$items['company']; ?> </td>
              <td> <?=$items['post']; ?> </td>
              <td> <?=$items['salary']; ?> </td>
              <td> <?=$items['city']; ?> </td>
              <td> <?=$items['type']; ?> </td>
              <td> <?=$items['date']; ?> </td>
              <td>
                <a href='jobform.php?cid=
                <?=$items['id']; ?>&cn=
                <?=$items['company']; ?>&po=
                <?=$items['post']; ?>&sl=
                <?=$items['salary']; ?>&ct=
                <?=$items['city']; ?>&tp=
                <?=$items['type']; ?>&dt=
                <?=$items['date']; ?>'>
                  <p class='btn1'>Apply Now</p>
                </a>
              </td>
            </tr> <?php
    }
}
else
{
?> <tr>
              <td colspan="8">No record found</td>
            </tr> <?php
}
}
?>
          </table>
        </div>
      </center>
      </div>
      <h5>( or Submit your Qualification to get Hired )</h5>
      <input onclick="window.location.href='/sbtcdd.php'" type="submit" value="Submit Qualification" class="btn2">
    </section>
    <br>
    <section>
      <center>
        <div class="card">
          <h2>Get</h2>
          <h1>Jobs</h1>
          <br>
          <form action="cjob.php" method="post">
            <button name="typ" value="Full-Time" class="blue">Full-Time</button>
          </form>
          <br>
        </div>
        <div class="card">
          <h2>Get</h2>
          <h1>Jobs</h1>
          <br>
          <form action="cjob.php" method="post">
            <button name="typ" value="WFH" class="green">Work From Home</button>
          </form>
          <br>
        </div>
        <div class="card">
          <h2>Get</h2>
          <h1>Jobs</h1>
          <br>
          <form action="cjob.php" method="post">
            <button name="typ" value="Part-Time" class="red">Part-Time</button>
          </form>
          <br>
        </div>
      </center>
    </section>
    <section id="pplr" class="sec2">
      <h2>Popular Jobs</h2>
      <br>
      <from class="frm">
        <input type="text" class="form" placeholder="eg. Garphic. Web Developer">
        <select name="" id="" class="form">
          <option value="">Category</option>
          <option value="">Full Time</option>
          <option value="">Part Time</option>
          <option value="">Freelance</option>
          <option value="">Internship</option>
          <option value="">Temporary</option>
        </select>
        <select name="" id="" class="form">
          <option value="">Location</option>
          <option value="">Delhi</option>
          <option value="">Noida</option>
          <option value="">Chennai</option>
          <option value="">Gurugram</option>
          <option value="">Chandigarh</option>
          <option value="">Mumbai</option>
          <option value="">Banglore</option>
        </select>
        <a href="/job.php">
          <input type="submit" value="Search a job" class="btn">
        </a>
        </form>
        <br>
        <hr style="width:50% ">
        <br>
        <input type="button" class="pplr" href="" value="Graphic Designer">
        <input type="button" class="pplr" href="" value="Advertising  ">
        <input type="button" class="pplr" href="" value="Web Development  ">
        <input type="button" class="pplr" href="" value="Education & Training  ">
        <input type="button" class="pplr" href="" value="Writing">
        <input type="button" class="pplr" href="" value="Marketing & Sales ">
        <input type="button" class="pplr" href="" value="PHP, Java Programming">
        <input type="button" class="pplr" href="" value="Software development ">
    </section>
    <div>
      <center>
        <a href="/job.php">
          <div class="card">
            <br>
            <h1>Popular Jobs</h1>
            <br>
          </div>
        </a>
        <a href="#rec" onclick="rec();">
          <div class="card">
            <br>
            <h1>Recent Jobs</h1>
            <br>
          </div>
        </a>
      </center>
    </div>
    <section class="rec">
      <h1>
        <b>Recent Jobs</b>
      </h1> <?php

$sql = "SELECT * FROM comp ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
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
        echo " 
<tr >
<td>  ". $row["company"]. "  </td>
<td>  " . $row["post"] . "  </td>
<td>  " .  $row["salary"] .
        "  </td>
<td> " . $row["city"] ."  </td>
<td>  " . $row["type"] ." </td>
<td> " . $row["date"] ."</td>
<td>
<a href='jobform.php?cid=$row[id]&cn=$row[company]&po=$row[post]&sl=$row[salary]&ct=$row[city]&tp=$row[type]&dt=$row[date] '>
<button  class='btn1'>Apply Now</button>
</a>
</td>
</tr> ";
    }
    echo "
</table>
</div>
</center>";
} 



else {
    echo "0 results";
}

$conn->close();
?>
    </section>
  </body>
  <script>
    window.onload = function() {
      setTimeout(lod, 500)
    };

    function lod() {
      let fd = "fadeOut 1s"
      document.documentElement.style.setProperty('--lod', fd)
    }

    function rec() {
      let dsp = "block"
      document.documentElement.style.setProperty('--rec', dsp)
    }
  </script>
</html>
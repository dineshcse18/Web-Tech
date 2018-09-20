<?php 
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
body{
background-image:url("bg2.jpg");
}
td{
text-align:center;
}
table a{
text-decoration:none;
color:white;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
input,textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
/*Logi/Signup Page*/
* {
  box-sizing: border-box;
}

/* style the container */
.container1 {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
.container1 input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchrenaissance */
}

input:hover,
.btn:hover {
  opacity: 1;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 400px;
}


/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
/*-----*/
</style>
</head>
<body>

<div class="navbar">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Events
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tech.php">Technical</a>
      <a href="online.php">Online</a>
      <a href="nontech.php">Non-Technical</a>
    </div>
  </div>
  <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor:pointer;"  id="signin">Signin</a>
  <a  style="background-color:green;">FAQ</a>  
  <div class="dropdown" style="float:right;display:none;" id="login">
    <button class="dropbtn" style="background-color:red"><?php 
	if(isset($_SESSION['login_user'])){
$login_session=$_SESSION['login_user'];
echo $login_session;
echo "<script type='text/javascript'>document.getElementById(\"signin\").style.display=\"none\";document.getElementById(\"login\").style.display=\"\";</script>";
	}
	?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="students.php">Dashboard</a>
      <a href="logout.php">Logout</a>
      
    </div>
  </div>
  </div>
  <img src="kec.jpg" alt="KEC" width="150" height="150" style="float:left;position:absolute;top:10%;left:5%;"><center><h1 style="color:orange;font-size:100px;">Renaissance 2k18</h1></center><img src="csea.jpg" width="150" height="150" alt="CSEA" style="float:right;position:absolute;top:10%;right:5%;">
  <div id="id01" class="modal">
  
  <div class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><center><h2 style="text-align:center;color:orange">Renaissance 2k18 SignUp/Login</h2></center>    </div>

    <div class="container1">
    <div class="row">
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
      <form method="post" onsubmit="return checkForm(this)">
      <center><h4 style="color:brown;">New User,Register here</h4></center>
      
      <input type="text" placeholder="Username" name="name" id="name" required>
	  
	  <input type="text" placeholder="RollNo" name="roll" id="roll" required>
	  
      <input type="email" placeholder="Email Id" name="email" id="email" required>
	  
      <input type="tel" placeholder="Phone No" name="phno" id="phno" required>
      
      <input type="password" placeholder="Password" name="pwd1" id="pwd1" required>
	  
      <input type="password" placeholder="Confirm Password" name="pwd2" id="pwd2" required>
	  
      <input type="submit" value="Register/Sign Up" name="submit" id="submit">
	  </form>
      </div>

      <div class="col">
        <br>
        <br>
        <br>
		<form method="post">
        <center><h4 style="color:brown;">Already Registerd User,Login here</h4></center>
        <input type="text" name="mail" id="mail" placeholder="Email" required>
        <input type="password" name="pwd" id="pwd" placeholder="Password" required>
        <input type="submit" value="Login" name="submit1" id="submit1">
        <a href="forget.php" style="color:blue" class="btn">Forgot password?</a>
        </form>
      </div>
      
    </div>
</div>


    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </div>
</div>
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Password and confirm password doesnt match");
      form.pwd1.focus();
      return false;
    }
	return true;
  }
  </script>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

<h2 style="color:white;">Registration</h2>

<button class="accordion">Does it cost anything to me?</button>
<div class="panel">
  <p>Registration on Renaissance is free of cost.</p>
</div>

<button class="accordion">Do I need a valid email id for registration?</button>
<div class="panel">
  <p>Yes, you need a valid email id to register on Renaissance. The same email id will be used to communicate with you about the event.</p>
</div>
<h2 style="color:white;">Log In / Home</h2>
<button class="accordion">How do I log in?</button>
<div class="panel">
  <p>Reach the Login in page by entering your log in and password in the site header or by clicking on Signin in the top navigation bar of the homepage header and enter your username (email id) and password.</p>
</div>

<button class="accordion">I have created my profile but not able to log in?</button>
<div class="panel">
  <p>You need to check your username and password if you are not able to log in to your account. Please visit your email id and look for the welcome mail received from Team Renaissance.</p>
</div>

<button class="accordion">I don't remember my password. How do I retrieve my password?</button>
<div class="panel">
  <p>If you are not able to trace the welcome mail received from Team Renaissance and you don't remember your password, click on the "Forgot Password" link below the log in box. It will prompt you to enter your username (email id). A new password will be sent to you on your email id.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<hr>
<table style="font-size:15px;background-color:grey;width:100%;">
<tr>
<th>Follow Us</th>
<th>Contact Us</th>
</tr>
<tr>
<td><a href="https://www.facebook.com/CSEAssociation"><i class="fa fa-facebook-official"></i> Facebook</a></td>
<td><a href="tel:9486813306">Vijayaprabhu-9486813306</a></td>
</tr>
<tr>
<td><a href="https://www.instagram.com/csea_1819"><i class="fa fa-instagram"></i> Instagram</a></td>
<td><a href="tel:9786795039">Gowshikraja-9786795039</a></td>
</tr>
<tr>
<td><a href=""><i class="fa fa-linkedin-square"></i> LinkedIn</a></td>
<td><a href="mailto:csea1819@gmail.com">Mailto:csea1819@gmail.com</a></td>
</tr>
<tr>
<td colspan="2" align="center">© 2018 Renaissance - All Rights Reserved</td>
</tr>
</table>
<?php
	$servername='localhost';
	$user = 'root';
	$password = '';
	$mysql_database = 'renaissance';
	$msg='Error:Email is  already registered';
	$db = mysqli_connect($servername, $user, $password,$mysql_database);
	if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
			}
	if (isset($_POST['submit']))
        {     
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$email=$_POST['email'];
    $password=$_POST['pwd1'];
	$phone=$_POST['phno'];
	$query="SELECT * FROM students WHERE email='$email'";
    $sql="INSERT INTO students(name,rollno,email,password,phone) VALUES('$name','$roll','$email','$password','$phone')";
	if(mysqli_num_rows(mysqli_query($db,$query))!=0)
	{
		echo "<script type='text/javascript'>alert(\"$msg\");</script>"; exit;
	}
	else
	{
     if(mysqli_query($db, $sql))
	 {
		 echo "<script type='text/javascript'>alert('Registered Sucessfully.Login to Continue.');</script>"; exit;
	} 
	else 
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
	}
    }
	if (isset($_POST['submit1']))
        {     
	$mail=$_POST['mail'];
    $pwd=$_POST['pwd'];
	if($mail==='csea1819@gmail.com' && $pwd==='cseaadmin'){
		echo "<script type='text/javascript'>window.top.location='admin.php';</script>";
		$_SESSION['login_user']=$mail;
	}
	else{
    $sql = "SELECT email FROM students WHERE email='$mail' and password='$pwd'";
	$query=mysqli_query($db, $sql);
     if (mysqli_num_rows($query) != 0)
    {
		$_SESSION['login_user']=$mail; 
		echo "<script type='text/javascript'>window.top.location='faq.php';document.getElementById(\"signin\").style.display=\"none\";document.getElementById(\"login\").style.display=\"\";</script>"; exit;
    }
    else
      {
    echo "<script type='text/javascript'>alert('Email/username Or Password Invalid!')</script>";
    }
    }
	}
	mysqli_close($db);
    ?>
</body>
</html>

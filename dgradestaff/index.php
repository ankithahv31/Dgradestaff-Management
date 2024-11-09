<?php
// session_start();
$username = "Admin";
$password = "Admin";
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $name && $password == $password) {
        $_SESSION['loggedin'] = true;
        header('Location:admin.php');
        exit;
    } else {
        $error = "Invalid login credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>college warriors</title>
  <link rel="stylesheet" href="style.css">
  <style>
    header {
      overflow: hidden; /* Clear floats */
      background-color:lightpink;
      color:black;
      text-align: center; /* Center align the content inside header */
    }
    
        header:hover {
    background-color: #fc2d5a;
    }
    footer{
      overflow: hidden; /* Clear floats */
      background-color:lightpink;
      color:black;
      text-align: center; /* Center align the content inside header */
    }
    
        footer:hover {
    background-color: #fc2d5a;}
    .center {
      text-align: center;
    }
    nav ul li a {
  text-decoration: none;
  padding: 10px 20px;
  color: black;
}
    .banner img {
      max-width: 100%; /* Limit the maximum width of the image */
      height: auto; /* Maintain aspect ratio */
      max-height: 400px;
    }
    </style>
</head>
<body>
  <header>
    <h1>COLLEGE WARRIORS</h1>
    
    <nav>
      <ul>
       
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
       <li><a href="login.php">LOGIN</a></li>
        
      </ul>
    </nav>
  </header>
<div class="center">
<h1><centre>ST JOSEPH ENGINEERING COLLEGE</centre></h1>
    <h2>vamanjoor manglore dk-567432</h2>
    <h2>An Autonomous Institution</h2>
</div>
  <section class="banner">
    
    <img src="img/image1.jpeg" >
  </section>


  <!--<section class="a">
    Add featured ice cream flavors here
  </section> -->

  <footer>
    <p>JOB VACANCIES AVAILABLE </p>
    <P>FOR MORE INFORMATION CLICK ON CONTACT AS ABOVE MENTIONED</P>
  </footer>
</body>
</html>
<?php
require('config.php');
?>
<?php
session_start();

$username = "Admin";
$password = "Admin";
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $name && $password == $password) {
        $_SESSION['loggedin'] = true;
        header('Location:staffdetails.php');
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
  <title> Admin Login</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add CSS to position the navigation bar above the image */
    header {
      overflow: hidden; /* Clear floats */
      background-color:lightpink;
      color:black;
      text-align: center; /* Center align the content inside header */
    }
    
        header:hover {
    background-color: #fc2d5a;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
    }

    img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
    }

    .login-section {
      text-align: center;
    }
  </style>
</head>
<body>

<section class="banner">
    
<img src="img/about-bg.png" >
</section>

  <section class="login-section">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f7e5e9;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            
            .login-container {
                background-color: #f2f2f2;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            
            .login-container h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .login-form input[type="text"],
            .login-form input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            
            .login-form input[type="submit"] {
                width: 100%;
                background-color: lightpink;
                color: black;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            .login-form input[type="submit"]:hover {
  background-color: #fc2d5a;
                
            }
        </style>
    </head>
    <body>
    <header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
        <div class="login-container">
            <h2>Admin Login</h2>
            <form class="login-form" action="#" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
    </html>
    
  </section>

<!---- <footer>
    <p>&copy; 2024 Ice Cream Parlor. All rights reserved.</p>
  </footer>-->
</body>
</html>

<?php/*
require('config.php');

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location:index.php');
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $id=$_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $target_dir = "";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $image = "";

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image= $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        
        




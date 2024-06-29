<?php
require('config.php');

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location:staffdetails.php');
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $id=$_POST['id'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];



        $target_dir = "";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $image = "";

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image= $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        $sql = "INSERT INTO staff (id,name,department,contact,address,image) VALUES ('$id','$name','$department','$contact', '$address', '$image')";
        $con->query($sql);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        
        $sql = "DELETE FROM staff WHERE id='$id'";
        $con->query($sql);
    }
}
$staff = $con->query("SELECT * FROM  staff");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Manage staffs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color:lightpink;
            color: black;
            padding: 20px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        .banner {
            text-align: center;
            padding: 50px 0;
            
        }

        .banner img {
            max-width: 80%;
            
            height: 400px;
            
        }

        .container {
            text-align: center;
            margin-top: 2px;
        }

        .container form {
            display: inline-block;
            text-align: left;
            margin-top: 1px;
        }

        .container table {
            margin: 0 auto;
            width: 100%;
        }

        .container table input[type="text"],
        .container table input[type="number"],
        .container table input[type="file"],
        .container table textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .container input[type="submit"] {
            background-color: green;
            color: white;
            padding: 10px 160px;
            border: none;
            cursor: pointer;
        }

        .container input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<header>
    <h1>MANAGE STAFF</h1>
    
    <nav>
      <ul>
       
        <li><a href="staffdetails.php">MANAGE STAFF</a></li>
        <li><a href="staff_remove.php">REMOVE STAFF</a></li>
       <li><a href="view.php">VIEW STAFF</a></li>
       <li><a href="login.php">LOGOUT</a></li>
        
      </ul>
    </nav>
    </header>
    <div class="container">
    <h2>Add New staff</h2>
    <div>
  <section class="banner">
  
    <img src="img/about-bg.png" alt="sj joseph">
  </section>
  <div class="container">
  
    <form method="POST" enctype="multipart/form-data">
        <table border=1>
        <tr>
                <td>ID:</td>
                <td><input type="number" name="id" required></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><input type="text" name="department" required></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="number" name="contact" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" required></textarea></td>
            </tr>
            <tr>
                <td>Image URL:</td>
                <td><input type="file" name="image" required></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Add staff">
    </form>
</div>
        <!--id:<input type="number" name="id" required><br>
        Name: <input type="text" name="name" required><br>
        department: <input type="text" name="department" required><br>
        contact: <input type="number" name="contact" required><br>
        address: <input type="textarea" name="address" required><br>
        Image URL: <input type="file" name="image" required><br>
        <input type="submit" name="add" value="Add staff">-->
        
    

</body>
</html>
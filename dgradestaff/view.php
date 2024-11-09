<!DOCTYPE html>
<html>
<head>
<title>Admin - Manage staffs</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}
nav {
    width: 100%;
    display: block;
     /* Ensure padding and border are included in the width */
}


        header {
            text-align: center;
            background-color:lightpink;
            color: black;
            padding: 40px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }
.container {
  max-width: 800px;
  margin: 0 auto; /* This centers the container horizontally */
  padding: 20px;
  text-align:center;
}

h2 {
  text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table, th, td {
  border: 4px solid #ddd;
  padding: 8px;
  text-align: left;
}



th {
  background-color: #f2f2f2;
}

    
    </style>
</head>
<body>
<div class="container">
<header>
    <h1>MANAGE STAFF</h1>
    
    <nav>
      <ul>
       
        <li><a href="staffdetails.php">MANAGE STAFF</a></li>
        <li><a href="add_staff.php">ADD STAFF</a></li>
       <li><a href="staff_remove.php">REMOVE STAFF</a></li>
       <li><a href="login.php">LOGOUT</a></li>
        
      </ul>
    </nav>
    </header>
</body>
        </html>

<?php
require('config.php');?>
<?php $staff = $con->query("SELECT * FROM  staff");
        ?>

<html>
    <body>
    
<h2>STAFF DETAILS</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>department</th>
            <th>contact</th>
            <th>address</th>
            <th>Image URL</th>
</tr>
       
        <?php
        
         while ($row = $staff->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" width="100">
</td>
        </tr>
        <?php } ?>
    </table>
    </div>
         </body>
         </html>
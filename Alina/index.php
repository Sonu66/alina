<?php session_start(); ?>
<html>
<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
     <div id="header">
         WELCOME TO THIS PAGE!!
     </div>
    <?php
    if(isset($_SESSION['valid'])) {			
        include("connection.php");					
        $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>				
            <a href='view.php'>View and Add Products</a>  |   <a href='logout.php'>Logout</a> 
        <br/><br/>
    <?php	
    } else {
        echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
    }
    ?>
   
</body>
</html>
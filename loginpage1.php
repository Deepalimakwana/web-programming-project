<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.html");
}

if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM login WHERE user='$user' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.html");
	} else {
		echo "<script>alert('Woops! username or Password is Wrong.')</script>";
	}
}

?>

<html>
    <head>
        <script>
            function validate()
            {
               var username = document.getElementById("username").value;
               var password = document.getElementById("password").value;


               if(username=="")
               {
                   alert("Please Enter username.");
                   return false;
               }
               if(username.length<3)
               {
                   window.alert("username should be greater than 3 characters.");
                   return false;
               }
               if(username.length>20) 
               {
                   window.alert("username should not be greater than 20 characters.");
                   return false;
               }   
            }

        </script>
        <meta charset="utf-8">
        <title>The Artsy Lens Login page</title>
        <link rel="stylesheet" href="Login.css">
    </head>

    <body>

        <form method="POST" action="#" class="box" >
            
            <h1>Hello Admin! Kindly Login To continue</h1>

            <input type="text" name="" placeholder="Enter username" id="username">
            <input type="password" name="" placeholder="enter password" id="password">
            <a href="index.html"> <input type="button" name="Login" value="Login" class="button" onclick="validate()"></a>
        </form>
    </body>
</html>
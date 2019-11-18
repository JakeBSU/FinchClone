<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id=exam>

        <div class="topnav">
          <center>

            <center>

              <a href="index.html" id="home" >Home</a>
              <a href="history.html" id="history">History</a>
              <a href="Tutorials.html" id="manual">Manuals and Tutorials</a>
              <a href="Translator.html" id="translator">Translator</a>
              <a href="Example.html" id= "example">Example</a>
              <a href="Comparision.html" id="comparision">Comparision</a>
            </center>
		</div>
		
        <div>
		<center>
		Links
    <li><a href="Example.html">Go Back</a></li>
    <li><a href="helloworld.php">Hello World</a></li>
    <li><a href="calculator.php">Calculator</a></li>
    <li><a href="table.php">Table</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="lockbox.php">Lockbox</a></li>
		</center>
        </div>
		
		<html>

        <?php
// granted.php
session_start();

if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}

echo "ACCESS GRANTED";
?>
  
<a href="logout.php">Logout</a>
<!DOCTYPE html>
<html>
    <head>
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
        <div><center>Links
        <li><a href="Example.html">Go Back</a></li>
    <li><a href="helloworld.php">Hello World</a></li>
    <li><a href="calculator.php">Calculator</a></li>
    <li><a href="table.php">Table</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="lockbox.php">Lockbox</a></li>
        </center>
        </div>
<?php

session_start();

  if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
    header("Location:granted.php");
  }

  $email = "";
  if (isset($_SESSION["email_preset"])) {
    $email = $_SESSION["email_preset"];
  }
?>
    <h3>Login Example</h3>
    <?php
    if (isset($_SESSION["status"])) {
      echo "<div id='status'>" .  $_SESSION["status"] . "</div>";
      unset($_SESSION["status"]);
    }
    ?>
    <form action="login_handler.php" method="POST">
      <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>"/>
      </div>
      <div>
       <label for="password">Password</label>
        <input type="password" name="password" id="password" value=""/>
      </div>
      <div>
        <input type="submit" name="submit" id="login" value="Login"/>
      </div>
    </form>
    </body>
</html>

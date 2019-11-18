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
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						// Calculate total
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'times')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						
						// Print total to the browser
						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="calculator.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>
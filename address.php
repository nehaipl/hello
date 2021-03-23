<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
	#body {
		margin: 0 15px 0 15px;
	}	
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>Please register Here.</p>       
          
          <label>Village/City :</label>
          <input type="text" name="vill" id="vill"><br><br>
          <label>Street :</label>
          <input type="text" name="Street" id="street"><br><br>
          <label>House No. :</label>
          <input type="text" name="house" id="house"><br><br>
          <label>District :</label>
		  <input type="text" name="dist" id="dist"><br><br>
		  
		  <a href="<?php echo 'personal'; ?>"><button> Previous </button></a>


		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="../user_guide">User Guide</a>.</p>
	</div>

	
</div>

</body>
</html>

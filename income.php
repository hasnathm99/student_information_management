<?php

ob_start();
session_start();
require 'layout.php';

if(!isset($_SESSION['user_id'])){
  echo '<h2 style="color:#C9302C">Log in First<h2>';
  header('refresh:1 ; url=login.php');
  die();
}

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Income</title>

	<style type="text/css">

		a{
			text-decoration: none;
			color: white
		}
		a:hover{
			color: white;
			text-decoration: none;
		}
		button{
			padding: 10px
		}
	</style>
</head>
<body>
	<div id="main" style="padding-top: 10%">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-2">
				<div >
					<a href="boardreg.php"><button class="btn btn-danger btn-lg ">Board Registration</button></a>
				</div>
			</div>		
			<div class="col-lg-2">
				<div >
					<a href="examfees.php"><button class="btn btn-danger btn-lg ">Examination Fees</button></a>
				</div>
			</div>
			<div class="col-lg-2">
				<div >
					<a href="other_campus_fee.php"><button class="btn btn-danger btn-lg " >Other Campus Fees</button></a>
				</div>
			</div>
			<div class="col-lg-2">
				<div >
					<a href="affiliation_fee.php"><button class="btn btn-danger btn-lg ">Yearly Affiliation Fee</button></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>







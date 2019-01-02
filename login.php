<?php
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body style="background: url(bird.png);">
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Log In Here</h2>
			<form action="login.php" method="POST">
				<p>User Name</p>
				<input type="text" name="name" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" name="submit" value="Sign In">
				<a href="#">Forget Password</a>
			</form>
		</div>
	</body>
</html>
<?php
if(isset($_POST["name"]) and isset($_POST["password"])){

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
			$name=test_input($_POST["name"]);
			$password=test_input($_POST["password"]);

			if(!empty($name) and !empty($password)){
				$query="select * FROM users ";
				$query_run=mysqli_query($conn,$query);

				while($row=mysqli_fetch_array($query_run)){
					$old_name=$row['name'];
					$old_password=$row['password'];
				}
				if($old_name==$name and $old_password==$password ){
					$_SESSION['user_id']=$password;
					header('location:index.php');
				}else{
					$message="Wrong Information";
					?>
					 <script>
            var message= " <?php echo $message; ?> ";
            alert(message);
          </script>
					<?php
				}
			}
		}
?>
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
	<title>Affiliation Fees</title>
</head>
<body>
	<div id="main">
		<div class="row">
			<div class="col-lg-5">
				<div class="panel panel-default">
				    <div class="panel-heading"><h4>Other Campus Fees</h4></div>
				    <div class="panel-body">
				    	<form action="affiliation_fee.php" method="POST">
				    		<div class="from-group">
			      	 			<label>Enter Amount</label>
			      	 			<input type="number" name="amount" class="form-control" placeholder="enter Tk Amount">
			      	 		</div>
			      	 		<div class="from-group">
			      	 			<label>Enter Date</label>
			      	 			<input type="date" name="date" class="form-control" placeholder="enter Date">
			      	 		</div>
			      	 		<div class="from-group">
			      	 			<label>Remarks</label>
			      	 			<textarea name="message" class="form-control" placeholder="Enter Description Here"></textarea>
			      	 		</div>
			      	 		
			      	 		<input type="submit" name="submit" class="btn btn-info" style="margin-top: 10px">
				    	</form>
				    </div>
			  	</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['amount']) and isset($_POST['date']) and isset($_POST['message'])){

	$amount=$_POST['amount'];
	$date=$_POST['date'];
	$message=$_POST['message'];

	$query="insert into affiliation_fee(amount,date,message) values('$amount', '$date', '$message')";
	$query_run=mysqli_query($conn,$query);

	if($query_run){
    		 echo $message='information Added Successfully';
             header("Refresh:0; url=income.php");
    		?>
    		<script type="text/javascript">
                var message= '<?php echo $message; ?>';
                alert(message);
            </script>
    		<?php
         }else{
            echo 'Something Went Wrong';
            // header('Location:boardreg.php');
         }
}
?>
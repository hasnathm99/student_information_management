<?php
ob_start();
session_start();
require 'layout.php';
 $id =  $_GET['id'];

if(!isset($_SESSION['user_id'])){
  echo '<h2 style="color:#C9302C">Log in First<h2>';
  header('refresh:1 ; url=login.php');
  die();
}

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');


if(isset($_POST['amount']) and isset($_POST['date']) and isset($_POST['message'])){

	$amount=$_POST['amount'];
	$date=$_POST['date'];
	$message=$_POST['message'];
	
	$query="insert into instructor_payments(instructor_id, amount, date, message) values('$id', '$amount', '$date', '$message') ";
	$query_run=mysqli_query($conn,$query);

	if($query_run){
    		  $message='information Added Successfully';
             header("Refresh:0; url=add_instructor_bill.php");
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
<!DOCTYPE html>
<html>
<head>
	<title>Add Payments</title>
</head>
<body>
	<div id="main">
		<div class="row">
			<div class="col-lg-5">
				<div class="panel panel-default">
				    <div class="panel-heading"><h4>Instructor Salary</h4></div>
				    
				    <div class="panel-body">
				    	<form action="instructor_payments.php?id= <?php echo $id ?>" method="POST">
				    		<div class="from-group">
			      	 			<label>Enter Amount</label>
			      	 			<input type="number" name="amount" class="form-control" placeholder="enter Tk Amount" required>
			      	 		</div>
			      	 		<div class="from-group">
			      	 			<label>Enter Date</label>
			      	 			<input type="date" name="date" class="form-control" placeholder="enter Date" required>
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

?>
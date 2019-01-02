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
	<title>Add monthly Expense</title>
</head>
<body>
	<div id="main">
		<div >
            <h2> <i class="fas fa-retweet"></i> Monthly Expense Form</h2>
            <hr>
        </div>
        <br>
        <form action="add_monthly_expense.php" method="POST">
        	<div class="panel panel-default" style="width: 90%">
        		<div class="panel-heading"><h2>Insert Information</h2></div>
        		<div class="panel-body">
        			<div class="row">
        				<div class="col-lg-4 col-lg-offset-2">
        					<div class="form-group" >
                                <label>1..Home Rent</label>
                                <input type="number" name="home_rent"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>2..Electricity Bill</label>
                                <input type="number" name="electricity_bill"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>3..Internet Bill</label>
                                <input type="number" name="internet_bill"  class="form-control"  >
                            </div>   
                            <div class="form-group" >
                                <label>4..Newspaper Bill</label>
                                <input type="number" name="newspaper_bill"  class="form-control"  >
                            </div>
        				</div>
        				<div class="col-lg-4 ">
        					
                            <div class="form-group" >
                                <label>5..Donation</label>
                                <input type="number" name="donation"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>6..Other Bill</label>
                                <input type="number" name="other_bill"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>7..Date</label>
                                <input type="date" name="date"  class="form-control"  >
                            </div>
        				</div>
        			</div>
        			<div class="row">
		                <div class="col-lg-8 col-lg-offset-2" style="padding: 2%">
		                    <button type="submit" name="submit" class="btn btn-success btn-lg pull-right" > <i class="fas fa-plus"></i> Save</button>
		                </div>
		            </div>
        		</div>
        	</div>
        	
        </form>
	</div>
</body>
</html>
<?php 
if(isset($_POST['home_rent']) and isset($_POST['electricity_bill']) and isset($_POST['internet_bill']) and isset($_POST['donation']) and isset($_POST['other_bill']) and isset($_POST['date']) and isset($_POST['newspaper_bill'])){

	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $home_rent=$_POST['home_rent'];
    $electricity_bill=$_POST['electricity_bill'];
    $internet_bill=$_POST['internet_bill'];
    $newspaper_bill=$_POST['newspaper_bill'];
    $donation=$_POST['donation'];
    $other_bill=$_POST['other_bill'];
    $date=$_POST['date'];
    

    $query="insert into monthly_expense(home_rent,electricity_bill,internet_bill,newspaper_bill,donation,other_bill,date) values('$home_rent', '$electricity_bill', '$internet_bill', '$newspaper_bill', '$donation', '$other_bill', '$date')";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
    	$message="Information Added Successfully";
    	header("Refresh:0; url=add_monthly_expense.php");
    }else{
    	$message="Something Went Wrong";
    }
}

?>
<script type="text/javascript">
	var message='<?php echo $message; ?>';
	alert(message);
</script>
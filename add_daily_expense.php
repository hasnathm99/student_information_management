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
	<title>Add Daily Expense</title>
</head>
<body>
	<div id="main">
		<div >
            <h2> <i class="fas fa-retweet"></i> Daily Expense Form</h2>
            <hr>
        </div>
        <br>
        <form action="add_daily_expense.php" method="POST">
        	<div class="panel panel-default" style="width: 90%">
        		<div class="panel-heading"><h2>Insert Information</h2></div>
        		<div class="panel-body">
        			<div class="row">
        				<div class="col-lg-4 col-lg-offset-2">
        					<div class="form-group" >
                                <label>1..Entertainment </label>
                                <input type="number" name="entertainment"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>2..Advertisement </label>
                                <input type="number" name="advertisement"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>3..Donation/Services</label>
                                <input type="number" name="donation"  class="form-control"  >
                            </div>
        				</div>
                        <div class="col-lg-4">
                               
                            <div class="form-group" >
                                <label>4..Others</label>
                                <input type="number" name="other"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>5..Date</label>
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
if(isset($_POST['entertainment']) and isset($_POST['advertisement']) and isset($_POST['donation']) and isset($_POST['other']) and isset($_POST['date'])){

	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $entertainment=$_POST['entertainment'];
    $advertisement=$_POST['advertisement'];
    $donation=$_POST['donation'];
    $other=$_POST['other'];   
    $date=$_POST['date'];   

    $query="insert into daily_expense(entertainment,advertisement,donation,other,date) values('$entertainment', '$advertisement', '$donation', '$other','$date')";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
    	$message="Information Added Successfully";
    	header("Refresh:0; url=add_daily_expense.php");
    }else{
    	$message="Something Went Wrong";
    }
}

?>
<script type="text/javascript">
	var message='<?php echo $message; ?>';
	alert(message);
</script>
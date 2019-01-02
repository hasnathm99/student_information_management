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
	<title>Admission Info </title>
	
</head>
<body>
	
    <div id="main">
    	<div >
            <h2> <i class="fas fa-retweet"></i> Utshab Computer Training Institute</h2>
            <hr>
        </div>
        <br>
        <form action="process2.php" method="POST">
        	<div class="panel panel-default" style="width: 90%;">
        		<div class="panel-heading"><h2>Admission Information</h2></div>
        		<div class="panel-body">
        			<div class="row">
        				<div class="col-lg-4 col-lg-offset-1">
        					<div class="form-group">
                                <label>Course Name</label>
                                <input type="text" name="course_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Course Duration</label>
                                <input type="number" name="course_duration" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Course Fee</label>
                                <input type="number" name="course_fee" id="course_fee" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Paid</label>
                                <input type="number" name="course_paid" id="paid" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Due</label>
                                <input type="number" name="course_due" id="due" class="form-control" >
                            </div>
                            
        				</div>
        				<div class="col-lg-4 col-lg-offset-1">
        					<div class="form-group">
                                <label>Receipt No</label>
                                <input type="number" name="checkbood_id" class="form-control" >
                            </div>
        					<div class="form-group">
                                <label>Reference name</label>
                                <input type="text" name="reference" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Referance Amount</label>
                                <input type="number" name="reference_amount" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Recipient Name</label>
                                <input type="text" name="recipient_name" class="form-control" >
                            </div>

                            <div class="form-group" >
                                <label>Utshab Campus</label>
                                <select name="campus_name" >
                                    <option value="NULL" >Select </option>
                                    <?php
                                    $query="select * from campus ";
                                    $query_run=mysqli_query($conn,$query);                             
                                    while($row=mysqli_fetch_array($query_run)){
                                        ?>
                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="admission_date" class="form-control" >
                            </div>
                            
        				</div>
        			</div>

        			<div class="row">
		                <div class="col-lg-8 col-lg-offset-4" style="padding: 2%">
		                    <button type="submit" name="submit" class="btn btn-success btn-lg pull-right" style="margin-right: 8%"> <i class="fas fa-plus"></i> Next</button>
		                </div>
		            </div>
        		</div>
        	</div>
        </form>
    </div>
		<script >
				$(function() {
				    $("#course_fee, #paid").on("keydown keyup", sum);
				  function sum() {
				  $("#due").val(Number($("#course_fee").val()) - Number($("#paid").val()));
				  }
				});
		  </script>
</body>
</html>
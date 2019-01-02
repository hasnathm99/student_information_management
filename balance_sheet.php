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


if(isset($_POST['start_date']) and isset($_POST['end_date'])){
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Balance Seet</title>
	<style type="text/css">
		 #main{
            padding-top: 10%;
            padding-left: 5%;
            margin-left: 5%
        }
        table{
        	width: 100%
        }
	</style>
</head>
<body>
	<div id="main">
		<div class="row">
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading">Enter Information</div>
					<div class="panel-body">
						<form class="form-inline" action="balance_sheet.php" method="POST">
						    <div class="form-group">
					            <label>Start Date</label>
					            <input type="date" name="start_date" class="form-control"  required >
			          		</div>
			          		<div class="form-group">
					            <label>End Date</label>
					            <input type="date" name="end_date" class="form-control"  required >
			          		</div>
						    
						    <div class="form-group">
						    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-success form-control"> Show Info</button>
						    </div>
						  </form>
					</div>
				</div>
				<div>
					<?php
					if(isset($_POST['start_date']) and isset($_POST['end_date'])){
						$start_date= date('F d Y', strtotime($_POST['start_date']));
						$end_date= date('F d Y', strtotime($_POST['end_date']));
					
					}
					
					?>

					<h4>Balance Sheet From <?php echo '"'.@$start_date.'"' ?> To <?php echo '"'.@$end_date.'"'; ?></h4>
				</div>
			</div>
		</div>
		<div class="row">


			<div class="col-lg-5 table-responsive">
				
				<table class="data-table table table-responsive">

		    		<thead>
		    			<tr>
		    				<th colspan="3"><h3>Income</h3></th>
		    				<th ><h3>Amount</h3></th>
		    				
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$reg_sum=0;
								$query="select course_paid from payment_information where payment_date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$reg_sum=$reg_sum+$row['course_paid'];
							}
		    				?>
						<tr>
							<td>Student Registration</td>
							<td></td>
							<td></td>
						    <td ><?php echo $reg_sum; ?></td>
						    
					  <?php } ?>
						</tr>

						<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$board_sum=0;
								$query="select amount from student_board_registration where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$board_sum=$board_sum+$row['amount'];
							}
		    				?>
						<tr>
							<td>Board Registration Fees</td>
							<td></td>
							<td></td>
						    <td ><?php echo $board_sum; ?></td>
						<?php } ?>
						</tr>

						<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$exam_sum=0;
								$query="select amount from exam_fees where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$exam_sum=$exam_sum+$row['amount'];
							}
		    				?>
						<tr>
							<td>Examination Fees</td>
							<td></td>
							<td></td>
						    <td ><?php echo $exam_sum; ?></td>
						<?php } ?>
						</tr>

						<tr>
							<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$other_camp_sum=0;
								$query="select amount from other_campus_fee where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$other_camp_sum=$other_camp_sum+$row['amount'];
							}
		    				?>
							<td>Other Campus Fees</td>
							<td></td>
							<td></td>
						    <td ><?php echo $other_camp_sum; ?></td>
						<?php } ?>
						</tr>

						<tr>
							<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$affi_sum=0;
								$query="select amount from affiliation_fee where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$affi_sum=$affi_sum+$row['amount'];
							}
		    				?>
							<td>Affiliation Fees</td>
							<td></td>
							<td></td>
						    <td ><?php echo $affi_sum; ?></td>
						  <?php } ?>  
						</tr>
		    		</tbody>
    			</table>
    			<table class="data-table table table-responsive">
    				<thead>
    					<tr>
    						<th colspan="3"><h3></h3></th>
		    				<th ><h3></h3></th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td><h4>Total</h4></td>
    						<td></td>
    						<td></td>
    						<td><h4><?php echo @$reg_sum+@$board_sum+@$exam_sum+@$other_camp_sum+@$affi_sum; ?></h4></td>
    					</tr>
    				</tbody>

    			</table>
			</div>

			<div class="col-lg-5 table-responsive">
				<table class="data-table table table-responsive">
		    		
		    		<thead>
		    			<tr>
		    				<th colspan="3"><h3>Expense</h3></th>
		    				<th ><h3>Amount</h3></th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$home_rent=0;
								$electricity_bill=0;
								$internet_bill=0;
								$newspaper_bill=0;
								$donation=0;
								$other_bill=0;
								$query="select * from monthly_expense where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$home_rent=$home_rent+$row['home_rent'];
									$electricity_bill=$electricity_bill+$row['electricity_bill'];
									$internet_bill=$internet_bill+$row['internet_bill'];
									$newspaper_bill=$newspaper_bill+$row['newspaper_bill'];
									$donation=$donation+$row['donation'];
									$other_bill=$other_bill+$row['other_bill'];
							}
		    				?>
						<tr>
							<td>Home Rent</td>
							<td></td>
							<td></td>
						    <td ><?php echo $home_rent ?></td>

						</tr>
						<tr>
							<td>Electricity Bill </td>
							<td></td>
							<td></td>
						    <td ><?php echo $electricity_bill; ?></td>
						</tr>
						<tr>
							<td>Internet Bill</td>
							<td></td>
							<td></td>
						    <td ><?php echo $internet_bill; ?></td>
						</tr>
						<tr>
							<td>Newspaper Bill</td>
							<td></td>
							<td></td>
						    <td ><?php echo $newspaper_bill; ?></td>
						</tr>
						<tr>
							<td>Donation</td>
							<td></td>
							<td></td>
						    <td ><?php echo $donation; ?></td>
						</tr>
						<tr>
							<td>Monthly Others</td>
							<td></td>
							<td></td>
						    <td ><?php echo $other_bill ?></td>
						    <?php } ?> 
						</tr>

						<tr>
							<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$entertainment=0;
								$advertisement=0;
								$donation=0;
								$other=0;
								$query="select * from daily_expense where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$entertainment=$entertainment+$row['entertainment'];
									$advertisement=$advertisement+$row['advertisement'];
									$donation=$donation+$row['donation'];
									$other=$other+$row['other'];
							}
		    				?>
							<td>Entertainment </td>
							<td></td>
							<td></td>
						    <td ><?php echo $entertainment; ?></td>
						  
						</tr>
						<tr>
							<td>Advertisement</td>
							<td></td>
							<td></td>
						    <td ><?php echo $advertisement; ?></td>
						</tr>
						<tr>
							<td>Donation </td>
							<td></td>
							<td></td>
						    <td ><?php echo $donation; ?></td>
						</tr>
						<tr>
							<td>Daily Others</td>
							<td></td>
							<td></td>
						    <td ><?php echo $other; ?></td>
						</tr>
					<?php } ?>
						<tr>
							<?php
		    				if(isset($_POST['start_date']) and isset($_POST['end_date'])){
		    					$start_date=$_POST['start_date'];
								$end_date=$_POST['end_date'];
								$ins_sum=0;
								$query="select amount from  instructor_payments where date between '$start_date' and '$end_date' ";
								$query_run=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($query_run)){
									$ins_sum=$ins_sum+$row['amount'];
							}
		    				?>
							<td>Instructor Payment</td>
							<td></td>
							<td></td>
						    <td ><?php echo $ins_sum; ?></td>
						<?php } ?>
						</tr>					
						
		    		</tbody>
    			</table>

    			<table class="data-table table table-responsive">
    				<thead>
    					<tr>
    						<th colspan="3"></th>
		    				<th ></th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<br>
    						<td><h4>Total</h4></td>
    						<td></td>
    						<td></td>
    						<td><h4><?php echo @$entertainment+@$advertisement+@$donation+@$other+@$ins_sum;  ?></h4></td>
    					</tr>
    				</tbody>

    			</table>
    			
			</div>
		</div>
	</div>
</body>
</html>

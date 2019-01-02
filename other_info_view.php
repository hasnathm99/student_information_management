<?php
ob_start();
session_start();
require 'layout.php';
$id=$_GET['id'];

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
	<title>Other Info View</title>
	<style type="text/css">
    	
        #main{
            padding-top: 10%;
            
            margin-left: 10%
        }
         table td {
            transition: all .5s;
        }
        table{margin-bottom: 20px}
        table th{
            font-size: 16px
        }
        table td {
            transition: all .5s;
        }
        
        /* Table */
        table{
            border-collapse: collapse;
            font-size: 16px;
            min-width: 700px;
        }

        table th, 
        table td {
            border: 1px solid #b3e6ff;
            padding: 4px 10px;
        }
        .panel{
        	overflow: auto;
        }
    </style>
</head>
<body>
	<div id="main">
		<div class="row">
			<div class="col-lg-9 col-lg-offset-1">
				<div class="panel panel-default" style="margin-top: 30px">
					<div class="panel-body" style="background-color: #99e699;"><h3 >Personal Information</h3></div>
					<!-- Row 1 start -->
		            <div class="panel-heading table-responsive">
		                <table  class=" table " style="">
		                    <?php
		                        $query="select * from  student_other_information where applicant_id=$id ";
		                        $query_run=mysqli_query($conn,$query);
		                        while ($row = mysqli_fetch_assoc($query_run)){
		                    ?>
		                    <thead>
		                        <tr>
		                            
		                        	<th colspan="3" style="text-align: center;">Activity</th>
		                        	<th colspan="3" style="text-align: center;">Institute's Opinion</th>
		                        
		                            
		                        </tr>
		                        <tr>
		                            <th>1</th>
		                            <th>2</th>
		                            <th>3</th>
		                            <th><?php echo $row['date1']; ?></th>
		                            <th><?php echo $row['date2']; ?></th>
		                            <th><?php echo $row['date3']; ?></th>
		                            

		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <td><?php echo $row['activity1']; ?></td>
		                            <td><?php echo $row['activity2']; ?></td>
		                            <td><?php echo $row['activity3']; ?></td>
		                            <td><?php echo $row['opinion1']; ?></td>
		                            <td><?php echo $row['opinion2']; ?></td>
		                            <td><?php echo $row['opinion3']; ?></td>
		                        </tr>
		                    </tbody>
		                </table>
		                <?php } ?>
		            </div>
				</div>
			</div>
		</div>
		<!-- Panel 2 Start -->
		<div class="row">
			<div class="col-lg-9 col-lg-offset-1">
				<div class="panel panel-default" >
					<div class="panel-body" style="background-color: #99e699;"><h3 >Personal Information</h3></div>
					<!-- Row 1 start -->
		            <div class="panel-heading table-responsive">
		                <table  class=" table table-responsive" style="">
		                    <?php
		                        $query="select * from  student_other_information where applicant_id=$id ";
		                        $query_run=mysqli_query($conn,$query);
		                        while ($row = mysqli_fetch_assoc($query_run)){
		                    ?>
		                    <thead>
		                        <tr>
		                            
		                        	<th colspan="5" style="text-align: center;">Activity</th>
		                        	
		                        
		                            
		                        </tr>
		                        <tr>
		                        	<th style="text-align: center;">Counter</th>
		                            <th>Organization Name</th>
		                            <th>Position/Designation</th>
		                            <th>District</th>
		                            <th>Thana</th>
		                            
		                            

		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                        	<td>1</td>
		                            <td><?php echo $row['org_name1']; ?></td>
		                            <td><?php echo $row['post1']; ?></td>
		                            <td><?php echo $row['district1']; ?></td>
		                            <td><?php echo $row['thana1']; ?></td>
		                            
		                        </tr>
		                        <tr>
		                        	<td>2</td>
		                            <td><?php echo $row['org_name2']; ?></td>
		                            <td><?php echo $row['post2']; ?></td>
		                            <td><?php echo $row['district2']; ?></td>
		                            <td><?php echo $row['thana2']; ?></td>
		                            
		                        </tr>
		                        <tr>
		                        	<th>3</th>
		                            <td><?php echo $row['org_name3']; ?></td>
		                            <td><?php echo $row['post3']; ?></td>
		                            <td><?php echo $row['district3']; ?></td>
		                            <td><?php echo $row['thana3']; ?></td>
		                            
		                        </tr>
		                    </tbody>
		                </table>
		                <?php } ?>
		            </div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
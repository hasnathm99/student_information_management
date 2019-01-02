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
	<title>View Info</title>
	
    <style type="text/css">
    	
        #main{
            padding-top: 8%;
            
            margin-left: 4%;
			margin-right:4%
        }
         table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 16px;
			min-width: 700px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 4px 10px;
		}
		.data-table caption {
			margin: 4px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #f2f2f2;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		table{
			margin-bottom: 10px;
			margin-right:20px
		}
    </style>
</head>
<body>
	
    <!-- Main Section Start -->
    <div id="main">
    	<table class="data-table table table-responsive">
    		<h3 style="text-align: center">Student Information Table</h3>
    		<a href="excel.php" ><button class="pull-right btn btn-info" style="margin-bottom: 5px">Excel</button></a>
    		<br>
    		<thead>
    			<tr>
    				<th style="width:20px">Counter</th>
    				<th>Sdudent ID</th>
    				<th style="width:90px">Student Name</th>
    				<th colspan="3" style="text-align:center">Mobile No</th>
    				<!-- <th>Course Name</th>
    				<th>Admission Date</th> -->
    				<th colspan="3" style="text-align: center;">View Info</th>
    				<th colspan="2" style="text-align: center;">Action</th>
    				
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    			        $counter=0;

    			        $result_per_page=100;
    			        $query="select * from information";
    			        $query_run=mysqli_query($conn, $query);
    			        $number_of_result=mysqli_num_rows($query_run);
    			        $number_of_page=ceil($number_of_result/$result_per_page);
    			        if(!isset($_GET['page'])){ 
    			            $page=1;
    			        }else{
    			            $page=$_GET['page'];
    			        }
    			        echo 'You are on Page <b>'.$page.'</b><br>';

    			        $starting_limit_num=($page-1)*$result_per_page;
    			        $query="select * from information limit " .$starting_limit_num.",".$result_per_page;
    			        $query_run=mysqli_query($conn, $query);

    			        
    			        for($page=1;$page<=$number_of_page;$page++){
    			        // echo 
    			        echo '<a href="view_info.php?page=' .$page.' ">'. $page . '</a> ';
    			         }
    			        
    			        // $query="select * from product";
    			        // $query_run=mysqli_query($connect, $query);
    			        while($row=mysqli_fetch_array($query_run)){
    			            $counter++;

    			        ?>
				<tr>
					<td style="width:20px"><?php echo $counter; ?></td>
					<td><?php echo 12345+$row['id']; ?></td>
                    <td style="width:90px"><?php echo $row['applicant_name']; ?></td>
					<td><?php echo $row['personal_mob_no1']; ?></td>
					<td><?php echo $row['personal_mob_no2']; ?></td>
                    <td><?php echo $row['perent_mob_no1']; ?></td>
					<td ><a class="btn btn-success btn-sm pull-right" href="personal_info_view.php?id=<?php echo $row['id'];?>" >Personal</a></td>
					<td><a class="btn btn-success btn-sm pull-right" href="admission_info_view.php?id=<?php echo $row['id'];?>" >Admission</a></td>
					<td ><a class="btn btn-success btn-sm pull-right" href="other_info_view.php?id=<?php echo $row['id'];?>" >Other Info</a></td>
					<td><a class="btn btn-success btn-sm pull-right" href="edit_student.php?id=<?php echo $row['id'];?>" >Edit</a></td>
					<td><a class="btn btn-success btn-sm pull-right" href="delete_student.php?id=<?php echo $row['id'];?>" onclick=" return confirm('Sure you want to delete???');" >Delete</a></td>
				</tr>
			<?php	
		}?>
    			
    		</tbody>
    	</table>
    </div>
</body>
</html>
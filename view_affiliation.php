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
	<title>View Affiliation Info</title>
	
    <style type="text/css">
    	
        #main{
            padding-top: 8%;
            
            margin-left: 5%
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
		table{margin-bottom: 20px}
    </style>
</head>
<body>
	
    <!-- Main Section Start -->
    <div id="main">
    	<div class="row">
    		<div class="col-lg-8 col-lg-offset-2">
    			<table class="data-table table table-responsive">
    		<h3 style="text-align: center">Affiliation Information Table</h3>
    		<br>
    		<thead>
    			<tr>
    				<th>Counter</th>
    				<th>Amount</th>
    				<th>Date</th>
    				<th>Message</th>

    				
    			</tr>
    		</thead>
    		<tbody>
    			<?php
			$query="select * from affiliation_fee order by date desc";
			$query_run=mysqli_query($conn,$query);
			$counter=0;
			while ($row = mysqli_fetch_assoc($query_run))
				
			{	$counter++;	?>
				<tr>
					<td><?php echo $counter; ?></td>
					<td><?php echo $row['amount']; ?></td>
					<td><?php echo $row['date']; ?></td>
				    <td><?php echo $row['message']; ?></td>

				</tr>
			<?php	
		}?>
    			
    		</tbody>
    	</table>
    		</div>
    	</div>
    </div>
</body>
</html>
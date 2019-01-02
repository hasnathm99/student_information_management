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
	<title>Instructor Info</title>
	
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
		table{margin-bottom: 20px}
		#main{
            padding-top: 10%;
            
            margin-left: 10%
        }
    </style>
</head>
<body>
	
    <!-- Main Section Start -->
    <div id="main">
    	<div class="row">
    		<div class="col-lg-6 col-lg-offset-2">
    			<h3 style="text-align: center">Total Instructor List</h3>
    			<br>
    		</div>
    		<div class="col-lg-2 col-lg-offset-2 ">
    			<div style="padding-bottom: 20px">
					<button class="btn btn-danger btn-md " data-toggle="modal" data-target="#mymodal">Add New Instructor</button>
				</div>
				<div>
					<a href="delete_instructor_list.php"><button class="btn btn-danger btn-md " data-toggle="modal" data-target="#mymodal">Remove Instructor</button></a>
				</div>
    		</div>
    	</div>
    	<div class="row">
    		
    		<div class="col-lg-8 col-lg-offset-2">
    			<table class="data-table table table-responsive" >
    		<thead>
    			<tr>
    				<th>Counter</th>
    				<th>Instructor Name</th>
    				<th colspan="2" style="text-align: center;">Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
			$query="select * from instructor ";
			$query_run=mysqli_query($conn,$query);
			$counter=0;
			while ($row = mysqli_fetch_assoc($query_run))
				
			{	$counter++;	
				$id=$row['id'];
				?>
				<tr>
					<td><?php echo $counter; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><a href="instructor_payments.php?id=<?php echo $id; ?>" ><button class="btn btn-success " >Payment  </button></a></td>
				
				</tr>
			<?php	
		}?>
    			
    		</tbody>
    	</table>
    		</div>
    	</div>
    </div>
    <script type="text/javascript">
    		//Add new Instructor Here
	$(document).ready(function(){

		$(document).on('click','#save',function(){
			var name=$("#name").val().trim();

			if(name==""){
				$('#lblname').html("enter machine name");
			}else{
				$.ajax({
					url:"add_instructor_process.php",
					type:"POST",
					data:{name:name},
					success:function(data){
						alert("1 Instructor added");
						$("#mymodal").modal('hide');
						location.reload();
					}
				});
			}
		});

		$(document).on('click', '.del_data', function(){
			var del_id=$(this).attr('id');
			$.ajax({
				url:"delete_instructor.php",
				type:"post",
				data:{del_id:del_id},
				success:function(data){
					location.reload();
				}
			});
		});

		

});
    </script>
</body>
</html>

<!-- Add machine Modal start -->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="" method="POST">
    		<div class="modal-header">
        	<h3 class="modal-title" id="mymodallabel">Add Machines</h3>
     		</div>
      		<div class="modal-body">
      	 		<div class="from-group">
      	 			<label>Enter Instructor name</label>
      	 			<input type="text" name="name" class="form-control" id="name" placeholder="enter Instructor name">
      	 			<label id="lblname" style="color: red"></label>
      	 		</div>
      	 		
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary" id="save">Save changes</button>
      </div>
    	</form>
    </div>
  </div>
</div>
<!--Add machine Modal end -->
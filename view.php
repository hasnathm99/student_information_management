<?php
session_start();

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
	<title>View Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.navbar{
            background-color: black;
            padding: 1% 0; /*top-bottom 1%, left-rifght 0*/
            font-size: 1.1em /*1em=16px*/
        }
        .navbar-brand {
            min-height: 40px;
            padding: 0 10px 5px; /*o-top,15-right,5-bottom*/

        }
        .navbar-inverse .navbar-nav li a{
            overflow: hidden;
        } 
        .navbar-inverse .navbar-nav li a:hover{
            color:   white;
            font-size: 1.2em
        }
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
    </style>
</head>
<body>
<!--navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><img src="ut.jpg" width="200" height="55"></a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right"> 
                <li><a href="view.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px;padding-left: 15px "></i>View Info</a></li>   
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px;padding-left: 15px "></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar end-->
    <!-- main Section -->
    <div id="main">
    	<table class="data-table table-responsive" >
		<h3 style="text-align: center">Student Information Table</h3>
		<br>
		<thead>
			<tr>
				<th>SL No</th>
				<th>Applicant Name</th>
				<th>Father's Name</th>
				<th>Mother's Name</th>
				<th colspan="4" style="text-align: center;">Present Address</th>
				<th colspan="4" style="text-align: center;">Permanent Address</th>
				<th>Email</th>
				<th>Birth Date</th>
				<th>Nationality</th>
				<th>Religion</th>
				<th>Blood Group</th>
				<th>Class</th>
				<th>Subject</th>
				<th>Institute Name</th>
				<th colspan="2" style="text-align: center;">Personal Number</th>
				<th colspan="2" style="text-align: center;">Parent Number</th>
				<th colspan="5" style="text-align: center;">PSC Info</th>
				<th colspan="5" style="text-align: center;">JSC Info</th>
				<th colspan="5" style="text-align: center;">SSC Info</th>
				<th colspan="5" style="text-align: center;">HSC Info</th>
				<th colspan="3" style="text-align: center;">BSc Info</th>
				<th colspan="3" style="text-align: center;">MSc Info</th>
				<th>Course Name</th>
				<th>Admission Date</th>
				<th>Course Duration</th>
				<th>Admitted Campus</th>
			</tr>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th>Village</th>
				<th >Post</th>
				<th >Thana</th>
				<th >District</th>
				<th>Village</th>
				<th >Post</th>
				<th >Thana</th>
				<th >District</th>
				<th></th>
				<th ></th>
				<th ></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th>Number 1</th>
				<th>Number 2</th>
				<th>Number 1</th>
				<th>Number 2</th>
				<th>Roll</th>
				<th>Registration</th>
				<th>GPA</th>
				<th>Passing Year</th>
				<th>Board</th>
				<th>Roll</th>
				<th>Registration</th>
				<th>GPA</th>
				<th>Passing Year</th>
				<th>Board</th>
				<th>Roll</th>
				<th>Registration</th>
				<th>GPA</th>
				<th>Passing Year</th>
				<th>Board</th>
				<th>Roll</th>
				<th>Registration</th>
				<th>GPA</th>
				<th>Passing Year</th>
				<th>Board</th>
				<th>Institute Name</th>
				<th>GPA</th>
				<th>Passing Year</th>
				<th>Institute Name</th>
				<th>GPA</th>
				<th>Passing Year</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query="select * from information order by admission_date desc";
			$query_run=mysqli_query($conn,$query);
			$counter=0;
			while ($row = mysqli_fetch_assoc($query_run))
			{		$counter++;	
				echo '<tr>
						<td>'.$counter.'  </td>
						<td>'.$row['applicant_name'].'  </td>
						<td>'.$row['father_name'].' </td>
						<td>'.$row['mother_name'].' </td>	
						<td>'.$row['present_village_name'].'</td>	
						<td>'.$row['present_post_name'].'</td>	
						<td>'.$row['present_thana_name'].'</td>	
						<td>'.$row['present_thana_name'].'</td>	
						<td>'.$row['permanent_village_name'].'</td>	
						<td>'.$row['permanent_post_name'].'</td>	
						<td>'.$row['permanent_thana_name'].'</td>	
						<td>'.$row['permanent_district'].'</td>	
						<td>'.$row['email'].'</td>	
						<td>'. date('M d, Y', strtotime($row['birth_date'])) . '</td> 	
						<td>'.$row['nationality'].'</td>	
						<td>'.$row['religion'].'</td>	
						<td>'.$row['blood_group'].'</td>	
						<td>'.$row['class'].'</td>	
						<td>'.$row['subject'].'</td>	
						<td>'.$row['institute_name'].'</td>	
						<td>'.$row['personal_mob_no1'].'</td>	
						<td>'.$row['personal_mob_no2'].'</td>	
						<td>'.$row['perent_mob_no1'].'</td>	
						<td>'.$row['perent_mob_no2'].'</td>	
						<td>'.$row['psc_roll'].'</td>	
						<td>'.$row['psc_registration'].'</td>	
						<td>'.$row['psc_gpa'].'</td>	
						<td>'.$row['psc_passing_year'].'</td>	
						<td>'.$row['psc_board'].'</td>	
						<td>'.$row['jsc_roll'].'</td>	
						<td>'.$row['jsc_registration'].'</td>	
						<td>'.$row['jsc_gpa'].'</td>	
						<td>'.$row['jsc_passing_year'].'</td>	
						<td>'.$row['jsc_board'].'</td>	
						<td>'.$row['ssc_roll'].'</td>	
						<td>'.$row['ssc_registration'].'</td>	
						<td>'.$row['ssc_gpa'].'</td>	
						<td>'.$row['ssc_passing_year'].'</td>	
						<td>'.$row['ssc_board'].'</td>	
						<td>'.$row['hsc_roll'].'</td>	
						<td>'.$row['hsc_registration'].'</td>	
						<td>'.$row['hsc_gpa'].'</td>	
						<td>'.$row['hsc_passing_year'].'</td>	
						<td>'.$row['hsc_board'].'</td>	
						<td>'.$row['bsc_institute_name'].'</td>	
						<td>'.$row['bsc_gpa'].'</td>	
						<td>'.$row['bsc_passing_year'].'</td>	
						<td>'.$row['msc_institute_name'].'</td>	
						<td>'.$row['msc_gpa'].'</td>	
						<td>'.$row['msc_passing_year'].'</td>	
						<td>'.$row['course_name'].'</td>	
						<td>'.$row['admission_date'].'</td>	
						<td>'.$row['course_duration'].' month</td>	
						<td>'.$row['campus']. ' </td>	
					</tr>';

		}?>
		</tbody>

	</table>
    </div>
</body>
</html>
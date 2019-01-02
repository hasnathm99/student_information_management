<?php
ob_start();
session_start();
require 'layout.php';

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');
$edit_id=$_GET['id'];



// if($query_run and $query2_run and $query3_run){
// 	$message="Student Deleted Successfully";
// 	header('Location: view_info.php');
	
// }else{
// 	$message="Something Went Wrong";
// 	header("refresh:0 ; url: view_info.php");
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Information</title>
</head>
<body>
	<div id="main">
		<?php
		$query="select * from information where id=$edit_id ";
		$query_run=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($query_run)){

			$applicant_name=$row['applicant_name'];
	        $father_name=$row['father_name'];
	        $mother_name=$row['mother_name'];
	        $present_village_name=$row['present_village_name'];
	        $present_post_name=$row['present_post_name'];
	        $present_thana_name=$row['present_thana_name'];
	        $present_district=$row['present_district'];
	        $permanent_village_name=$row['permanent_village_name'];
	        $permanent_post_name=$row['permanent_post_name'];
	        $permanent_thana_name=$row['permanent_thana_name'];
	        $permanent_district=$row['permanent_district'];
	        $email=$row['email'];
	        $birth_date=$row['birth_date'];
	        $nationality=$row['nationality'];
	        $religion=$row['religion'];
	        $blood_group=$row['blood_group'];
	        $class=$row['class'];
	        $subject=$row['subject'];
	        $institute_name=$row['institute_name'];
	        $personal_mob_no1=$row['personal_mob_no1'];
	        $personal_mob_no2=$row['personal_mob_no2'];
	        $personal_mob_no3=$row['personal_mob_no3'];
	        $perent_mob_no1=$row['perent_mob_no1'];
	        $perent_mob_no2=$row['perent_mob_no2'];
	        $perent_mob_no3=$row['perent_mob_no3'];
	        $rel1=$row['rel1'];
	        $rel2=$row['rel2'];
	        $rel3=$row['rel3'];
	        $psc_roll=$row['psc_roll'];
	        $psc_registration=$row['psc_registration'];
	        $psc_gpa=$row['psc_gpa'];
	        $psc_passing_year=$row['psc_passing_year'];
	        $psc_board=$row['psc_board'];
	        $jsc_roll=$row['jsc_roll'];
	        $jsc_registration=$row['jsc_registration'];
	        $jsc_gpa=$row['jsc_gpa'];
	        $jsc_passing_year=$row['jsc_passing_year'];
	        $jsc_board=$row['jsc_board'];
	        $ssc_roll=$row['ssc_roll'];
	        $ssc_registration=$row['ssc_registration'];
	        $ssc_gpa=$row['ssc_gpa'];
	        $ssc_passing_year=$row['ssc_passing_year'];
	        $ssc_board=$row['ssc_board'];
	        $hsc_roll=$row['hsc_roll'];
	        $hsc_registration=$row['hsc_registration'];
	        $hsc_gpa=$row['hsc_gpa'];
	        $hsc_passing_year=$row['hsc_passing_year'];
	        $hsc_board=$row['hsc_board'];
	        $bsc_institute_name=$row['bsc_institute_name'];
	        $bsc_gpa=$row['bsc_gpa'];
	        $bsc_passing_year=$row['bsc_passing_year'];
	        $msc_institute_name=$row['msc_institute_name'];
	        $msc_gpa=$row['msc_gpa'];
	        $msc_passing_year=$row['msc_passing_year'];
	        $diploma_institute_name=$row['diploma_institute_name'];
	        $diploma_gpa=$row['diploma_gpa'];
	        $diploma_passing_year=$row['diploma_passing_year'];
		?>
		<form action="edit_student_process.php?edit_id=<?php echo $edit_id; ?> " method="POST">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1">
					<div class="panel panel-default" style="width: 80%">
		  				<div class="panel-heading"><h4>Personal Information</h4></div>
		  				<div class="panel-body">
		  					<div class="form-group">
		  						<label>Applicant Name</label>
		  						<input type="text" name="applicant_name" value="<?php echo $applicant_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Father Name</label>
		  						<input type="text" name="father_name" value="<?php echo $father_name; ?>" class="form-control">
		  					</div>

		  					<div class="form-group">
		  						<label>Mother Name</label>
		  						<input type="text" name="mother_name" value="<?php echo $mother_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Present Village </label>
		  						<input type="text" name="present_village_name" value="<?php echo $present_village_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Present Post </label>
		  						<input type="text" name="present_post_name" value="<?php echo $present_post_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Present Thana </label>
		  						<input type="text" name="present_thana_name" value="<?php echo $present_thana_name; ?>" class="form-control">
		  					</div>
		  					
		  					<div class="form-group">
		  						<label>Present district</label>
		  						<input type="text" name="present_district" value="<?php echo $present_district; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Permanent Village</label>
		  						<input type="text" name="permanent_village_name" value="<?php echo $permanent_village_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Permanent Post</label>
		  						<input type="text" name="permanent_post_name" value="<?php echo $permanent_post_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Permanent Thana</label>
		  						<input type="text" name="permanent_thana_name" value="<?php echo $permanent_thana_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Permanent District</label>
		  						<input type="text" name="permanent_district" value="<?php echo $permanent_district; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Email</label>
		  						<input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Birth Date</label>
		  						<input type="date" name="birth_date" value="<?php echo $birth_date; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Nationality</label>
		  						<input type="text" name="nationality" value="<?php echo $nationality; ?>" class="form-control">
		  					</div>
		  					
		  				</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="panel panel-default" style="width: 80%">
		  				<div class="panel-heading"><h4>Personal Information</h4></div>
		  				<div class="panel-body">
		  					<div class="form-group">
		  						<label>Religion</label>
		  						<input type="text" name="religion" value="<?php echo $religion; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Blood Group</label>
		  						<input type="text" name="blood_group" value="<?php echo $blood_group; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Class</label>
		  						<input type="text" name="class" value="<?php echo $class; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Subject</label>
		  						<input type="text" name="subject" value="<?php echo $subject; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Institute Name</label>
		  						<input type="text" name="institute_name" value="<?php echo $institute_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Personal Phone No 1</label>
		  						<input type="number" name="personal_mob_no1" value="<?php echo $personal_mob_no1; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Personal Phone No 2</label>
		  						<input type="number" name="personal_mob_no2" value="<?php echo $personal_mob_no2; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Personal Phone No 3</label>
		  						<input type="number" name="personal_mob_no3" value="<?php echo $personal_mob_no3; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Parent Phone No 1</label>
		  						<input type="number" name="perent_mob_no1" value="<?php echo $perent_mob_no1; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Parent Phone No 2</label>
		  						<input type="number" name="perent_mob_no2" value="<?php echo $perent_mob_no2; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Parent Phone No 3</label>
		  						<input type="number" name="perent_mob_no3" value="<?php echo $perent_mob_no3; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Relationship No 1</label>
		  						<input type="text" name="rel1" value="<?php echo $rel1; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Relationship No 2</label>
		  						<input type="text" name="rel2" value="<?php echo $rel2; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Relationship No 3</label>
		  						<input type="text" name="rel3" value="<?php echo $rel3; ?>" class="form-control">
		  					</div>
		  					

		  					
		  				</div>
					</div>
				</div>
			</div>

			<!-- row 2 -->
			<br><br>
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1">
					<div class="panel panel-default" style="width: 80%">
		  				<div class="panel-heading"><h4>Educational Information</h4></div>
		  				<div class="panel-body">
		  					<div class="form-group">
		  						<label>PSC Roll</label>
		  						<input type="number" name="psc_roll" value="<?php echo $psc_roll; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>PSC Registration</label>
		  						<input type="number" name="psc_registration" value="<?php echo $psc_registration; ?>" class="form-control">
		  					</div>

		  					<div class="form-group">
		  						<label>PSC GPA</label>
		  						<input type="number" name="psc_gpa" value="<?php echo $psc_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>PSC Passing Year</label>
		  						<input type="number" name="psc_passing_year" value="<?php echo $psc_passing_year; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>PSC District</label>
		  						<input type="text" name="psc_board" value="<?php echo $psc_board; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>JSC Roll</label>
		  						<input type="number" name="jsc_roll" value="<?php echo $jsc_roll; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>JSC Registration</label>
		  						<input type="number" name="jsc_registration" value="<?php echo $jsc_registration; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>JSC GPA</label>
		  						<input type="number" name="jsc_gpa" value="<?php echo $jsc_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>JSC Passing Year</label>
		  						<input type="number" name="jsc_passing_year" value="<?php echo $jsc_passing_year; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>JSC Board</label>
		  						<input type="text" name="jsc_board" value="<?php echo $jsc_board; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>SSC Roll</label>
		  						<input type="number" name="ssc_roll" value="<?php echo $ssc_roll; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>SSC Registration</label>
		  						<input type="number" name="ssc_registration" value="<?php echo $ssc_registration; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>SSC GPA</label>
		  						<input type="number" name="ssc_gpa" value="<?php echo $ssc_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>SSC Passing Year</label>
		  						<input type="number" name="ssc_passing_year" value="<?php echo $ssc_passing_year; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>SSC Board</label>
		  						<input type="text" name="ssc_board" value="<?php echo $ssc_board; ?>" class="form-control">
		  					</div>
		  					
		  				</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="panel panel-default" style="width: 80%">
		  				<div class="panel-heading"><h4>Educational Information</h4></div>
		  				<div class="panel-body">
		  					<div class="form-group">
		  						<label>HSC Roll</label>
		  						<input type="number" name="hsc_roll" value="<?php echo $hsc_roll; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>HSC Registration</label>
		  						<input type="number" name="hsc_registration" value="<?php echo $hsc_registration; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>HSC GPA</label>
		  						<input type="number" name="hsc_gpa" value="<?php echo $hsc_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>HSC Passing Year</label>
		  						<input type="number" name="hsc_passing_year" value="<?php echo $hsc_passing_year; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>HSC Board</label>
		  						<input type="text" name="hsc_board" value="<?php echo $hsc_board; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>BSC Institute Name</label>
		  						<input type="text" name="bsc_institute_name" value="<?php echo $bsc_institute_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Bsc GPA</label>
		  						<input type="number" name="bsc_gpa" value="<?php echo $bsc_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>BSC Passing Year</label>
		  						<input type="number" name="bsc_passing_year" value="<?php echo $bsc_passing_year; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>MSC Institute Name</label>
		  						<input type="text" name="msc_institute_name" value="<?php echo $msc_institute_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>MSC GPA </label>
		  						<input type="number" name="msc_gpa" value="<?php echo $msc_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>MSC Passing Year</label>
		  						<input type="number" name="msc_passing_year" value="<?php echo $msc_passing_year; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Diploma Institute Name</label>
		  						<input type="text" name="diploma_institute_name" value="<?php echo $diploma_institute_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Diploma GPA</label>
		  						<input type="number" name="diploma_gpa" value="<?php echo $diploma_gpa; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Diploma Passing Year</label>
		  						<input type="number" name="diploma_passing_year" value="<?php echo $diploma_passing_year; ?>" class="form-control">
		  					</div>

		  				</div>

					</div>
					
				</div>
			</div>
<?php } ?>			
				<!-- ROw 3 start -->
			<div class="row col-lg-offset-1" >
				<div class="panel panel-default" style="width: 70%">
					<div class="panel-heading"><h4>Admission Information</h4></div>
					<div class="panel-body">
						<div class="col-lg-5 col-lg-offset-1">
							
							<?php 
							$query4="select * from admission_information where applicant_id='$edit_id' ";
							$query4_run=mysqli_query($conn,$query4);
							while($row=mysqli_fetch_array($query4_run)){
								$course_name=$row['course_name'];
								$course_duration=$row['course_duration'];
								$reference=$row['reference'];
								$reference_amount=$row['reference_amount'];
								$campus_name=$row['campus_name'];
								$admission_date=$row['admission_date'];
							
							?>
							<div class="panel-body">
								<div class="form-group">
			  						<label>Course Name</label>
			  						<input type="text" name="course_name" value="<?php echo $course_name; ?>" class="form-control">
			  					</div>
			  					<div class="form-group">
			  						<label>Course Duration</label>
			  						<input type="number" name="course_duration" value="<?php echo $course_duration; ?>" class="form-control">
			  					</div>
			  					<div class="form-group">
			  						<label>Reference</label>
			  						<input type="text" name="reference" value="<?php echo $reference; ?>" class="form-control">
			  					</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="form-group">
		  						<label>Reference Amount</label>
		  						<input type="number" name="reference_amount" value="<?php echo $reference_amount; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Campus Name</label>
		  						<input type="text" name="campus_name" value="<?php echo $campus_name; ?>" class="form-control">
		  					</div>
		  					<div class="form-group">
		  						<label>Date</label>
		  						<input type="date" name="admission_date" value="<?php echo $admission_date; ?>" class="form-control">
		  					</div>
							
						</div>
					<?php } ?>
					</div>
				</div>
					
			</div>

			<!-- ROw 4 start -->
			<div class="row col-lg-offset-1" >
				<div class="panel panel-default" style="width: 70%">
					<div class="panel-heading"><h4>Student Other Information</h4></div>
					<div class="panel-body">
						<div class="col-lg-5 col-lg-offset-1">
							
							<?php 
							$query4="select * from student_other_information where applicant_id='$edit_id' ";
							$query4_run=mysqli_query($conn,$query4);
							while($row=mysqli_fetch_array($query4_run)){
								$activity1=$row['activity1'];
								$activity2=$row['activity2'];
								$activity3=$row['activity3'];
								$opinion1=$row['opinion1'];
								$opinion2=$row['opinion2'];
								$opinion3=$row['opinion3'];
								$date1=$row['date1'];
								$date2=$row['date2'];
								$date3=$row['date3'];
								$org_name1=$row['org_name1'];
								$post1=$row['post1'];
								$district1=$row['district1'];
								$thana1=$row['thana1'];
								$org_name2=$row['org_name2'];
								$post2=$row['post2'];
								$district2=$row['district2'];
								$thana2=$row['thana2'];
								$org_name3=$row['org_name3'];
								$post3=$row['post3'];
								$district3=$row['district3'];
								$thana3=$row['thana3'];
								$org_name4=$row['org_name4'];
								$post4=$row['post4'];
								$district4=$row['district4'];
								$thana4=$row['thana4'];
							
							?>
							<div class="panel-body">
								<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px">
									<div class="form-group">
			  							<label>Activity 1</label>
			  							<input type="text" name="activity1" value="<?php echo $activity1; ?>" class="form-control">
			  						</div>
				  					<div class="form-group">
				  						<label>Activity 2</label>
				  						<input type="text" name="activity2" value="<?php echo $activity2; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>Activity 3</label>
				  						<input type="text" name="activity3" value="<?php echo $activity3; ?>" class="form-control">
				  					</div>
								</div>
			  					<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px;margin-top: 5%">
			  						<div class="form-group">
			  							<label>Institute's Opinion 1</label>
			  							<input type="text" name="opinion1" value="<?php echo $opinion1; ?>" class="form-control">
			  						</div>
				  					<div class="form-group">
				  						<label>Institute's Opinion 2</label>
				  						<input type="text" name="opinion2" value="<?php echo $opinion2; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>Institute's Opinion 3</label>
				  						<input type="text" name="opinion3" value="<?php echo $opinion3; ?>" class="form-control">
				  					</div>
			  					</div>
			  					<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px;margin-top: 5%">
			  						<div class="form-group">
			  							<label>Opinion 1 Date</label>
			  							<input type="date" name="date1" value="<?php echo $date1; ?>" class="form-control">
			  						</div>
				  					<div class="form-group">
				  						<label>Opinion 2 Date</label>
				  						<input type="date" name="date2" value="<?php echo $date2; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>Opinion 3 Date</label>
				  						<input type="date" name="date3" value="<?php echo $date3; ?>" class="form-control">
				  					</div>
			  					</div>
			  					
			  					<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px;margin-top: 5%">
			  						<div class="form-group">
			  						<label>Organization Name (A)</label>
			  						<input type="text" name="org_name1" value="<?php echo $org_name1; ?>" class="form-control">
		  						</div>
			  					<div class="form-group">
			  						<label>Post/Designation</label>
			  						<input type="text" name="post1" value="<?php echo $post1; ?>" class="form-control">
			  					</div>
			  					<div class="form-group">
			  						<label>District</label>
			  						<input type="text" name="district1" value="<?php echo $district1; ?>" class="form-control">
			  					</div>
			  					<div class="form-group">
			  						<label>Thana</label>
			  						<input type="text" name="thana1" value="<?php echo $thana1; ?>" class="form-control">
			  					</div>
			  					</div>
							</div>
						</div>
						<div class="col-lg-5">
							
			  					<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px;margin-top: 5%">
			  						<div class="form-group">
			  							<label>Organization Name (B)</label>
			  							<input type="text" name="org_name2" value="<?php echo $org_name2; ?>" class="form-control">
			  						</div>
				  					<div class="form-group">
				  						<label>Post/Designation</label>
				  						<input type="text" name="post2" value="<?php echo $post2; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>District</label>
				  						<input type="text" name="district2" value="<?php echo $district2; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>Thana</label>
				  						<input type="text" name="thana2" value="<?php echo $thana2; ?>" class="form-control">
				  					</div>
			  					</div>
			  					<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px;margin-top: 5%">
			  						<div class="form-group">
			  							<label>Organization Name (C)</label>
			  							<input type="text" name="org_name3" value="<?php echo $org_name3; ?>" class="form-control">
			  						</div>
				  					<div class="form-group">
				  						<label>Post/Designation</label>
				  						<input type="text" name="post3" value="<?php echo $post3; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>District</label>
				  						<input type="text" name="district3" value="<?php echo $district3; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>Thana</label>
				  						<input type="text" name="thana3" value="<?php echo $thana3; ?>" class="form-control">
				  					</div>
			  					</div>
			  					<div style="border: 1px solid #E8EAED;padding: 5%;border-radius: 4px;margin-top: 5%">
			  						<div class="form-group">
			  							<label>Organization Name (D)</label>
			  							<input type="text" name="org_name4" value="<?php echo $org_name4; ?>" class="form-control">
			  						</div>
				  					<div class="form-group">
				  						<label>Post/Designation</label>
				  						<input type="text" name="post4" value="<?php echo $post4; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>District</label>
				  						<input type="text" name="district4" value="<?php echo $district4; ?>" class="form-control">
				  					</div>
				  					<div class="form-group">
				  						<label>Thana</label>
				  						<input type="text" name="thana4" value="<?php echo $thana4; ?>" class="form-control">
				  					</div>
			  					</div>
			  					
							
						</div>

					<?php } ?>
					</div>

				</div>
					
			</div>
			<div class="form-group">
  						<input type="submit" name="submit" class="btn btn-success" class="form-control">
  					</div>
		</form>

	</div>



</body>
</html>



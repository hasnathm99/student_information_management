<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$edit_id=$_GET['edit_id'];

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');
if(isset($_POST['submit'])){

	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
		$applicant_name=$_POST['applicant_name'];
		$father_name=$_POST['father_name'];
		$mother_name=test_input($_POST['mother_name']);
        $present_village_name=test_input($_POST['present_village_name']);
        $present_post_name=test_input($_POST['present_post_name']);
        $present_thana_name=test_input($_POST['present_thana_name']);
        $present_district=test_input($_POST['present_district']);
        $permanent_village_name=test_input($_POST['permanent_village_name']);
        $permanent_post_name=test_input($_POST['permanent_post_name']);
        $permanent_thana_name=test_input($_POST['permanent_thana_name']);
        $permanent_district=test_input($_POST['permanent_district']);
        $email=test_input($_POST['email']);
        $birth_date=test_input($_POST['birth_date']);
        $nationality=test_input($_POST['nationality']);
        $religion=test_input($_POST['religion']);
        $blood_group=test_input($_POST['blood_group']);
        $class=test_input($_POST['class']);
        $subject=test_input($_POST['subject']);
        $institute_name=test_input($_POST['institute_name']);
        $personal_mob_no1=test_input($_POST['personal_mob_no1']);
        $personal_mob_no2=test_input($_POST['personal_mob_no2']);
        $personal_mob_no3=test_input($_POST['personal_mob_no3']);
        $perent_mob_no1=test_input($_POST['perent_mob_no1']);
        $perent_mob_no2=test_input($_POST['perent_mob_no2']);
        $perent_mob_no3=test_input($_POST['perent_mob_no3']);
        $rel1=test_input($_POST['rel1']);
        $rel2=test_input($_POST['rel2']);
        $rel3=test_input($_POST['rel3']);
        $psc_roll=test_input($_POST['psc_roll']);
        $psc_registration=test_input($_POST['psc_registration']);
        $psc_gpa=test_input($_POST['psc_gpa']);
        $psc_passing_year=test_input($_POST['psc_passing_year']);
        $psc_board=test_input($_POST['psc_board']);
        $jsc_roll=test_input($_POST['jsc_roll']);
        $jsc_registration=test_input($_POST['jsc_registration']);
        $jsc_gpa=test_input($_POST['jsc_gpa']);
        $jsc_passing_year=test_input($_POST['jsc_passing_year']);
        $jsc_board=test_input($_POST['jsc_board']);
        $ssc_roll=test_input($_POST['ssc_roll']);
        $ssc_registration=test_input($_POST['ssc_registration']);
        $ssc_gpa=test_input($_POST['ssc_gpa']);
        $ssc_passing_year=test_input($_POST['ssc_passing_year']);
        $ssc_board=test_input($_POST['ssc_board']);
        $hsc_roll=test_input($_POST['hsc_roll']);
        $hsc_registration=test_input($_POST['hsc_registration']);
        $hsc_gpa=test_input($_POST['hsc_gpa']);
        $hsc_passing_year=test_input($_POST['hsc_passing_year']);
        $hsc_board=test_input($_POST['hsc_board']);
        $bsc_institute_name=test_input($_POST['bsc_institute_name']);
        $bsc_gpa=test_input($_POST['bsc_gpa']);
        $bsc_passing_year=test_input($_POST['bsc_passing_year']);
        $msc_institute_name=test_input($_POST['msc_institute_name']);
        $msc_gpa=test_input($_POST['msc_gpa']);
        $msc_passing_year=test_input($_POST['msc_passing_year']);
        $diploma_institute_name=test_input($_POST['diploma_institute_name']);
        $diploma_gpa=test_input($_POST['diploma_gpa']);
        $diploma_passing_year=test_input($_POST['diploma_passing_year']);

        $course_name=test_input($_POST['course_name']);
        $course_duration=test_input($_POST['course_duration']);
        $reference=test_input($_POST['reference']);
        $reference_amount=test_input($_POST['reference_amount']);
        $campus_name=test_input($_POST['campus_name']);
        $admission_date=test_input($_POST['admission_date']);

        $activity1=test_input($_POST['activity1']);
        $activity2=test_input($_POST['activity2']);
        $activity3=test_input($_POST['activity3']);
        $opinion1=test_input($_POST['opinion1']);
        $opinion2=test_input($_POST['opinion2']);
        $opinion3=test_input($_POST['opinion3']);
        $date1=test_input($_POST['date1']);
        $date2=test_input($_POST['date2']);
        $date3=test_input($_POST['date3']);
        $org_name1=test_input($_POST['org_name1']);
        $post1=test_input($_POST['post1']);
        $district1=test_input($_POST['district1']);
        $thana1=test_input($_POST['thana1']);
        $org_name2=test_input($_POST['org_name2']);
        $post2=test_input($_POST['post2']);
        $district2=test_input($_POST['district2']);
        $thana2=test_input($_POST['thana2']);
        $org_name3=test_input($_POST['org_name3']);
        $post3=test_input($_POST['post3']);
        $district3=test_input($_POST['district3']);
        $thana3=test_input($_POST['thana3']);
        $org_name4=test_input($_POST['org_name4']);
        $post4=test_input($_POST['post4']);
        $district4=test_input($_POST['district4']);
        $thana4=test_input($_POST['thana4']);


	$query="update  information set 
	applicant_name='$applicant_name' ,
	father_name='$father_name' ,
	mother_name='$mother_name' ,
	present_village_name='$present_village_name' ,
	present_post_name='$present_post_name' ,
	present_thana_name='$present_thana_name' ,
	present_district='$present_district' ,
	permanent_village_name='$permanent_village_name' ,
	permanent_post_name='$permanent_post_name' ,
	permanent_thana_name='$permanent_thana_name' ,
	permanent_district='$permanent_district' ,
	email='$email' ,
	birth_date='$birth_date' ,
	nationality='$nationality' ,
	religion='$religion' ,
	blood_group='$blood_group' ,
	class='$class' ,
	subject='$subject' ,
	institute_name='$institute_name' ,
	personal_mob_no1='$personal_mob_no1' ,
	personal_mob_no2='$personal_mob_no2' ,
	personal_mob_no3='$personal_mob_no3' ,
	perent_mob_no1='$perent_mob_no1' ,
	perent_mob_no2='$perent_mob_no2' ,
	perent_mob_no3='$perent_mob_no3' ,
	rel1='$rel1' ,
	rel2='$rel2' ,
	rel3='$rel3' ,
	psc_roll='$psc_roll' ,
	psc_registration='$psc_registration' ,
	psc_gpa='$psc_gpa' ,
	psc_passing_year='$psc_passing_year' ,
	psc_board='$psc_board' ,
	jsc_roll='$jsc_roll' ,
	jsc_registration='$jsc_registration' ,
	jsc_gpa='$jsc_gpa' ,
	jsc_passing_year='$jsc_passing_year' ,
	jsc_board='$jsc_board' ,
	ssc_roll='$ssc_roll' ,
	ssc_registration='$ssc_registration' ,
	ssc_gpa='$ssc_gpa' ,
	ssc_passing_year='$ssc_passing_year' ,
	ssc_board='$ssc_board' ,
	hsc_roll='$hsc_roll' ,
	hsc_registration='$hsc_registration' ,
	hsc_gpa='$hsc_gpa' ,
	hsc_passing_year='$hsc_passing_year' ,
	hsc_board='$hsc_board' ,
	bsc_institute_name='$bsc_institute_name' ,
	bsc_gpa='$bsc_gpa' ,
	bsc_passing_year='$bsc_passing_year' ,
	msc_institute_name='$msc_institute_name' ,
	msc_gpa='$msc_gpa' ,
	msc_passing_year='$msc_passing_year' ,
	diploma_institute_name='$diploma_institute_name' ,
	diploma_gpa='$diploma_gpa' ,
	diploma_passing_year='$diploma_passing_year' 
	 
	where id='$edit_id'";
	$query_run=mysqli_query($conn,$query);

	$query2="update admission_information set 
	course_name='$course_name' ,
	course_duration='$course_duration' ,
	reference='$reference' ,
	reference_amount='$reference_amount' ,
	campus_name='$campus_name' ,
	admission_date='$admission_date' where applicant_id='$edit_id' ";
	$query2_run=mysqli_query($conn,$query2);

	$query3="update student_other_information set 
	activity1='$activity1' ,
	activity2='$activity2' ,
	activity3='$activity3' ,
	opinion1='$opinion1' ,
	opinion2='$opinion2' ,
	opinion3='$opinion3' ,
	date1='$date1' ,
	date2='$date2' ,
	date3='$date3' ,
	org_name1='$org_name1' ,
	post1='$post1' ,
	district1='$district1' ,
	thana1='$thana1' ,
	org_name2='$org_name2' ,
	post2='$post2' ,
	district2='$district2' ,
	thana2='$thana2' ,
	org_name3='$org_name3' ,
	post3='$post3' ,
	district3='$district3' ,
	thana3='$thana3' ,
	org_name4='$org_name4' ,
	post4='$post4' ,
	district4='$district4' ,
	thana4='$thana4' 
	where applicant_id='$edit_id' ";
	$query3_run=mysqli_query($conn,$query3);
	if($query_run and $query2_run and $query3_run){
		
		header('Location: view_info.php');
	}
}
?>
<script type="text/javascript">
	var message="<?php echo $message; ?>";
	alert(message);
</script>
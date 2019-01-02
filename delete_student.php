<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

echo $del_id=$_GET['id'];

// delete from information
$query="DELETE FROM  information WHERE  id='$del_id' ";
$query_run=mysqli_query($conn,$query);

// delete from admission_information
$query2="DELETE FROM  admission_information WHERE applicant_id='$del_id' ";
$query2_run=mysqli_query($conn,$query2);

// delete from student_other_information
$query3="DELETE FROM  student_other_information WHERE applicant_id='$del_id' ";
$query3_run=mysqli_query($conn,$query3);

if($query_run and $query2_run and $query3_run){
	$message="Student Deleted Successfully";
	header('Location: view_info.php');
	
}else{
	$message="Something Went Wrong";
	header("refresh:0 ; url: view_info.php");
}

?>
<script type="text/javascript">
	var message="<?php echo $message; ?>";
	alert(message);
</script>
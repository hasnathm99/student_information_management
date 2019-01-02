<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

$del_id=$_GET['id'];
$query="DELETE FROM  instructor WHERE  id='$del_id' ";
$query_run=mysqli_query($conn,$query);
if($query_run){
	$message="Instructor Deleted Successfully";
	header('Location: delete_instructor_list.php');
	// header("refresh:0 ; url:add_instructor_bill.php?");
}else{
	$message="Instructor Deleted Successfully";
	header("refresh:1 ; url: delete_instructor_list.php");
}

?>
<script type="text/javascript">
	var message="<?php echo $message; ?>";
	alert(message);
</script>
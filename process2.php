<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';


if(isset($_POST['submit'])){

	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');
	$query1="SELECT id FROM information WHERE id = (SELECT MAX(id) FROM information)";
	$query1_run=mysqli_query($conn,$query1);
	while($row = mysqli_fetch_assoc($query1_run)){
		$applicant_id = $row['id'];
	}
    if(isset($_POST['course_name']) and isset($_POST['course_duration']) and  isset($_POST['course_fee']) and isset($_POST['course_paid']) and isset($_POST['course_due']) and isset($_POST['checkbood_id']) and isset($_POST['reference']) and isset($_POST['recipient_name']) and isset($_POST['reference_amount']) and isset($_POST['campus_name']) and isset($_POST['admission_date'])){

    	$course_name= test_input($_POST['course_name']);
    	$course_duration= test_input($_POST['course_duration']);
    	$course_fee= test_input($_POST['course_fee']);
    	$course_paid= test_input($_POST['course_paid']);
    	$course_due= test_input($_POST['course_due']);
    	$checkbood_id= test_input($_POST['checkbood_id']);
    	$reference= test_input($_POST['reference']);
    	$recipient_name= test_input($_POST['recipient_name']);
    	$campus_name= test_input($_POST['campus_name']);
        $admission_date= test_input($_POST['admission_date']);
    	$reference_amount= test_input($_POST['reference_amount']);

    	$query2="insert into admission_information(applicant_id, course_name, course_duration, reference, reference_amount, campus_name, admission_date) values('$applicant_id', '$course_name', '$course_duration', '$reference', '$reference_amount', '$campus_name', '$admission_date')";
    	$query2_run=mysqli_query($conn,$query2);

        $query3="insert into payment_information(applicant_id,course_fee,course_paid,course_due,checkbood_id,recipient_name,payment_date) values('$applicant_id', '$course_fee', '$course_paid', '$course_due', '$checkbood_id', '$recipient_name', '$admission_date')";
        $query3_run=mysqli_query($conn,$query3);

    	if($query2_run and $query3_run){
    		
            header('Location:student_other_information.php'); 
    		?>
    		
    		<?php
         }else{
            
            header('Location:index.php');
         }

    }
}

?>
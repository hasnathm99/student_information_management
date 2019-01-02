<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

$applicant_id=$_GET['applicant_id'];

if(isset($_POST['submit'])){

	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['course_paid']) and isset($_POST['course_due']) and  isset($_POST['checkbood_id']) and isset($_POST['recipient_name']) and isset($_POST['payment_date']) and isset($_POST['course_fee'])){

    	$course_paid= test_input($_POST['course_paid']);
    	$course_due= test_input($_POST['course_due']);
    	$checkbood_id= test_input($_POST['checkbood_id']);
    	$recipient_name= test_input($_POST['recipient_name']);
        $payment_date= test_input($_POST['payment_date']);
    	$course_fee= test_input($_POST['course_fee']);


        $query="insert into payment_information(applicant_id,course_fee,course_paid,course_due,checkbood_id,recipient_name,payment_date) values('$applicant_id', '$course_fee', '$course_paid', '$course_due', '$checkbood_id', '$recipient_name', '$payment_date')";
        $query_run=mysqli_query($conn,$query);

    	if($query_run){
            header("Refresh:0; url=admission_info_view.php?id=$applicant_id");
    		?>
    		
    		<?php
         }else{
            echo 'Something Went Wrong';
            //header('Location:index.php');
         }

    }
}

?>
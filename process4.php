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
    if( isset($_POST['activity1']) and isset($_POST['activity2']) and  isset($_POST['activity3']) and isset($_POST['opinion1']) and isset($_POST['opinion2']) and isset($_POST['opinion3']) and isset($_POST['date1']) and isset($_POST['date2']) and isset($_POST['date3']) and isset($_POST['org_name1']) and isset($_POST['post1']) and isset($_POST['district1']) and isset($_POST['thana1']) and isset($_POST['org_name2']) and isset($_POST['post2']) and isset($_POST['district2']) and isset($_POST['thana2']) and isset($_POST['org_name3']) and isset($_POST['post3']) and isset($_POST['district3']) and isset($_POST['thana3']) and isset($_POST['org_name4']) and isset($_POST['post4']) and isset($_POST['district4']) and isset($_POST['thana4']) ){

    	$activity1= test_input($_POST['activity1']);
    	$activity2= test_input($_POST['activity2']);
    	$activity3= test_input($_POST['activity3']);
    	$opinion1= test_input($_POST['opinion1']);
    	$opinion2= test_input($_POST['opinion2']);
    	$opinion3= test_input($_POST['opinion3']);
    	$date1= test_input($_POST['date1']);
    	$date2= test_input($_POST['date2']);
    	$date3= test_input($_POST['date3']);
        $org_name1= test_input($_POST['org_name1']);
        $post1= test_input($_POST['post1']);
        $district1= test_input($_POST['district1']);
        $thana1= test_input($_POST['thana1']);
        $org_name2= test_input($_POST['org_name2']);
        $post2= test_input($_POST['post2']);
        $district2= test_input($_POST['district2']);
        $thana2= test_input($_POST['thana2']);
        $org_name3= test_input($_POST['org_name3']);
        $post3= test_input($_POST['post3']);
        $district3= test_input($_POST['district3']);
        $thana3= test_input($_POST['thana3']);
        $org_name4= test_input($_POST['org_name4']);
        $post4= test_input($_POST['post4']);
        $district4= test_input($_POST['district4']);
    	$thana4= test_input($_POST['thana4']);

    	$query="insert into student_other_information(applicant_id, activity1, activity2, activity3, opinion1, opinion2, opinion3, date1, date2, date3, org_name1, post1, district1, thana1, org_name2, post2, district2, thana2, org_name3, post3, district3, thana3, org_name4, post4, district4, thana4) values('$applicant_id', '$activity1', '$activity2', '$activity3', '$opinion1', '$opinion2', '$opinion3', '$date1', '$date2', '$date3', '$org_name1', '$post1', '$district1', '$thana1', '$org_name2', '$post2','$district2', '$thana2', '$org_name3', '$post3', '$district3', '$thana3', '$org_name4', '$post4', '$district4', '$thana4')";
    	$query_run=mysqli_query($conn,$query);
    	if($query_run){
    		$message='information Added Successfully';
            header("Refresh:0; url=index.php");
            
    		?>
    		<script type="text/javascript">
                var message= '<?php echo $message; ?>';
                alert(message);
            </script>
    		<?php
         }else{
            $message='Something Went Wrong';
            header('Location:index.php');
         }

    }
}

?>
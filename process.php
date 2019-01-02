<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

if(isset($_POST['submit'])){
    //input personalization

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST['applicant_name']) and 
        isset($_POST['father_name']) and
        isset($_POST['mother_name']) and
        isset($_POST['present_village_name']) and
        isset($_POST['present_post_name']) and
        isset($_POST['present_thana_name']) and
        isset($_POST['present_district']) and
        isset($_POST['permanent_village_name']) and
        isset($_POST['permanent_post_name']) and
        isset($_POST['permanent_thana_name']) and
        isset($_POST['permanent_district']) and
        isset($_POST['email']) and
        isset($_POST['birth_date']) and
        isset($_POST['nationality']) and
        isset($_POST['religion']) and
        isset($_POST['blood_group']) and
        isset($_POST['class']) and
        isset($_POST['subject']) and
        isset($_POST['institute_name']) and
        isset($_POST['personal_mob_no1']) and
        isset($_POST['personal_mob_no2']) and 
        isset($_POST['personal_mob_no3']) and 
        isset($_POST['perent_mob_no1']) and
        isset($_POST['perent_mob_no2']) and 
        isset($_POST['rel1']) and 
        isset($_POST['rel2']) and 
        isset($_POST['rel3']) and 
        isset($_POST['psc_roll']) and 
        isset($_POST['psc_registration']) and 
        isset($_POST['psc_gpa']) and 
        isset($_POST['psc_passing_year']) and 
        isset($_POST['psc_board']) and 
        isset($_POST['jsc_roll']) and 
        isset($_POST['jsc_registration']) and 
        isset($_POST['jsc_gpa']) and 
        isset($_POST['jsc_passing_year']) and 
        isset($_POST['jsc_board']) and 
        isset($_POST['ssc_roll']) and 
        isset($_POST['ssc_registration']) and 
        isset($_POST['ssc_gpa']) and 
        isset($_POST['ssc_passing_year']) and 
        isset($_POST['ssc_board']) and 
        isset($_POST['hsc_roll']) and 
        isset($_POST['hsc_registration']) and 
        isset($_POST['hsc_gpa']) and 
        isset($_POST['hsc_passing_year']) and 
        isset($_POST['hsc_board']) and 
        isset($_POST['bsc_institute_name']) and 
        isset($_POST['bsc_gpa']) and 
        isset($_POST['bsc_passing_year']) and 
        isset($_POST['msc_institute_name']) and 
        isset($_POST['msc_gpa']) and 
        isset($_POST['msc_passing_year'])  and
        isset($_POST['diploma_institute_name'])  and 
        isset($_POST['diploma_gpa'])  and 
        isset($_POST['diploma_passing_year']) 
        // isset($_POST['course_name']) and 
        // isset($_POST['admission_date']) and 
        // isset($_POST['course_duration']) and 
        // isset($_POST['campus']) 
    ){
        $applicant_name= test_input($_POST['applicant_name']) ;
        $father_name=test_input($_POST['father_name']);
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
        //$image=test_input($_POST['image']);
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      
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
        
        $query="insert into 

        information(applicant_name,father_name,mother_name,present_village_name,present_post_name,present_thana_name,present_district,permanent_village_name,permanent_post_name,permanent_thana_name,permanent_district,email,birth_date,image,nationality,religion,blood_group,class,subject,institute_name,personal_mob_no1,personal_mob_no2,personal_mob_no3,perent_mob_no1,perent_mob_no2,perent_mob_no3,rel1,rel2,rel3,psc_roll,psc_registration,psc_gpa,psc_passing_year,psc_board,jsc_roll,jsc_registration,jsc_gpa,jsc_passing_year,jsc_board,ssc_roll,ssc_registration,ssc_gpa,ssc_passing_year,ssc_board,hsc_roll,hsc_registration,hsc_gpa,hsc_passing_year,hsc_board,bsc_institute_name,bsc_gpa,bsc_passing_year,msc_institute_name,msc_gpa,msc_passing_year, diploma_institute_name, diploma_gpa, diploma_passing_year) 

        values('$applicant_name','$father_name','$mother_name','$present_village_name','$present_post_name','$present_thana_name','$present_district','$permanent_village_name','$permanent_post_name','$permanent_thana_name','$permanent_district','$email','$birth_date', '$file', '$nationality','$religion','$blood_group','$class','$subject','$institute_name','$personal_mob_no1', '$personal_mob_no3', '$personal_mob_no2','$perent_mob_no1','$perent_mob_no2', '$perent_mob_no3','$rel1' ,'$rel2','$rel3','$psc_roll','$psc_registration','$psc_gpa','$psc_passing_year','$psc_board','$jsc_roll','$jsc_registration','$jsc_gpa','$jsc_passing_year','$jsc_board','$ssc_roll','$ssc_registration','$ssc_gpa','$ssc_passing_year','$ssc_board','$hsc_roll','$hsc_registration','$hsc_gpa','$hsc_passing_year','$hsc_board','$bsc_institute_name','$bsc_gpa','$bsc_passing_year','$msc_institute_name','$msc_gpa','$msc_passing_year', '$diploma_institute_name', '$diploma_gpa', '$diploma_passing_year')";
        $query_run=mysqli_query($conn,$query);
        if($query_run){ 
             header('Location:admission_info.php'); 
        }else{
            header('Location: index.php');
        }
    }
}
?>

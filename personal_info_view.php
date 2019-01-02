<?php
ob_start();
session_start();
require 'layout.php';
$id=$_GET['id'];

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
	<title>View Personal Info</title>
	
    <style type="text/css">
    	
        #main{
            padding-top: 10%;
            
            margin-left: 8%
        }
         table td {
            transition: all .5s;
        }
        table{margin-bottom: 20px}
        table th{
            font-size: 16px
        }
        table td {
            transition: all .5s;
        }
        
        /* Table */
        table{
            border-collapse: collapse;
            font-size: 16px;
            min-width: 700px;
        }

        table th, 
        table td {
            border: 1px solid #b3e6ff;
            padding: 4px 10px;
        }
    </style>
</head>
<body>

    <!-- Main Section Start -->
    <div id="main">
         <?php
            $query="select * from information where id=$id ";
            $query_run=mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($query_run)){
                ?>
        <!--  panel one -->
        <div class="panel panel-default" style="width: 90%;margin-top: 30px">
            <div class="panel-body " style="background-color: #99e699;"><h3 >Personal Information of <?php echo $row['applicant_name']; ?> <span class="pull-right " "><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="150" width="150" class="img-thumnail" />' ?></span></h3>

                </div>
            <!-- Row 1 -->
            <div class="panel-heading table-responsive">
                <table  class=" table table-responsive" style="">
                   
                    <thead>
                        <tr>
                            <th>Applicant Name</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th colspan="4" style="text-align: center;">Present Address</th>
                            <th colspan="4" style="text-align: center;">Present Address</th>
                            
                        </tr>
                        <tr>
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

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['applicant_name']; ?></td>
                            <td><?php echo $row['father_name']; ?></td>
                            <td><?php echo $row['mother_name']; ?></td>
                            <td><?php echo $row['present_village_name']; ?></td>
                            <td><?php echo $row['present_post_name']; ?></td>
                            <td><?php echo $row['present_thana_name']; ?></td>
                            <td><?php echo $row['present_district']; ?></td>
                            <td><?php echo $row['permanent_village_name']; ?></td>
                            <td><?php echo $row['permanent_post_name']; ?></td>
                            <td><?php echo $row['permanent_thana_name']; ?></td>
                            <td><?php echo $row['permanent_district']; ?></td>
                            
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
            <hr>
          <!--   Row 2 -->
            <div class="panel-heading table-responsive">
                <table  class=" table table-responsive">
                    <?php
                        $query="select * from information where id=$id ";
                        $query_run=mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Birth Date</th>
                            <th>Nationality</th>
                            <th>Religion</th>
                            <th>Blood Group</th>
                            <th>Educational Class</th>
                            <th>Subject</th>
                            <th>Institute Name</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo date('M d, Y', strtotime($row['birth_date'])); ?></td>
                            <td><?php echo $row['nationality']; ?></td>
                            <td><?php echo $row['religion']; ?></td>
                            <td><?php echo $row['blood_group']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['institute_name']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
            <hr>
            <!--   Row 3 -->
            <div class="panel-heading table-responsive">
                <table  class=" table table-responsive">
                    <?php
                        $query="select * from information where id=$id ";
                        $query_run=mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <thead>
                        <tr>
                            <th colspan="3" style="text-align: center;">Personal Number</th>
                            <th colspan="3" style="text-align: center;">Guardian Number</th>
                        </tr>
                        <tr>
                            <th>Number 1</th>
                            <th>Number 2</th>
                            <th>Number 3</th>
                            <td><?php echo $row['rel1']; ?></td>
                            <td><?php echo $row['rel2']; ?></td>
                            <td><?php echo $row['rel3']; ?></td>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['personal_mob_no1']; ?></td>
                            <td><?php echo $row['personal_mob_no2']; ?></td>
                            <td><?php echo $row['personal_mob_no3']; ?></td>
                            <td><?php echo $row['perent_mob_no1']; ?></td>
                            <td><?php echo $row['perent_mob_no2']; ?></td>
                            <td><?php echo $row['perent_mob_no3']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    <!-- panel 1 end -->

    <!--  panel 2 start -->
        <div class="panel panel-default" style="width: 90%;">
            <div class="panel-body" style="background-color: #99e699;"><h3>Educational Information</h3></div>
            <!-- Row 1 -->
            <div class="panel-heading table-responsive">
                <table  class=" table table-responsive" style="">
                    <?php
                        $query="select * from information where id=$id ";
                        $query_run=mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <thead>
                        <tr>
                            <th>Exam</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>GPA</th>
                            <th>Institute Name</th>
                            <th>Passing</th>
                            <th>Board</th>
                        </tr>
                       

                    </thead>
                    <tbody>
                        <tr>
                            <td><b>PSC</b></td>
                            <td><?php echo $row['psc_roll']; ?></td>
                            <td><?php echo $row['psc_registration']; ?></td>
                            <td><?php echo $row['psc_gpa']; ?></td>
                            <td></td>
                            <td><?php echo $row['psc_passing_year']; ?></td>
                            <td><?php echo $row['psc_board']; ?></td>   
                        </tr>
                        <tr>
                            <td><b>JSC</b></td>
                            <td><?php echo $row['jsc_roll']; ?></td>
                            <td><?php echo $row['jsc_registration']; ?></td>
                            <td><?php echo $row['jsc_gpa']; ?></td>
                            <td></td>
                            <td><?php echo $row['jsc_passing_year']; ?></td>
                            <td><?php echo $row['jsc_board']; ?></td>
                        </tr>
                        <tr>
                            <td><b>SSC</b></td>
                            <td><?php echo $row['ssc_roll']; ?></td>
                            <td><?php echo $row['ssc_registration']; ?></td>
                            <td><?php echo $row['ssc_gpa']; ?></td>
                            <td></td>
                            <td><?php echo $row['ssc_passing_year']; ?></td>
                            <td><?php echo $row['ssc_board']; ?></td>
                        </tr>
                        <tr>
                            <td><b>HSC</b></td>
                            <td><?php echo $row['hsc_roll']; ?></td>
                            <td><?php echo $row['hsc_registration']; ?></td>
                            <td><?php echo $row['hsc_gpa']; ?></td>
                            <td></td>
                            <td><?php echo $row['hsc_passing_year']; ?></td>
                            <td><?php echo $row['hsc_board']; ?></td>
                        </tr>
                        <tr>
                            <td><b>BSc</b></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $row['bsc_gpa']; ?></td>
                            <td><?php echo $row['bsc_institute_name']; ?></td>
                            <td><?php echo $row['bsc_passing_year']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>MSc</b></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $row['bsc_gpa']; ?></td>
                            <td><?php echo $row['bsc_institute_name']; ?></td>
                            <td><?php echo $row['msc_passing_year']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Diploma</b></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $row['diploma_institute_name']; ?></td>
                            <td><?php echo $row['diploma_gpa']; ?></td>
                            <td><?php echo $row['diploma_passing_year']; ?></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    <!-- panel 2 end -->

    </div>
</body>
</html>
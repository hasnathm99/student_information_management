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
	<title>Admission View Info</title>
    <style type="text/css">
    	
        #main{
            padding-top: 10%;
            
            margin-left: 10%
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
            padding: 4px 10px;
        }
    </style>
</head>
<body>

    <!-- Main Section Start -->
    <div id="main">
       <div class="row">
           <div class="col-lg-11 col-sm-10">

               <!--  panel start -->
                <div class="panel panel-default" style="background-color: #99e699;margin-top: 30px">
                    <div class="panel-body" style="background-color: #99e699;font-size: 20px">Admission Information</div>
                    
                    <div class="panel-body table-responsive" >
                        <table class=" table table-responsive" >
                            <thead>
                                <tr>
                                    <th>Applicant ID</th>
                                    <th>Course Name</th>
                                    <th>Course Duration</th>
                                    <th>Referance</th> 
                                    <th>Referance Amount</th>                         
                                    <th>Admitted Campus</th>
                                    <th>Admitted Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $query="select * from admission_information where applicant_id=$id ";
                                        $query_run=mysqli_query($conn,$query);
                                        while ($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                <tr>
                                    <td><?php echo 12345+$row['applicant_id'] ?></td>
                                    <td><?php echo $row['course_name'] ?></td>
                                    <td><?php echo $row['course_duration'] ?> Month</td>
                                    <td><?php echo $row['reference'] ?></td>
                                    <td><?php echo $row['reference_amount'] ?> BDT</td>
                                    <td><?php echo $row['campus_name'] ?></td>
                                    <td><?php echo $row['admission_date'] ?></td>
                                    
                                </tr>
                                  <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        <!-- panel End -->
           </div>
       </div>

        <div class="row">
            <div class="col-lg-8 col-sm-10">
                <!--  panel start -->
                <div class="panel panel-default" >
                    <div class="panel-body" style="background-color: #e1edff;font-size: 20px">Payment Information</div>
                    <div class="panel-heading table-responsive" >
                        <table class=" table table-responsive" >
                            <thead>
                                <tr>
                                    <th>Course Fee</th>
                                    <th>Amount Paid</th>
                                    <th>Amount Due</th>
                                    <th>Checkbook Id</th>
                                    <th>Recipient Name</th>
                                    <th>Paid Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $query="select * from payment_information where applicant_id=$id ";
                                        $query_run=mysqli_query($conn,$query);
                                        while ($row = mysqli_fetch_assoc($query_run)){
                                            $course_fee=$row['course_fee'];
                                            $course_due=$row['course_due'];
                                    ?>
                                <tr>
                                    <td><?php echo $row['course_fee'] ?></td>
                                    <td><?php echo $row['course_paid'] ?></td>
                                    <td><?php echo $row['course_due'] ?></td>
                                    <td><?php echo $row['checkbood_id'] ?></td>
                                    <td><?php echo $row['recipient_name'] ?></td>
                                    <td><?php echo $row['payment_date'] ?></td>
                                    
                                </tr>
                                  <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- panel End -->
            </div>

            <div class="col-lg-3 col-sm-10">
                <!-- form start -->
                <form action="process3.php?applicant_id= <?php echo $id ?>" method="POST">
                    <div class="panel panel-default">
                        <div class="panel-heading " style="font-size: 20px">Payment Form</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="hidden" value="<?php echo $course_due; ?>" id="previoue_due" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Now Paying</label>
                                <input type="number" name="course_paid" id="course_paid" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Due</label>
                                <input type="number" name="course_due" id="course_due" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Checkbook Id</label>
                                <input type="number" name="checkbood_id" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Recipient Name</label>
                                <input type="text" name="recipient_name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="payment_date" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-group btn btn-success">
                            </div>
                            <input type="hidden" name="course_fee" value="<?php echo $course_fee; ?>">
                        </div>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>

       <script >
                $(function() {
                    $("#previoue_due, #course_paid").on("keydown keyup", sum);
                  function sum() {
                  $("#course_due").val(Number($("#previoue_due").val()) - Number($("#course_paid").val()));
                  }
                });
          </script>
    </div>
</body>
</html>
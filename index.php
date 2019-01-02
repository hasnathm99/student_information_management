<?php

ob_start();
session_start();
require 'layout.php';

if(!isset($_SESSION['user_id'])){
  echo '<h2 style="color:#C9302C">Log in First<h2>';
  header('Location: login.php');
  
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
    <title>Intro Form</title>

</head>
<body>
    
<!--Main Content Start-->
    <div id="main">
        <div >
            <h2> <i class="fas fa-retweet"></i> Utshab Computer Training Institute</h2>
            <hr>
        </div>
        <br>
        <form action="process.php" method="POST" enctype="multipart/form-data">
            <div class="panel panel-default" style="width: 90%;">
                <div class="panel-heading"><h2>Personal Information</h2></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Applicant Name</label>
                                <input type="text" name="applicant_name" class="form-control"  required>
                            </div>
                            <div class="form-group ">
                                <label>Applicant's Father Name</label>
                                <input type="text" name="father_name" class="form-control" required>
                            </div>
                            <div class="form-group ">
                                <label>Applicant's Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Present Address</h4>
                                    <div class="form-group" >
                                        <label>Road No/Village</label>
                                        <input type="text" name="present_village_name"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label>Post</label>
                                        <input type="text" name="present_post_name"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label>Thana</label>
                                        <input type="text" name="present_thana_name"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label>District</label>
                                        <select name="present_district" class="pull-right">
                                            <option value="NULL" >Select </option>
                                            <?php
                                            $query="select * from district ";
                                            $query_run=mysqli_query($conn,$query);
                                            $row_count=mysqli_num_rows($query_run);
                                            while($row=mysqli_fetch_array($query_run)){
                                                ?>
                                                <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4>Permanent Address</h4>
                                    <div class="form-group" >
                                        <label>Road No/Village</label>
                                        <input type="text" name="permanent_village_name"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label>Post</label>
                                        <input type="text" name="permanent_post_name"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label>Thana</label>
                                        <input type="text" name="permanent_thana_name"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label>District</label>
                                        <select name="permanent_district" class="pull-right">
                                            <option value="NULL" >Select </option>
                                            <?php
                                            $query="select * from district ";
                                            $query_run=mysqli_query($conn,$query);
                                            $row_count=mysqli_num_rows($query_run);
                                            while($row=mysqli_fetch_array($query_run)){
                                                ?>
                                                <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>                 
                            
                            <div class="form-group" >
                                <label>Email</label>
                                <input type="email" name="email"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>Birth</label>
                                <input type="date" name="birth_date"  class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-lg-5 col-lg-offset-1">
                            <div class="form-group" >
                                <label>Image</label>
                                <input type="file" name="image" id="image"> 
                            </div> 
                            <div class="form-group" >
                                <label>Nationality</label>
                                <select name="nationality" class="pull-right >
                                    <option value="NULL" >Select </option>
                                    <?php
                                    $query="select * from nationality ";
                                    $query_run=mysqli_query($conn,$query);
                                    $row_count=mysqli_num_rows($query_run);
                                    while($row=mysqli_fetch_array($query_run)){
                                        ?>
                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label>Religion</label>
                                <select name="religion" class="pull-right">
                                    <option value="NULL" >Select </option>
                                    <?php
                                    $query="select * from religion ";
                                    $query_run=mysqli_query($conn,$query);
                                    $row_count=mysqli_num_rows($query_run);
                                    while($row=mysqli_fetch_array($query_run)){
                                        ?>
                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label>Blood Group</label>
                                <select name="blood_group" class="pull-right">
                                    <option value="NULL" >Select </option>
                                    <?php
                                    $query="select * from blood_group ";
                                    $query_run=mysqli_query($conn,$query);
                                    $row_count=mysqli_num_rows($query_run);
                                    while($row=mysqli_fetch_array($query_run)){
                                        ?>
                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label>Current Educational Class</label>
                                <select name="class" >
                                    <option value="NULL" >Select </option>
                                    <?php
                                    $query="select * from class ";
                                    $query_run=mysqli_query($conn,$query);
                                    $row_count=mysqli_num_rows($query_run);
                                    while($row=mysqli_fetch_array($query_run)){
                                        ?>
                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label>Current Educational Subject</label>
                                <input type="text" name="subject"  class="form-control"  >
                            </div>
                            <div class="form-group" >
                                <label>Current Education Institute Name</label>
                                <input type="text" name="institute_name"  class="form-control"  >
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <label>Personal Mobile Number</label>
                                    <div class="form-group" >
                                        <label></label>
                                        <input type="number" name="personal_mob_no1"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label></label>
                                        <input type="number" name="personal_mob_no2"  class="form-control"  >
                                    </div>
                                    <div class="form-group" >
                                        <label></label>
                                        <input type="number" name="personal_mob_no3"  class="form-control"  >
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <label>Guardian Number</label>
                                            <div class="form-group" >
                                                <label></label>
                                                <input type="number" name="perent_mob_no1"  class="form-control"  >
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <input type="number" name="perent_mob_no2"  class="form-control"  >
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <input type="number" name="perent_mob_no3"  class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Guardian  Relationship</label>
                                            <div class="form-group" >
                                                <label></label>
                                                <select name="rel1" class="form-control">
                                                    <option value="NULL" >Select </option>
                                                    <?php
                                                    $query="select * from relationship ";
                                                    $query_run=mysqli_query($conn,$query);
                                                    $row_count=mysqli_num_rows($query_run);
                                                    while($row=mysqli_fetch_array($query_run)){
                                                        ?>
                                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <select name="rel2" class="form-control">
                                                    <option value="NULL" >Select </option>
                                                    <?php
                                                    $query="select * from relationship ";
                                                    $query_run=mysqli_query($conn,$query);
                                                    $row_count=mysqli_num_rows($query_run);
                                                    while($row=mysqli_fetch_array($query_run)){
                                                        ?>
                                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <select name="rel3" class="form-control">
                                                    <option value="NULL" >Select </option>
                                                    <?php
                                                    $query="select * from relationship ";
                                                    $query_run=mysqli_query($conn,$query);
                                                    $row_count=mysqli_num_rows($query_run);
                                                    while($row=mysqli_fetch_array($query_run)){
                                                        ?>
                                                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                                        
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="width: 90%;">
                <div class="panel-heading"><h2>Result Information</h2></div>
                <div class="panel-body">
                    <div class="row">
                        <table >
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-group" >
                                            <label></label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group" >
                                            <label>Roll</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group" >
                                            <label>Registration </label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group" >
                                            <label>GPA</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group" >
                                            <label>Passing Year</label>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group" >
                                            <label>Board</label>
                                        </div>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >
                                        <div class="form-group" >
                                            <label>PSC:</label>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="psc_roll"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="psc_registration"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="psc_gpa"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="psc_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="psc_board" >
                                                <option value="NULL" > Select </option>
                                                <?php
                                                $query="select * from board ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td >
                                        <div class="form-group" >
                                            <label>JSC:</label>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="jsc_roll"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="jsc_registration"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="jsc_gpa"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="jsc_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="jsc_board" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from board ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td >
                                        <div class="form-group" >
                                            <label>SSC:</label>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="ssc_roll"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="ssc_registration"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="ssc_gpa"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="ssc_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="ssc_board" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from board ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="form-group" >
                                            <label>HSC:</label>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="hsc_roll"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="hsc_registration"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="hsc_gpa"  class="form-control"  >
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="hsc_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="hsc_board" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from board ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="form-group" >
                                            <label>BSc:</label>
                                        </div>
                                    </td>
                                    <td >
                                        
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="bsc_institute_name"  class="form-control"  placeholder="Institute Name">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="bsc_gpa"  class="form-control"  placeholder="GPA">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="bsc_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td >
                                        <!-- <div class="form-group" >
                                            <select name="bsc_board" >
                                                <option value="NULL" > Select </option>
                                                <?php
                                                $query="select * from board ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="form-group" >
                                            <label>Msc:</label>
                                        </div>
                                    </td>
                                    <td >
                                        <!-- <div class="form-group" >
                                            <input type="text" name="msc_roll"  class="form-control"  required>
                                        </div> -->
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="msc_institute_name"  class="form-control"  placeholder="Institute Name">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="msc_gpa"  class="form-control"  placeholder="GPA">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="msc_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td >
                                        <!-- <div class="form-group" >
                                            <select name="msc_board" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from board ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div> -->
                                    </td>
                                </tr>

                                <tr>
                                    <td >
                                        <div class="form-group" >
                                            <label>Diploma:</label>
                                        </div>
                                    </td>
                                    <td >
                                        <!-- <div class="form-group" >
                                            <input type="text" name="msc_roll"  class="form-control"  required>
                                        </div> -->
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="diploma_institute_name"  class="form-control"  placeholder="Institute Name">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <input type="text" name="diploma_gpa"  class="form-control"  placeholder="GPA">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group" >
                                            <select name="diploma_passing_year" >
                                                <option value="NULL" >Select </option>
                                                <?php
                                                $query="select * from passing_year ";
                                                $query_run=mysqli_query($conn,$query);
                                                $row_count=mysqli_num_rows($query_run);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    ?>
                                                    <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-4" style="padding: 2%">
                    <button type="submit" name="submit" id="insert" value="Insert" class="btn btn-success btn-lg" > <i class="fas fa-plus"></i>Next</button>
                </div>
            </div>
        </form>
        
    </div>
</body>
</html>
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Image not inserted");  
                  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
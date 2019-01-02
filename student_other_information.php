<?php

ob_start();
session_start();
require 'layout.php';

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
	<title>Other Information</title>
</head>
<body>
	<div id="main">
		<div >
            <h2> <i class="fas fa-retweet"></i> Utshab Computer Training Institute</h2>
            <hr>
        </div>
        <br>
        <form action="process4.php" method="POST">
        	<div class="panel panel-default" style="width: 90%;">
        		<div class="panel-heading"><h4>Other Optional Information</h4></div>
        		<div class="panel-body">
        			<div class="row">
        				<div class="col-lg-4 col-lg-offset-1">
        					<div class="form-group" >
                                <label>Extra Activity</label>
                            </div>
                            <div class="form-group" >
                                <input type="text" name="activity1"  class="form-control"  placeholder="Enter Activity">
                            </div>
                            <div class="form-group" >
                                <input type="text" name="activity2"  class="form-control"  placeholder="Enter Activity">
                            </div>
                            <div class="form-group" >
                            	<input type="text" name="activity3"  class="form-control"  placeholder="Enter Activity">
                            </div> 
        				</div>

        				<div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-2">
                                    <div class="form-group" >
		                                <label>Institute's Opinion</label>
		                            </div>
                                    <div class="form-group" >
                                        <input type="text" name="opinion1"  class="form-control"  placeholder="Enter Opinion">
                                    </div>
                                    <div class="form-group" >
                                        
                                        <input type="text" name="opinion2"  class="form-control"  placeholder="Enter Opinion">
                                    </div>
                                    <div class="form-group" >
                                        
                                        <input type="text" name="opinion3"  class="form-control"  placeholder="Enter Opinion">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" >
		                                <label>Date</label>
		                            </div>
                                    <div class="form-group" >
                                        <input type="date" name="date1"  class="form-control">
                                        
                                    </div>
                                    <div class="form-group" >
                                        <input type="date" name="date2"  class="form-control"  >
                                        
                                    </div>
                                    <div class="form-group" >
                                        <input type="date" name="date3"  class="form-control"  >
                                        
                                    </div>
                                </div>
                            </div>

                        </div> 
        			</div>
        			
        		</div>

        	</div>
        	<div class="panel panel-default" style="width: 90%;">
        		<div class="panel-heading"> <h4>Job / Organization Information</h4></div>
        		<div class="panel-body">
        			<!-- Row 1 Start -->
        			<div class="row">
        				<div class="col-lg-4 col-lg-offset-1">
        					<div class="form-group" >
                            	<label>Organization Name (1)</label>
                                <input type="text" name="org_name1"  class="form-control"  placeholder="Organization Name">
                            </div>
                            <div class="form-group" >
                            	<label>Post</label>
                                <input type="text" name="post1"  class="form-control"  placeholder="Post/Position">
                            </div>
                            <div class="form-group" >
                            	<label>District </label>
                                <select name="district1" class="pull-right">
                                    <option value="NULL" >----------Select---------</option>
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
                            <div class="form-group" >
                            	<label>Thana</label>
                            	<input type="text" name="thana1"  class="form-control"  placeholder="Enter Thana">
                            </div>
        				</div>
        				<div class="col-lg-4 col-lg-offset-2">
        					<div class="form-group" >
                            	<label>Organization Name (2)</label>
                                <input type="text" name="org_name2"  class="form-control"  placeholder="Organization Name">
                            </div>
                            <div class="form-group" >
                            	<label>Post</label>
                                <input type="text" name="post2"  class="form-control"  placeholder="Post/Position">
                            </div>
                            <div class="form-group" >
                            	<label>District</label>
                                <select name="district2" class="pull-right">
                                    <option value="NULL" >----------Select---------</option>
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
                            <div class="form-group" >
                            	<label>Thana</label>
                            	<input type="text" name="thana2"  class="form-control"  placeholder="Enter Thana">
                            </div>
        				</div>
        			</div>
        			<!-- Row 1 End -->
        			<br>
        			<hr>
        			<br>
        			<!-- Row 2 Start -->
        			<div class="row">
        				<div class="col-lg-4 col-lg-offset-1">
        					<div class="form-group" >
                            	<label>Organization Name (3)</label>
                                <input type="text" name="org_name3"  class="form-control"  placeholder="Organization Name">
                            </div>
                            <div class="form-group" >
                            	<label>Post</label>
                                <input type="text" name="post3"  class="form-control"  placeholder="Post/Position">
                            </div>
                            <div class="form-group" >
                            	<label>District </label>
                                <select name="district3" class="pull-right">
                                    <option value="NULL" >----------Select---------</option>
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
                            <div class="form-group" >
                            	<label>Thana</label>
                            	<input type="text" name="thana3"  class="form-control"  placeholder="Enter Thana">
                            </div>
        				</div>
        				<div class="col-lg-4 col-lg-offset-2">
        					<div class="form-group" >
                            	<label>Organization Name (4)</label>
                                <input type="text" name="org_name4"  class="form-control"  placeholder="Organization Name">
                            </div>
                            <div class="form-group" >
                            	<label>Post</label>
                                <input type="text" name="post4"  class="form-control"  placeholder="Post/Position">
                            </div>
                            <div class="form-group" >
                            	<label>District</label>
                                <select name="district4" class="pull-right">
                                    <option value="NULL" >----------Select---------</option>
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
                            <div class="form-group" >
                            	<label>Thana</label>
                            	<input type="text" name="thana4"  class="form-control"  placeholder="Enter Thana">
                            </div>
        				</div>
        			</div>
        			<!-- Row 2 End -->
        			<div class="row">
		                <div class="col-lg-8 col-lg-offset-4" style="padding: 2%">
		                    <button type="submit" name="submit" class="btn btn-success btn-lg pull-right" style="margin-right: 8%"> <i class="fas fa-plus"></i> Save</button>
		                </div>
		            </div>
        		</div>

        	</div>
        </form>
	</div>
</body>
</html>
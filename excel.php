<?php
require 'layout.php';
$connect = mysqli_connect("localhost", "root", "", "utshab_training_center");
$sql = "SELECT * FROM information";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>    
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
      <tr>  
        <th>ID</th>
        <th>Name</th>  
        <th colspan="3">Personal Number</th>  
        <th colspan="3">Guardian Number</th>
        <th>Email</th>  
      </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  $id=12345+$row['id'];
        echo '  
       <tr>  
         <td>'.$id.'</td>  
         <td>'.$row["applicant_name"].'</td>  
         <td>'.$row["personal_mob_no1"].'</td>  
         <td>'.$row["personal_mob_no2"].'</td>  
         <td>'.$row["personal_mob_no3"].'</td>
         <td>'.$row["perent_mob_no1"].'</td>
         <td>'.$row["perent_mob_no2"].'</td>
         <td>'.$row["perent_mob_no3"].'</td>
         <td>'.$row["email"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="excel_process.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>
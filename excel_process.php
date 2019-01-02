<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "utshab_training_center");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM information ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
      <tr>  
        <th>ID</th>  
        <th>Name</th>  
        <th colspan="3">Personal Number</th>  
        <th colspan="3">Guardian Number</th>
        <th>Mail</th>
      </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {$id=12345+$row['id'];
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
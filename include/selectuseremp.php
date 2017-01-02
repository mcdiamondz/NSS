<?php

$empsql = "SELECT * FROM employment_records WHERE UserID = :userid";
$empvalues = array(':userid' => $_SESSION['userid']);
$empdata = $nss->select_query($empsql, $empvalues);
if($empdata){
  foreach($empdata as $value){
    // $employer = $value['Employer'];
    // $position = $value['Position'];
    // $stdate = $value['StartDate'];
    // $endate = $value['EndDate'];
  }
}
?>

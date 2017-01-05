<?php

$prosql = "SELECT * FROM corporate_project WHERE UserID = :corpid";
$provalues = array(':corpid' => $_SESSION['corpid']);
$prodata = $nss->select_query($prosql, $provalues);
if($prodata){
  foreach($prodata as $value){
    // $employer = $value['Employer'];
    // $position = $value['Position'];
    // $stdate = $value['StartDate'];
    // $endate = $value['EndDate'];
  }
}
?>

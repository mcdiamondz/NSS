<?php

$edusql = "SELECT * FROM education_records WHERE UserID = :userid";
$eduvalues = array(':userid' => $_SESSION['userid']);
$edudata = $nss->select_query($edusql, $eduvalues);
if($edudata){
  foreach($edudata as $value){
    // $educationtype = isset($value['EducationType'])?$value['EducationType']:'';
    // $qualiobtained = isset($value['QualificationObtained'])?$value['QualificationObtained']:'';
    // $institution = isset($value['Institution'])?$value['Institution']:'';
    // $statedate = isset($value['StartDate'])?$value['StartDate']:'';
    // $enddate = isset($value['EndDate'])?$value['EndDate']:'';
    // $educationtype = $value['EducationType'];
    // $qualiobtained = $value['QualificationObtained'];
    // $institution = $value['Institution'];
    // $statedate = $value['StartDate'];
    // $enddate = $value['EndDate'];

  }
}
?>

<?php
require '../dbconfig/dbInit.php';

$userid = test_input($_POST['uid']);
$nameofschool = test_input($_POST['nos']);
$startdate = test_input($_POST['sch_start']);
$enddate = test_input($_POST['sch_end']);
$typeofdegree = test_input($_POST['edutype']);
$qualification = test_input($_POST['qualification']);

$sql = "INSERT INTO education_records (UserID, EducationType, QualificationObtained, Institution, StartDate, EndDate)
        VALUES(:userid, :edutype, :quali, :inst, :start, :enddate)";
$values = array(':userid' => $userid, ':edutype' => $typeofdegree,
                ':quali' => $qualification, ':inst' => $nameofschool,
                ':start' => $startdate, ':enddate' => $enddate);
$data = $nss->insert_query($sql, $values);
if($data){
    $sqlstmt = "SELECT * FROM education_records WHERE UserID = :uid";
    $valuestmt = array(':uid' => $userid);
    $datastmt = $nss->select_query($sqlstmt, $valuestmt);
    if ($datastmt){
       foreach ($datastmt as $value) {
         echo   '<tr class="gradeX">';
         echo       '<td>'.$value['Institution'].'</td>';
         echo       '<td>'.$value['StartDate'].'</td>';
         echo       '<td>'.$value['EndDate'].'</td>';
         echo       '<td>'.$value['EducationType'].'</td>';
         echo       '<td>'.$value['QualificationObtained'].'</td>';
         echo       '<td class="actions">';
         echo           '<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>';
         echo           '<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>';
         echo           '<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>';
         echo       '</td>';
         echo   '</tr>';
       }
   }
}
?>

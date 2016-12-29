<?php
require '../dbconfig/dbInit.php';

$userid = test_input($_POST['uid']);
$employer = test_input($_POST['employer']);
$job_start = test_input($_POST['job_start']);
$job_end = test_input($_POST['job_end']);
$position = test_input($_POST['position']);


$sql = "INSERT INTO employment_records (UserID, Employer, Position, StartDate, EndDate)
        VALUES(:userid, :employer, :position, :start, :enddate)";
$values = array(':userid' => $userid, ':employer' => $employer,
                ':position' => $position,  ':start' => $job_start,
                ':enddate' => $job_end);
$data = $nss->insert_query($sql, $values);
if($data){
    $sqlstmt = "SELECT * FROM employment_records WHERE UserID = :uid";
    $valuestmt = array(':uid' => $userid);
    $datastmt = $nss->select_query($sqlstmt, $valuestmt);
    if ($datastmt){
       foreach ($datastmt as $value) {
         echo   '<tr class="gradeX">';
         echo       '<td>'.$value['Employer'].'</td>';
         echo       '<td>'.$value['StartDate'].'</td>';
         echo       '<td>'.$value['EndDate'].'</td>';
         echo       '<td>'.$value['Position'].'</td>';
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

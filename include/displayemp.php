<?php
require '../dbconfig/dbInit.php';

$userid = isset($_POST['uid'])?test_input($_POST['uid']):'';



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
     echo           '<a href="#" onclick="delete_rec();" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>';
     echo           '<input type = "hidden" id="hidden_row_id" value= "'.$value['id'].'">';
     echo       '</td>';
     echo   '</tr>';
   }
}
 ?>

<?php
require '../dbconfig/dbInit.php';

$id = $_POST['row_id'];
$userid = $_POST['uid'];
$sql = "DELETE FROM employment_records WHERE id = :id AND UserID = :uid";
$values = array(':id' => $id, ':uid' => $userid);
$data = $nss->delete_query($sql, $values);
if($data){
  echo "successfully deleted";
}
else{
   echo "not deleted";
}
?>

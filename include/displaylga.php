<?php
  include '../dbconfig/dbInit.php';

  $stateid = test_input($_POST['stateid']);

  $sql = "SELECT * FROM local_govt  WHERE state_id = :id";
  $values = array('id' => $stateid);
  $data = $nss->select_query($sql, $values);
  if($data){
    echo '<option  value="">Select LGA</option>';
       foreach($data as $value){

         echo '<option value="'.$value['local_id'].'">'.$value['local_name'].'</option>';
       }
  }
 ?>

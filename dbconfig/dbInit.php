<?php

    include "appDefine.php";
    include 'dbConnect.php';


    $dbaccount = DB_SELECT_CONNECTION;
    $nss = new Database($dbaccount);


    function test_input($data){
      $data = trim($data);
      $data = strip_tags($data);
      $data = htmlspecialchars($data);
      $data = stripslashes($data);
      return $data;
    }

?>

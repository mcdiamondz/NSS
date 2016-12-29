<?php


  switch ($dbaccount) {
    case "NSS_DATA_CONNECT":
      # code...

      $dsn = "mysql:host=".DB_HOST_ADDRESS.";dbname=".DB_CONNECT;
      $dbuser = DB_USERNAME;
      $dbpass = DB_PASSWORD;

      break;

    case "validation":
        # code..
      break;

    default:
      # code...
      echo "Provide a vaild Database connectionsss";
      break;
  }
?>

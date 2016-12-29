<?php

    $sql = "SELECT * FROM admanager";
    $data = $afrigrad->select($sql);
    if($data){
        foreach ($data as $value) {
          # code...
          $id = $value['id'];
          $frequency = $value['Frequency'];
          $reoccurance = $value['Reoccurance'];
          $subtraction = $value['Subtraction'];

          /*Advertisment dispaly settiings*/
          define ('AD_DISTANCE_ITTERATION', $frequency);
          define ('AD_REOCCURANCE_ITTERATION', $reoccurance);
          define ('AD_REOCCURANCE_SUBTRACTION', $subtraction);
  }

}

?>

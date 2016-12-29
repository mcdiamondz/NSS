<?php
$sql = "SELECT * FROM duration_setup";
$data = $afrigrad->select($sql);
if($data){
    foreach ($data as $value) {
      # code...
      $trialdays = $value['FreeTrialDays'];
      $subscriptiondays = $value['SubscriptionPeriod'];

      /*Users allowed setup*/
      define ('TRIALDAYS', $trialdays);
      define ('SUBDAYS', $subscriptiondays);
    }

}
?>

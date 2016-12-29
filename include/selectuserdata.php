<?php
$sql = "SELECT * FROM user_data WHERE UserID = :userid";
$values = array(':userid' => $_SESSION['userid']);
$data = $nss->select_query($sql, $values);
if($data){
  foreach($data as $value){
    $firstname = $value['Firstname'];
    $lastname = $value['Lastname'];
    $middlename = $value['MiddleName'];
    $gender = $value['Gender'];
    $dob = $value['DateOfBirth'];
    $email = $value['Email'];
    $phone = $value['PhoneNumber'];
    $mstatus = $value['MaritalStatus'];
    $raddress = $value['ResidentialAddress'];
    $rstate = $value['StateOfResidence'];
    $rlga = $value['ResidentialLocalGovt'];
    $paddress = $value['Address'];
    $pstate = $value['StateOfOrigin'];
    $plga = $value['LocalGovt'];

  }
}
?>

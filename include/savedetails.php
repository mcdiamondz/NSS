<?php
require '../dbconfig/dbInit.php';



 $userid = isset($_POST['uid'])?test_input($_POST['uid']):'';
 $firstname = isset($_POST['fname'])?test_input($_POST['fname']):'';
 $lastname = isset($_POST['lname'])?test_input($_POST['lname']):'';
 $midname = isset($_POST['mname'])?test_input($_POST['mname']);
 $email = isset($_POST['email'])?test_input($_POST['email']):'';
 $address = isset($_POST['address'])?test_input($_POST['address']):'';
 $nexofkin = isset($_POST['nok'])?test_input($_POST['nok']);'';
 $gender = isset($_POST['gender'])?test_input($_POST['gender']):'';
 $dob = isset($_POST['dob'])?test_input($_POST['dob']):'';
 $phone = isset($_POST['phone'])?test_input($_POST['phone']):'';
 $marital_status = isset($_POST['marital_status'])?test_input($_POST['marital_status']):'';
 $statoforigin = isset($_POST['state_of_origin'])?test_input($_POST['state_of_origin']):'';
 $lgaoforigin = isset($_POST['LGA_of_origin'])?test_input($_POST['LGA_of_origin']):'';
 $statofresidence = isset($_POST['state_of_residence'])?test_input($_POST['state_of_residence']):'';
 $lgaofresidence = isset($_POST['LGA_of_residence'])?test_input($_POST['LGA_of_residence']):'';
 $permanentaddress = isset($_POST['permaddress'])?test_input($_POST['permaddress']):'';


$sql = "INSERT INTO user_data (UserID, Firstname, Lastname, MiddleName, Gender, DateOfBirth, Email, PhoneNumber, MaritalStatus, ResidentialAddress, StateOfResidence, ResidentialLocalGovt, Address, StateOfOrigin, LocalGovt)
        VALUES(:userid, :fname, :lname, :mname, :gender, :dob, :email, :phone, :maristatus, :resaddress, :stateofres, :reslga, :address, :stateoforigin, :lga)";
$values = array(':userid' => $userid, ':fname' => $firstname,
                ':lname' => $lastname, ':mname' => $midname,
                ':gender' => $gender, ':dob' => $dob,
                ':email' => $email, ':phone' => $phone,
                ':maristatus' => $marital_status,
                ':resaddress' => $address, ':stateofres' => $statofresidence,
                ':reslga' => $lgaofresidence, ':address' => $permanentaddress,
                ':stateoforigin' => $statoforigin,
                ':lga' => $lgaoforigin);
$data = $nss->insert_query($sql, $values);
if($data){
  echo "<div class='alert alert-success  alert-dismissible text-center' style='width:800px; margin:0 auto;'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
            <strong>Well done!</strong> Your data is saved.
        </div>";
}
else {
  echo "<div class='alert alert-danger  alert-dismissible text-center' style='width:800px; margin:0 auto;'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
            <strong>Oh Snap!</strong> Something went wrong inserting user_data!.
        </div>";
}


?>

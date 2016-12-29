<?php
require '../dbconfig/dbInit.php';


$userid = test_input($_POST['uid']);
$firstname = test_input($_POST['fname']);
$lastname = test_input($_POST['lname']);
$midname = test_input($_POST['mname']);
$email = test_input($_POST['email']);
$address = test_input($_POST['address']);
$nexofkin = test_input($_POST['nok']);
$gender = test_input($_POST['gender']);
$dob = test_input($_POST['dob']);
$phone = test_input($_POST['phone']);
$marital_status = test_input($_POST['marital_status']);
$statoforigin = test_input($_POST['state_of_origin']);
$lgaoforigin = test_input($_POST['LGA_of_origin']);
$statofresidence = test_input($_POST['state_of_residence']);
$lgaofresidence = test_input($_POST['LGA_of_residence']);
$permanentaddress = test_input($_POST['permaddress']);


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

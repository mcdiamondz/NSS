<?php
require '../dbconfig/dbInit.php';


$corpid = test_input($_POST['cid']);
$logo = test_input($_POST['logo']);
$orgname = test_input($_POST['company_name']);
$address = test_input($_POST['company_address']);
$state = test_input($_POST['state_of_location']);
$lga = test_input($_POST['lga_of_location']);
$rcnumber = test_input($_POST['company_RC_NO']);
$biztype = test_input($_POST['business_type']);
$yrofest = test_input($_POST['date_of_establishment']);
$contperson = test_input($_POST['company_contact_person']);
$contpersonphone = test_input($_POST['company_contact_phone']);
$contpersonemail = test_input($_POST['company_contact_email']);
$email = test_input($_POST['company_email']);
$website = test_input($_POST['website']);
$logo = test_input($_POST['logo']);
$tinum = test_input($_POST['company_TIN']);
$phone = test_input($_POST['company_phone']);


if(isset($_POST['logo'])){
    if($_FILES['logo']['size'] > 0){
     $target_dir = 'corplogo/';
     $logo = basename($_FILES['logo']['name']);
     $target = $target_dir . $pix;
     move_uploaded_file($_FILES['logo']['tmp_name'], $target);
   }
 }

$sql = "INSERT INTO corporate_data (CorpID, OrganizationName, Address, RCNumber, BusinessType, YearOfEsterblishement, Email, Website, Logo, TinNumber, PhoneNumber)
        VALUES(:corpid, :orgname, :address, :rcnum, :biztype, :yrofest, :email, :website, :logo, :tinum, :phone)";
$values = array(':corpid' => $corpid, ':orgname' => $orgname,
                ':address' => $address, ':rcnum' => $rcnumber,
                ':biztype' => $biztype, ':yrofest' => $yrofest,
                ':email' => $email, ':website' => $website,
                ':logo' => $logo, ':tinum' => $tinum, ':phone' => $phone
                );
$data = $nss->insert_query($sql, $values);
if($data){
    $sql2 = "INSERT INTO corporate_contact_person (CorpID, Name, Phone,	Email) VALUES (:corpid, :name, :phone, :email)";
    $values2 = array(':corpid' => $corpid, ':name' => $contperson,
                     ':phone' => $contpersonphone, ':email' => $contpersonemail);
    $data2 = $nss->insert_query($sql2, $values2);
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

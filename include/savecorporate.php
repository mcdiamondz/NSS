<?php
require '../dbconfig/dbInit.php';



 $corpid = isset($_POST['cid'])?test_input($_POST['cid']):'';
 $orgname = isset($_POST['company_name'])?test_input($_POST['company_name']):'';
 $address = isset($_POST['company_address'])?test_input($_POST['company_address']):'';
 $state = isset($_POST['state_of_location'])?test_input($_POST['state_of_location']):'';
 $lga = isset($_POST['lga_of_location'])?test_input($_POST['lga_of_location']):'';
 $rcnumber = isset($_POST['company_RC_NO'])?test_input($_POST['company_RC_NO']):'';
 $biztype = isset($_POST['business_type'])?test_input($_POST['business_type']):'';
 $yrofest = isset($_POST['date_of_establishment'])?test_input($_POST['date_of_establishment']):'';
 $contperson = isset($_POST['company_contact_person'])?test_input($_POST['company_contact_person']):'';
 $contpersonphone = isset($_POST['company_contact_phone'])?test_input($_POST['company_contact_phone']):'';
 $contpersonemail = isset($_POST['company_contact_email'])?test_input($_POST['company_contact_email']):'';
 $email = isset($_POST['company_email'])?test_input($_POST['company_email']):'';
 $website = isset($_POST['website'])?test_input($_POST['website']):'';
 // $logo = isset($_POST['logo'])?test_input($_POST['logo']):'';
 $tinum = isset($_POST['company_TIN'])?test_input($_POST['company_TIN']):'';

if(isset($_POST['logo'])){
  var_dump($_FILES['logo']['name']);
  //   if($_FILES['logo']['size'] > 0){
  //    $target_dir = 'corplogo/';
  //    $logo = basename($_FILES['logo']['name']);
  //    $target = $target_dir . $pix;
  //    move_uploaded_file($_FILES['logo']['tmp_name'], $target);
  //  }
 }

// $sql = "INSERT INTO corporate_data (CorpID, OrganizationName, Address, RCNumber, BusinessType, YearOfEsterblishement, Email, Website, Logo, TinNumber)
//         VALUES(:corpid, :orgname, :address, :rcnum, :biztype, :yrofest, :email, :website, :logo, :tinum)";
// $values = array(':corpid' => $corpid, ':orgname' => $orgname,
//                 ':address' => $address, ':rcnum' => $rcnumber,
//                 ':biztype' => $biztype, ':yrofest' => $yrofest,
//                 ':email' => $email, ':website' => $website,
//                 ':logo' => $logo, ':tinum' => $tinum
//                 );
// $data = $nss->insert_query($sql, $values);
// if($data){
//     //Save company contact person information
//     $sql2 = "INSERT INTO corporate_contact_person (CorpID, Name, Phone,	Email) VALUES (:corpid, :name, :phone, :email)";
//     $values2 = array(':corpid' => $corpid, ':name' => $contperson,
//                      ':phone' => $contpersonphone, ':email' => $contpersonemail);
//     $data2 = $nss->insert_query($sql2, $values2);
//
//     //Set datasubmitted field in login table to 1
//     $sql3 = "UPDATE login SET DataSubmitted = 1 WHERE UserID = :id";
//     $values3 = array(':id' => $corpid);
//     $nss->update_query($sql3, $values3);
//
//   echo "<div class='alert alert-success  alert-dismissible text-center' style='width:800px; margin:0 auto;'>
//           <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
//             <strong>Well done!</strong> Your data is saved.
//         </div>";
// }
// else {
//   echo "<div class='alert alert-danger  alert-dismissible text-center' style='width:800px; margin:0 auto;'>
//           <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
//             <strong>Oh Snap!</strong> Something went wrong inserting user_data!.
//         </div>";
// }


?>

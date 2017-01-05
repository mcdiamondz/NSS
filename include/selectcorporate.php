<?php
$sql = "SELECT corp.OrganizationName AS orgname, corp.Address AS address, corp.RCNumber AS rcnum, corp.BusinessType AS biztype,
        corp.YearOfEsterblishement AS yrofest, corp.Email AS email, corp.Website AS website, corp.Logo AS logo, corp.TinNumber AS tinum,
        cont.Name AS name, cont.Phone AS phone, cont.Email AS cont_email
        FROM corporate_data corp
        INNER JOIN corporate_contact_person cont ON corp.CorpID = cont.CorpID
        WHERE corp.CorpID = :cid";
$values = array(':cid' => $_SESSION['corpid']);
$data = $nss->select_query($sql, $values);
if($data){
    foreach($data as $value){
      $orgname = isset($value['orgname'])?$value['orgname']:'';
      $address = $value['address'];
      $rcnum = $value['rcnum'];
      $biztype = $value['biztype'];
      $yrofest = $value['yrofest'];
      $email = $value['email'];
      $website = $value['website'];
      $logo = $value['logo'];
      $tinum = $value['tinum'];

      $contname = $value['name'];
      $contphone = $value['phone'];
      $contemail = $value['cont_email'];

    }
}

?>

<?php
$sql = "SELECT corp.OrganizationName AS orgname, corp.Addres AS address, corp.RCNumber AS rcnum, corp.BusinessType AS biztype,
        corp.YearOfEsterblishement AS yrofest, corp.Email AS Email, corp.Website AS website, corp.Logo AS Logo, corp.TinNumber AS tinum,
        cont.Name AS name, cont.
        FROM corporate_data corp
        INNER JOIN corporate_contact_person cont ON corp.CorpID = cont.CorpID
        WHERE corp.CorpID = :cid";
$values = array(':cid' => $_SESSION['corpid']);
$data = $nss->select_query($sql, $values);
if($data){
    foreach($data as $value){
      $orgname = $value['orgname'];
      $address = $value['address'];
      $rcnum = $value['rcnum'];
      $biztype = $value['biztype'];
      $yrofest = $value['yrofest'];
      $email = $value['Email'];
      $website = $value['website'];
      $logo = $value['Logo'];
      $tinum = $value['tinum'];

      $contname = $value['name'];

    }
}

?>

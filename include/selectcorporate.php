<?php
$sql = "SELECT corp.*, cont.* FROM corporate_data corp
        INNER JOIN corporate_contact_person cont ON corp.CorpID = cont.CorpID
        WHERE corp.CorpID = :cid";
$values = array(':cid' => $_SESSION['corpid']);
$data = $nss->select_query($sql, $values);
if($data){
    foreach($data as $value){

    }
}

?>

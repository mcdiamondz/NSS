<?php

    foreach($category as $select){
        switch ($select) {

          case 'mba':
            # code...
            $mba = "SELECT COUNT(opp.CategoryNumber) AS mba FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat AND opp.IsExpired = 0";
            $mba_values = array(':cat' => CAT_MBA);
            $mba_data = $afrigrad->select_query($mba, $mba_values);
            if($mba_data){
                foreach ($mba_data as $mbavalue) {
                  # code...
                  $mba_total = $mbavalue['mba'];
                  $total = $mba_total;
                }
            }
            break;

          case 'phd':
            # code...
            $phd = "SELECT COUNT(opp.CategoryNumber) AS phd FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $phd_values = array(':cat' => CAT_PHD);
        		$phd_data = $afrigrad->select_query($phd, $phd_values);
        		if($phd_data){
        				foreach ($phd_data as $phdvalue) {
        					# code...
        					$phd_total = $phdvalue['phd'];
                  $total = $phd_total;
        				}
        		}
            break;

          case 'awards':
            # code...
            $awd = "SELECT COUNT(opp.CategoryNumber) AS awd FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $awd_values = array(':cat' => CAT_AWARDS);
        		$awd_data = $afrigrad->select_query($awd, $awd_values);
        		if($awd_data){
        				foreach ($awd_data as $awdvalue) {
        					# code...
        					$awd_total = $awdvalue['awd'];
                  $total = $awd_total;
        				}
        		}
            break;

          case 'loans':
            # code...
            $loan = "SELECT COUNT(opp.CategoryNumber) AS loan FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $loan_values = array(':cat' => CAT_LOAN);
        		$loan_data = $afrigrad->select_query($loan, $loan_values);
        		if($loan_data){
        				foreach ($loan_data as $loanvalue) {
        					# code...
        					$loan_total = $loanvalue['loan'];
                  $total = $loan_total;
        				}
        		}
            break;

          case 'essays':
            # code...
            $ess = "SELECT COUNT(opp.CategoryNumber) AS ess FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $ess_values = array(':cat' => CAT_ESSAY);
        		$ess_data = $afrigrad->select_query($ess, $ess_values);
        		if($ess_data){
        				foreach ($ess_data as $essvalue) {
        					# code...
        					$ess_total = $essvalue['ess'];
                  $total = $ess_total;
        				}
        		}
            break;

          case 'startups':
            # code...
            $str = "SELECT COUNT(opp.CategoryNumber) AS str FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $str_values = array(':cat' => CAT_STARTUP);
        		$str_data = $afrigrad->select_query($str, $str_values);
        		if($str_data){
        				foreach ($str_data as $strvalue) {
        					# code...
        					$str_total = $strvalue['str'];
                  $total = $str_total;
        				}
        		}
            break;

          case 'internship':
            # code...
            $int = "SELECT COUNT(opp.CategoryNumber) AS intern FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $int_values = array(':cat' => CAT_INTERNSHIP);
        		$int_data = $afrigrad->select_query($int, $int_values);
        		if($int_data){
        				foreach ($int_data as $intvalue) {
        					# code...
        					$int_total = $intvalue['intern'];
                  $total = $int_total;
        				}
        		}
            break;

          case 'masters':
            # code...
            $msc = "SELECT COUNT(opp.CategoryNumber) AS msc FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $msc_values = array(':cat' => CAT_MASTERS);
        		$msc_data = $afrigrad->select_query($msc, $msc_values);
        		if($msc_data){
        				foreach ($msc_data as $mscvalue) {
        					# code...
        					$msc_total = $mscvalue['msc'];
                  $total = $msc_total;
        				}
        		}
            break;

          case 'bachelors':
            # code...
            $bsc = "SELECT COUNT(opp.CategoryNumber) AS bsc FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $bsc_values = array(':cat' => CAT_BACHELORS);
        		$bsc_data = $afrigrad->select_query($bsc, $bsc_values);
        		if($bsc_data){
        				foreach ($bsc_data as $bscvalue) {
        					# code...
        					$bsc_total = $bscvalue['bsc'];
                  $total = $bsc_total;
        				}
        		}
            break;

          case 'doctorate':
            # code...
            $doc = "SELECT COUNT(opp.CategoryNumber) AS doc FROM opportunities opp
                    INNER JOIN categories cat ON cat.CategoryNumber = opp.CategoryNumber
                    WHERE cat.Category = :cat  AND opp.IsExpired = 0";
            $doc_values = array(':cat' => CAT_POST_DOC);
        		$doc_data = $afrigrad->select_query($doc, $doc_values);
        		if($doc_data){
        				foreach ($doc_data as $docvalue) {
        					# code...
        					$doc_total = $docvalue['doc'];
                  $total = $doc_total;
        				}
        		}


            break;

          default:
            # code...
            echo 'No category is selected';
            break;
        }
    }
?>

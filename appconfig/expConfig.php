<?php

              # code... Compare today's date to ExpiredDate column and set to Expired if date has passed.
              $sql = "UPDATE opportunities SET IsExpired = 1 WHERE DATE(NOW()) > ExpiredDate OR ExpiredDate IS NULL";
              $date = $afrigrad->update($sql);


?>

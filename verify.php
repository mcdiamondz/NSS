
<?php
include 'dbconfig/dbInit.php';



                            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){

                                $email = test_input($_GET['email']);
                                $hash = test_input($_GET['hash']);



                                // $sql = "SELECT * FROM login WHERE Email =:email AND Hash = :hash AND IsActive = 0";
                                $sql = "SELECT * FROM login WHERE Email =:email AND Hash = :hash";
                                $values = array(':email' => $email , ':hash' => $hash);
                                $data = $nss->select_query($sql, $values);

                                if($data){
                                  foreach ($data as $value) {
                                    # code...
                                    // if($value['IsActive'] != 0 && $value['Hash'] == NULL)
                                    if($value['IsActive'] != 0){
                                      echo "<div class='alert alert-danger alert-dismissible text-center'>
                                              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                                <strong>Your account has already been activated. </strong>.
                                            </div>";
                                    }

                                    elseif($value['IsActive'] == 0){
                                        // $sql = "UPDATE login SET IsActive = 1, Hash = NULL WHERE Email = :email AND Hash = :hash";
                                        $sql = "UPDATE login SET IsActive = 1 WHERE Email = :email AND Hash = :hash";
                                        $data = $nss->update_query($sql, $values);
                                        if($data){

                                            echo "<div class='alert alert-success alert-dismissible text-center'>
                                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                                      <strong>Well done!</strong> Your account is now active, you can now login
                                                  </div>";
                                        }
                                    }
                                  }
                                }
                                else{
                                      echo "<div class='alert alert-danger alert-dismissible text-center'>
                                              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                                Verification failed, Please send a mail to customer support at support@sme4.me
                                            </div>";
                                }
                            }





?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
function sendform()
{
document.getElementById('jsform').submit();
}
$(document).ready(sendform);
</script>

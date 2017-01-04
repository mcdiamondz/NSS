
<?php



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
                                          echo '<h6 class="sc_services_subtitle sc_item_subtitle">Account Has already been verified. <a href="login.php">You can now to login</a></h6>';
                                    }

                                    elseif($value['IsActive'] == 0){
                                        // $sql = "UPDATE login SET IsActive = 1, Hash = NULL WHERE Email = :email AND Hash = :hash";
                                        $sql = "UPDATE login SET IsActive = 1 WHERE Email = :email AND Hash = :hash";
                                        $data = $nss->update_query($sql, $values);
                                        if($data){

                                            echo '<h6 class="sc_services_subtitle sc_item_subtitle">Account Has been verified. <a href="login.php">You can now to login</a></h6>';
                                        }
                                    }
                                  }
                                }
                                else{
                                      echo '<h6 class="sc_services_subtitle sc_item_subtitle">Account verification failed, Contact support</h6>';
                                }
                            }
                            else {
                                 echo '<h6 class="sc_services_subtitle sc_item_subtitle">You must be lost <a href="index.php">click here to find your way</a></h6>';
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

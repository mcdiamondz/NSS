<?php
      if (isset($_POST['formname'])) {
        # code...
          switch ($_POST['formname']) {
              case 'opportunity_deactivate':
                # code...
                        if(isset($_POST['deactivate'])){
                            $sql1 = "UPDATE opportunities SET IsExpired = 1 WHERE Id = :id";

                            $values1 = array(':id' => $_POST['id']);

                            $data1 = $afrigrad->update_query($sql1, $values1);

                        if($data1){
                            echo "<div class='alert alert-success  alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                      <strong>Well done!</strong> Opportunity has been deactivated.
                                  </div>";
                        }
                        else{
                            echo "<div class='alert alert-danger alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                      <strong>Oh Snap!</strong> Activation failed, Contact administrator.
                                  </div>";
                        }
                    }
                break;

              case 'opportunity_activate':
                # code...
                      if(isset($_POST['activate'])){

                            $sql = "UPDATE opportunities SET IsExpired = 0 WHERE Id = :id";

                            $values = array(':id' => $_POST['id']);

                            $data = $afrigrad->update_query($sql, $values);

                        if($data){
                            echo "<div class='alert alert-success  alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                      <strong>Well done!</strong> Acvtivated the Opportunity to be visible.
                                  </div>";
                        }
                        else{
                            echo "<div class='alert alert-danger alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                      <strong>Oh Snap!</strong> Activation failed, Contact the administrator.
                                  </div>";
                        }
                    }

                  break;

              case 'opp_update':
                        if(isset($_POST['save'])){
                              $id = $_POST['id'];
                              $title = $_POST['title'];
                              $purpose = $_POST['purpose'];
                              $elignationals = $_POST['elignationals'];
                              $levelofstudy = $_POST['levelofstudy'];
                              $oppvalue = $_POST['oppvalue'];
                              $valindols = $_POST['valindols'];
                              $course = $_POST['course'];
                              $hostcountry = $_POST['hostcountry'];
                              $deadline = $_POST['deadline'];
                              $weblink = $_POST['weblink'];
                              // $category = $_POST['Category'];
                              $datecreated = $_POST['datecreated'];
                              $expdate = $_POST['expdate'];
                              $sql = "UPDATE opportunities SET Title = :title, Purpose = :purpose, EligibleNationalities = :elignat,
                                      LevelOfStudy = :levelofstudy, OpportunityValue =:oppvalue,
                                      ValueInDollars = :valindols,  Course = :course, HostCountry = :hostcountry,
                                      DeadLine = :deadline, WebLink = :weblink, ExpiredDate = :expdate
                                      WHERE Id = :id";

                              $values = array(':id' => $id,
                                              ':title' => $title, ':purpose' => $purpose, ':elignat' => $elignationals,
                                              ':levelofstudy' => $levelofstudy, ':oppvalue' => $oppvalue, ':valindols' => $valindols,
                                              ':course' => $course, ':hostcountry' => $hostcountry, ':deadline' => $deadline,
                                              ':weblink' => $weblink, ':expdate' => $expdate
                                              );

                              $data = $afrigrad->update_query($sql, $values);

                          if($data){
                              echo "<div class='alert alert-success  alert-dismissible text-center'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                        <strong>Well done!</strong> Acvtivated the Opportunity to be visible.
                                    </div>";
                          }
                          else{
                              echo "<div class='alert alert-danger alert-dismissible text-center'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                        <strong>Oh Snap!</strong> Activation failed, Contact the administrator.
                                    </div>";
                          }
                      }
                  break;
            case 'categories_update':
              # code...
                  if(isset($_POST['update'])){
                        $id = $_POST['id'];
                        $category = $_POST['category'];
                        $code = $_POST['code'];
                        $categoryid = $_POST['categoryid'];
                        $color = $_POST['color'];

                        $sql = "UPDATE categories SET Category = :category, Code = :code, CategoryNumber = :categoryid, CategoryColor = :color
                                WHERE id = :id";

                        $values = array(':id' => $id,
                                        ':category' => $category, ':code' => $code, ':categoryid' => $categoryid, ':color' => $color);

                        $data = $afrigrad->update_query($sql, $values);

                    if($data){
                        echo "<div class='alert alert-success  alert-dismissible text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                  <strong>Well done!</strong> Category has been updated successfully.
                              </div>";
                    }
                    else{
                        echo "<div class='alert alert-danger alert-dismissible text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                  <strong>Oh Snap!</strong> Category update has failed, Contact the administrator.
                              </div>";
                    }
                }
              break;
            case 'admanager':
              # code...
                  if(isset($_POST['update'])){
                        $id = $_POST['id'];
                        $frequency = $_POST['frequency'];
                        $subtraction = $_POST['subtraction'];
                        $reoccurance = $_POST['reoccurance'];

                        $sql = "UPDATE admanager SET Frequency = :frequency, Subtraction = :subtraction, Reoccurance = :reoccurance";

                        $values = array(':frequency' => $frequency, ':subtraction' => $subtraction, ':reoccurance' => $reoccurance);

                        $data = $afrigrad->update_query($sql, $values);

                    if($data){
                        echo "<div class='alert alert-success  alert-dismissible text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                  <strong>Well done!</strong> Advertisment display frequecy updated successfully.
                              </div>";
                    }
                    else{
                        echo "<div class='alert alert-danger alert-dismissible text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                  <strong>Oh Snap!</strong> display frequecy update has failed, Contact the administrator.
                              </div>";
                    }
                }
              break;

            case 'user_profile':
              # code...
                      function test_input($data){
                        $data = trim($data);
                        $data = strip_tags($data);
                        $data = htmlspecialchars($data);
                        $data = stripslashes($data);
                        return $data;
                      }
                      $update = isset($_POST['update'])?'update':'';

                      if(isset($_POST['save'])){
                          if($_FILES['picture']['size'] > 0){
                           $target_dir = 'myprofilepix/';
                           $pix = basename($_FILES['picture']['name']);
                           $target = $target_dir . $pix;
                           move_uploaded_file($_FILES['picture']['tmp_name'], $target);
                         }

                           $name = isset($_POST['fullname'])?test_input($_POST['fullname']):'';
                           $aboutme = isset($_POST['aboutme'])?test_input($_POST['aboutme']):'';
                           $gender = isset($_POST['gender'])?test_input($_POST['gender']):'';
                           $dob  = isset($_POST['dob'])?test_input($_POST['dob']):'';
                           $phone = isset($_POST['phone'])?test_input($_POST['phone']):'';
                           $location = isset($_POST['country'])?test_input($_POST['country']):'';
                           $picture = empty($pix)?$_POST['picture']:$pix;
                           $email = $_SESSION['user_email'];
                           $sql = "UPDATE users SET ProfilePicture = :pic, FullName = :fname, Aboutme = :aboutme, Gender = :gender, DateOfBirth = :dob, PhoneNumber = :phone, Location = :loc WHERE Email = :email";
                           $values = array(':pic' => $picture, ':fname' => $name, ':aboutme' => $aboutme, ':gender' => $gender, ':dob' => $dob, ':phone' => $phone, ':loc' => $location, ':email' => $email);
                           $data = $afrigrad->update_query($sql, $values);
                           if ($data) {
                             # code...
                              echo "<script>window.location.href=window.location.href;</script>";
                           }
                       }


              break;

            case 'subsetup_setup':
              # code...
                  if (isset($_POST['update'])) {
                    # code...
                    $subperiod = $_POST['subperiod'];
                    $freetrial = $_POST['freetrial'];
                    $sql = "UPDATE duration_setup SET FreeTrialDays = :freetrial, SubscriptionPeriod = :subperiod";
                    $values = array(':freetrial' => $freetrial, ':subperiod' => $subperiod);
                    $data = $afrigrad->update_query($sql, $values);
                    if($data){
                        echo "<div class='alert alert-success  alert-dismissible text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                  <strong>Well done!</strong> Subscription setup updated successfully.
                              </div>";
                    }
                    else{
                        echo "<div class='alert alert-danger alert-dismissible text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                  <strong>Oh Snap!</strong> Subscription setup updated, Contact the administrator.
                              </div>";
                    }
                  }
              break;
            case 'change_password':
                if(isset($_POST['changepwd'])){

                        function test_input($data){
                          $data = trim($data);
                          $data = strip_tags($data);
                          $data = htmlspecialchars($data);
                          $data = stripslashes($data);
                          return $data;
                        }

                        $password = md5(test_input($_POST['password']));
                        $email = $_SESSION['user_email'];
                        $sql = "UPDATE login SET Password = :psswd WHERE Email = :email";
                        $values = array(':psswd' => $password, ':email' =>$email);
                        $data = $afrigrad->update_query($sql, $values);

                        if($data){
                          echo "<div class='alert alert-success  alert-dismissible text-center'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                    <strong>Well done!</strong> Password successfully changed
                                </div>";
                        }
                }
             break;
            default:
              # code...
              break;
          }
      }


?>

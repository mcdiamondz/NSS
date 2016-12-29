<?php
      if (isset($_POST['formname'])) {
        switch ($_POST['formname']) {
          case 'opp_edit':
            # code...
            if(isset($_POST['edit'])){
              $edit = $_POST['edit'];
              $id = base64_decode($_GET['id']);
              $sql = "SELECT * FROM opportunities WHERE Id = :id";
              $values = array(':id' => $id);
              $data = $afrigrad->select_query($sql, $values);
              if ($data) {
                # code...
                  foreach ($data as $value) {
                    # code...
                    $title = $value['Title'];
                    $purpose = $value['Purpose'];
                    $elignationals = $value['EligibleNationalities'];
                    $levelofstudy = $value['LevelOfStudy'];
                    $oppvalue = $value['OpportunityValue'];
                    $valindols = $value['ValueInDollars'];
                    $course = $value['Course'];
                    $hostcountry = $value['HostCountry'];
                    $deadline = $value['DeadLine'];
                    $weblink = $value['WebLink'];
                    $datecreated = $value['DateCreated'];
                  }
              }
            }
            break;
          case 'adverts':
            # code...
            if(isset($_POST['edit'])){
              $edit = $_POST['edit'];
              $sql = "SELECT * FROM admanager";
              $values = array(':id' => $id);
              $data = $afrigrad->select_query($sql, $values);
              if ($data) {
                # code...
                  foreach ($data as $value) {
                    # code...
                    $id = $value['id'];
                    $frequency = $value['Frequency'];
                    $reoccurance = $value['Reoccurance'];
                    $subtraction = $value['Subtraction'];

                  }
              }
            }
            break;

          case 'login':
            # code...

                    if(isset($_POST['signin'])){
                        // if($_POST['signin']){

                          include 'loginSession.php';



                            //check for valid email address
                            if (empty($_POST["email"])) {
                                $email ='';
                                $emailErr = "<div class='alert alert-danger alert-dismissible text-center'>

                                                <strong>Oh Snap!</strong> Email is required
                                            </div>";
                            }
                            else {
                                $email = test_input($_POST['email']);
                                // check if e-mail address is well-formed
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "<div class='alert alert-danger alert-dismissible text-center'>

                                                  <strong>Oh Snap!</strong> Invalid email format
                                            </div>";
                                }
                            }

                            $password = empty($_POST['password'])?'':test_input($_POST['password']);
                            $date = date('Y-m-d');







                                    $sql = "SELECT * FROM login
                                            WHERE Email = :email AND Password = :passwd AND IsActive = 1";
                                    $values = array(':email' => $email, ':passwd' => hash('sha512', $password));
                                    $data = $nss->select_query($sql, $values);
                                    if($data){
                                              foreach ($data as $value) {
                                                $_SESSION['userid'] = $value['UserID'];
                                              }

                                                //records user's last login date
                                                $sql = "UPDATE login SET LastLogin = :logindate WHERE Email = :email";
                                                $values = array(':logindate' => $date, ':email' => $email);
                                                $nss->update_query($sql, $values);



                                                foreach ($data as $value) {
                                                    $accesslevel = $value['AccessLevel'];
                                                    $_SESSION['user_email'] = $value['Email'];
                                                    $_SESSION['userid'] = $value['UserID'];
                                                }



                                                if ($accesslevel == 0) {
                                                    $_SESSION['access'] = 0; //Users
                                                }elseif($accesslevel == 1)  {
                                                    $_SESSION['access'] = 1; //Collation agents
                                                }elseif($accesslevel == 2)  {
                                                    $_SESSION['access'] = 2; //admin
                                                }




                                                if($accesslevel == 2){
                                                    $_SESSION['access_level'] = $accesslevel;
                                                    header('Location: contacts.php');
                                                }
                                                elseif($accesslevel == 0){
                                                  echo "<script>location.href='dashboard/add.php'</script>";
                                                    // header('Location: contacts.php');
                                                }

                                  }
                                  else{
                                              //Display login fail error
                                            echo  "<span>
                                                			<div class='alert alert-danger fade in'>
                                                          Wrong email or password
                                                			</div>
                                          		    </span>";


                                  }






                        // }
                    }
            break;

            case 'subsetup':
              # fetches subscription setup data from database and display on admin/subscriptionsetup.php when edit button is pressed
              if(isset($_POST['edit'])){
                $edit = $_POST['edit'];
                $sql = "SELECT * FROM duration_setup";
                $values = array(':id' => $id);
                $data = $afrigrad->select_query($sql, $values);
                if ($data) {
                  # code...
                    foreach ($data as $value) {
                      # code...
                      $id = $value['id'];
                      $freetrial = $value['FreeTrialDays'];
                      $subperiod = $value['SubscriptionPeriod'];
                    }
                }
              }
              break;

          case 'subscription':
                  if(isset($_POST['subscribe'])){
                        function test_input($data){
                          $data = trim($data);
                          $data = strip_tags($data);
                          $data = htmlspecialchars($data);
                          $data = stripslashes($data);
                          return $data;
                        }
                        //chech if pin is in the database
                      $pin = md5(strtoupper(test_input($_POST['regpin'])));
                      $sql = "SELECT * FROM vouchers WHERE Pin = :pin";
                      $values = array(':pin' => $pin);
                      $data = $afrigrad->select_query($sql, $values);
                      if($data){
                            foreach($data as $value){ //checks if the pin has been used and quits
                                  if($value['Status'] == 1){

                                    echo  "<span>
                                              <div class='alert alert-danger fade in'>
                                                  <button type='button' class='close' data-dismiss='alert'>x</button>
                                                  Used Pin, Please purchase a new Card
                                              </div>
                                          </span>";
                                    echo "<meta http-equiv='refresh' content='3'>"; //refreshes the page after 4 seconds

                                  }
                                  elseif($value['Status'] == 0){ // runs if the pin status is not used
                                        //updates voucher status
                                        $sql = "UPDATE vouchers SET Status = 1, DateUsed = :dateused, Email = :email WHERE Pin = :pin";
                                        $values = array(':dateused' => date('Y-m-d'), ':email' => $_SESSION['user_email'], ':pin' =>$pin);
                                        $afrigrad->update_query($sql, $values);

                                          require 'durationDefine.php';
                                        $date = date('Y-m-d');
                                        $subdate = date("Y-m-d", strtotime($date. '+ '.SUBDAYS.' day'));

                                        //updates users subscription status
                                        $sqlstmt = "UPDATE users SET SubExpiration = :subdate, Status = 2 WHERE Email = :email";
                                        $stmtvalues = array(':subdate' => $subdate, ':email' => $_SESSION['user_email']);
                                        $data = $afrigrad->update_query($sqlstmt, $stmtvalues);
                                        if($data){
                                          $_SESSION['access'] = 2;
                                        }
                                        echo  "<span>
                                                  <div class='alert alert-success fade in'>
                                                      <button type='button' class='close' data-dismiss='alert'>x</button>
                                                      Thank you for subscribing
                                                  </div>
                                              </span>";
                                        echo "<meta http-equiv='refresh' content='0'>"; //refreshes the page after 4 seconds
                                  }
                            }
                      }
                      else{
                          echo  "<span>
                                    <div class='alert alert-danger fade in'>
                                        <button type='button' class='close' data-dismiss='alert'>x</button>
                                        The pin does not exist, Please purchase a card or use the online payment to subscribe
                                    </div>
                                </span>";
                          echo "<meta http-equiv='refresh' content='3'>"; //refreshes the page after 4 seconds
                     }
                  }
            break;

          case 'forgot':
                  if(isset($_POST['retrieve'])){
                        function test_input($data){
                          $data = trim($data);
                          $data = strip_tags($data);
                          $data = htmlspecialchars($data);
                          $data = stripslashes($data);
                          return $data;
                        }
                        $email = test_input($_POST['email']);
                        $sql = "SELECT Email, Hash FROM login WHERE Email = :email";
                        $values = array(':email' => $email);
                        $data = $afrigrad->select_query($sql, $values);

                        if($data){

                                foreach ($data as $value) {
                                    $hash = urlencode($value['Hash']);
                                }

                                $encoded_email = urlencode($email);


                                // require '/home/afrigrad/public_html/sme/apputilities/PHPMailer/PHPMailerAutoload.php';
                                require 'apputilities/PHPMailer/PHPMailerAutoload.php';

                                $mail = new PHPMailer;

                                $mail->SMTPDebug = 0;                               // Enable verbose debug output

                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'a2plcpnl0469.prod.iad2.secureserver.net';  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'support@sme4.me';                 // SMTP username
                                $mail->Password = 'P2sqnQ6MavTy';                           // SMTP password
                                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 465;                                    // TCP port to connect to; tls:587, ssl:465


                                $mail->setFrom('no-reply@sme4.me', 'SME4ME');
                                // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                                $mail->addAddress($email);               // Name is optional
                                $mail->addReplyTo('no-reply@sme4.me', 'SME4ME Registration');
                                // $mail->addCC('cc@example.com');
                                // $mail->addBCC('bcc@example.com');

                                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'SME4ME Activation';
                                $mail->Body    = "Thank you for signing up!
                                                    Your account has been created, you can login have activated your account by pressing the url below.
                                                    ".$_SERVER['SERVER_NAME']."/password_reset.php?email=".$encoded_email."&hash=".$hash;
                                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                if($mail->send()) {
                                    echo 'Message could not be sent.';
                                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                                }
                                else {
                                    echo "<span>
                                            <div class='alert alert-success fade in'>
                                              <button type='button' class='close' data-dismiss='alert'>x</button>
                                              <strong>Password reset email successful sent!</strong> to $encoded_email and $hash. Check your email for reset instructions.
                                            </div>
                                          </span>";
                                }
                        }
                        else{
                                  echo "<span>
                                          <div class='alert alert-info fade in'>
                                            <button type='button' class='close' data-dismiss='alert'>x</button>
                                            <strong>Password reset email successful sent!</strong> to $email. Check your email for reset instructions.
                                          </div>
                                        </span>";
                        }
                  }
            break;

          default:
            # code...
            break;
        }
      }
?>

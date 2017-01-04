<?php

      if (isset($_POST['formname'])) {
        # code...
          switch ($_POST['formname']) {


            case 'signup':
              # code...


                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            /* Field Validating using PHP*/
                                // check for valid name of either uppercase and lowercase only


                                //check for valid email address
                                if (empty($_POST["email"])) {
                                    $emailErr = "<div class='alert alert-danger alert-dismissible text-center'>
                                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                                    <strong>Oh Snap!</strong>Email is required
                                                </div>";
                                }
                                else {
                                    $email = test_input($_POST["email"]);
                                    // check if e-mail address is well-formed
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $emailErr = "<div class='alert alert-danger alert-dismissible text-center'>
                                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                                      <strong>Oh Snap!</strong>Invalid email format
                                                </div>";
                                    }
                                }

                                if(empty($_POST['password'])){
                                    $passwordErr = "<div class='alert alert-danger alert-dismissible text-center'>
                                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                                        <strong>Oh Snap!</strong>Password cannot be empty
                                                    </div>";
                                }
                                else{
                                    if($_POST['password'] == $_POST['confirm_password']){
                                      $password = test_input($_POST['password']);
                                      if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9a-z]{6,}$/', $password)){
                                          $passwordErr = "<div id='login_form'>
                                                            <div class='alert alert-danger alert-dismissible text-center'>
                                                              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                                              <strong>Oh Snap!</strong>Password should be more than 6 char and numbers
                                                            </div>
                                                          </div>";
                                      }
                                    }
                                    else{
                                      echo "<div id='login_form'>
                                              <div class='alert alert-danger alert-dismissible text-center'>
                                              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                                <strong>Oh Snap!</strong> Password did not match.
                                            </div>
                                            </div>
                                            ";
                                            //die;
                                    }
                                }




                                $terms = isset($_POST['tandc'])?$_POST['tandc']:'';
                                if ($terms == true){
                                    // $hash = md5(rand(1, 9999999));
                                    $userid = rand(1, 9999999);
                                    $hash = hash('whirlpool', rand(1, 9999999));
                                    $isactive = 0;
                                    $accesslevel = 0;
                                    // $datecreated;

                                    $chkMail = "SELECT Email FROM login WHERE Email = :email";
                                    $chkMailVal = array(':email' => $email);
                                    $chkData = $nss->select_query($chkMail, $chkMailVal);
                                    if(!$chkData){

                                              if($email && $password){
                                                  $sql = "INSERT INTO login (UserID, Email, Password, Hash, IsActive, DateCreated, AccessLevel)
                                                          VALUES(:userid, :email, :password, :hash, :isactive, DATE(NOW()), :access)";
                                                  $values = array('userid' => $userid,
                                                                  ':email' => $email,
                                                                  ':password' => hash('sha512', $password),
                                                                  ':isactive' => $isactive,
                                                                  ':hash' => $hash,
                                                                  ':access' => $accesslevel);

                                                  $data = $nss->insert_query($sql, $values);

                                                  if ($data){
                                                      require 'apputilities/PHPMailer/PHPMailerAutoload.php';





                                                      echo  "<span>
                                                                <div class='alert alert-success fade in'>
                                                                    You have successfully signed up, check your mail to activate your account
                                                                </div>
                                                            </span>";

                                                            $mail = new PHPMailer;

                                                            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                                                            $mail->isSMTP();                                      // Set mailer to use SMTP
                                                            $mail->Host = 'mail.africangrad.com';  // Specify main and; backup SMTP servers
                                                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                                            $mail->Username = 'noreply@africangrad.com';                 // SMTP username
                                                            $mail->Password = 'wg4rG#c9ykah';                           // SMTP password
                                                            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                                                            $mail->Port = 290;                                    // TCP port to connect to

                                                            $mail->setFrom('noreply@africangrad.com', 'Nigeria Social Security Scheme');
                                                            $mail->addAddress($email);     // Add a recipient
                                                            // $mail->addAddress('ellen@example.com');               // Name is optional
                                                            $mail->addReplyTo('noreply@africangrad.com', 'Nigeria Social Security Scheme');
                                                            // $mail->addCC('cc@example.com');
                                                            // $mail->addBCC('bcc@example.com');

                                                            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                                                            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                                            $mail->isHTML(true);                                  // Set email format to HTML

                                                            include "include/verificationEmail.php";

                                                            $mail->Subject = 'Welcome to Nigeria Social Security Scheme';
                                                            $mail->Body    = $message;
                                                            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                                            $mail->send();

                                                            // if(!$mail->send()) {
                                                            //     echo 'Message could not be sent.';
                                                            //     echo 'Mailer Error: ' . $mail->ErrorInfo;
                                                            // } else {
                                                            //     echo 'Message has been sent';
                                                            // }

                                                  }
                                                  else{
                                                    echo  "<span>
                                                              <div class='alert alert-danger fade in'>
                                                                  <button type='button' class='close' data-dismiss='alert'>x</button>
                                                                  Signup error, Contact NSS customer support for assistance
                                                              </div>
                                                          </span>";
                                                  }
                                                }
                                        }
                                        else{
                                            echo  "<span>
                                                      <div class='alert alert-danger fade in'>
                                                          <button type='button' class='close' data-dismiss='alert'>x</button>
                                                          Sorry, email already exist
                                                      </div>
                                                  </span>";
                                        }
                                }
                                else{

                                  echo "<span>
                                          <div class='alert alert-danger fade in col-sm-12'>                                            
                                            <strong>Registration not Successful!</strong> You must agree to Terms and Conditions to continue.
                                          </div>
                                        </span>";
                                }
                        }


              break;
            case 'user_data':

              break;
            default:
              # code...
              break;
        }
    }

?>

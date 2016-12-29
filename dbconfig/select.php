<?php

//include 'dbInit.php';



if(isset($_POST['formname'])) {

      switch ($_POST['formname']) {

          case 'signup':
                  if(isset($_POST['register'])){

                      $firstname = strip_tags($_POST['firstname']);
                      $lastname = strip_tags($_POST['lastname']);
                      $phone = stripslashes($_POST['phone']);
                      $email = strip_tags($_POST['email']);
                      $username = strip_tags($_POST['username']);
                      $password = md5(strip_tags($_POST['password']));

                      $hash = md5(rand(1, 1000));

                      try {


                              $sql = "INSERT INTO user (Firstname, Lastname, Email, Phone, Username, Password, Hash) VALUES(:fname, :lname, :email, :phone, :username, :password, :hash)";
                              $values = array(':fname' => $firstname,
                                  ':lname' => $lastname,
                                  ':email' => $email,
                                  ':phone' => $phone,
                                  ':username' => $username,
                                  ':password' => $password,
                                  ':hash' => $hash
                              );

                              $data = $cacreg->insert($sql, $values);

                              if ($data){
                                  require '../PHPMailer/PHPMailerAutoload.php';

                                  $mail = new PHPMailer;

                                  $mail->isSMTP();                                      // Set mailer to use SMTP
                                  $mail->Host = 'a2plcpnl0469.prod.iad2.secureserver.net';  // Specify main and backup SMTP servers
                                  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                  $mail->Username = 'support@sme4.me';                 // SMTP username
                                  $mail->Password = 'TGmD0883z3WW';                           // SMTP password
                                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                  $mail->Port = 465;                                    // TCP port to connect to

                                  $mail->setFrom('support@sme4.me');
                                  $mail->FromName = 'CAC Registration';
                                  //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                                  $mail->addAddress();               // Name is optional
                                  $mail->addReplyTo('support@sme4.me', 'CAC Registration');
                                  //$mail->addCC('cc@example.com');
                                  // $mail->addBCC('bcc@example.com');

                                  //$mail->addAttachment($attachment);         // Add attachments
                                  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                  $mail->isHTML(true);                                  // Set email format to HTML

                                  $mail->Subject =  "CAC Registration";
                                  $mail->Body    = "Thanks for signing up!
                                                      Your account has been created, you can login have activated your account by pressing the url below.
                                                      ".$_SERVER['HTTP']."/verify.php?email=".$email."&hash=".$hash;
                                  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                  if(!$mail->send()) {
                                      echo 'Message could not be sent.';
                                      echo 'Mailer Error: ' . $mail->ErrorInfo;

                                  } else {
                                      echo "<script>window.location='../client/login.php';</script>";
                                      echo "<div class='alert alert-success'>
                                            <strong>Registration Successful!</strong> Login to your mail and verify your account to continue.
                                          </div>";
                                  }


                              }
                              else{
                                  echo 'use a valid email address';
                              }
                          }
                      catch(Exception $e){

                            echo 'Please Register or Sign in to continue';
                      }

                  }
                  else{
                      echo "Please Register or Sign in to continue";
                  }

              break;

        case 'registrar_login':

          # code...
          if(isset($_POST['submit'])){
            $username = strip_tags($_POST['username']);
            $passwd = md5(strip_tags($_POST['password']));

            $sql = "SELECT * FROM User WHERE username = :user AND password = :pass"; // AND IsActive = 1";
            $values = array(':user' => $username, ':pass' => $passwd);
            $data = $cacreg->select_query($sql,$values);



            if($data){

              $_SESSION['regid'] = 123456;
              
              foreach ($data as $val){
                  $_SESSION['firstname'] = $val['Firstname'];
                  $_SESSION['lastname'] = $val['Lastname'];
                  $_SESSION['username'] = $val['Username'];
                  $_SESSION['id'] = $val['id'];
                  $_SESSION['email'] = $val['Email'];
              }

                echo "<script>window.location='../registrar/index.php';</script>";
            }
            else{
                echo  "<script>window.location='../client/login.php';</script>";
                echo  "<div class='alert alert-danger'>
                  <strong>Oh snap!</strong> Something went wrong.
                </div>";
            }
          }
          break;


          case 'login':

            # code...
            if(isset($_POST['submit'])){
              $username = strip_tags($_POST['username']);
              $passwd = md5(strip_tags($_POST['password']));

              $sql = "SELECT * FROM User WHERE username = :user AND password = :pass"; // AND IsActive = 1";
              $values = array(':user' => $username, ':pass' => $passwd);
              $data = $cacreg->select_query($sql,$values);

              if($data){
                foreach ($data as $val){
                    $_SESSION['firstname'] = $val['Firstname'];
                    $_SESSION['lastname'] = $val['Lastname'];
                    $_SESSION['username'] = $val['Username'];
                    $_SESSION['id'] = $val['id'];
                    $_SESSION['email'] = $val['Email'];
                }

                  echo "<script>window.location='../client/index.php';</script>";
              }
              else{
                  echo  "<script>window.location='../client/login.php';</script>";
                  echo  "<div class='alert alert-danger'>
                    <strong>Oh snap!</strong> Something went wrong.
                  </div>";
              }
            }
            break;

        case 'bizsearch':
              if($_SESSION['charge'] == 'N500.00'){
                  # code...
                  if($_POST['payauth']){
                    $email = $_SESSION['email'];
                    $regnum = rand(100000, 999999);
                    $bizname1 = strip_tags($_SESSION['bizname1']);
                    $bizname2 = strip_tags($_SESSION['bizname2']);
                    $bizname3 = strip_tags($_SESSION['bizname3']);
                    $availability = 0;
                    $paytoken = md5(rand(1, 50000) . $_SESSION['charge']);

                    // for(i = 1; i < 3; i++){

                    $sql = "INSERT INTO name_search(Email, RegNumber, BizName, SerialNum, IsAvailable, PaymentToken) VALUES(:email, :regnum, :bizname, :serialnum, :avail, :paytoken)";
                    $values = array(':email' => $email,
                      ':regnum' => $regnum,
                      ':bizname' => $bizname1,
                      ':serialnum,' => 1,
                      ':avail' => $availability,
                      ':paytoken' => $paytoken
                    );
                    $data1 = $cacreg->insert_query($sql, $values);

                  // }

                    $sql = "INSERT INTO name_search (Email, RegNumber, BizName, SerialNum, IsAvailable, PaymentToken) VALUES(:email, :regnum, :bizname, :serialnum, :avail, :paytoken)";
                    $values = array(':email' => $email,
                      ':regnum' => $regnum,
                      ':bizname' => $bizname1,
                      ':serialnum,' => 2,
                      ':avail' => $availability,
                      ':paytoken' => $paytoken
                    );
                    $data2 = $cacreg->insert_query($sql, $values);

                    $sql = "INSERT INTO name_search (Email, RegNumber, BizName, SerialNum, IsAvailable, PaymentToken) VALUES(:email, :regnum, :bizname, :serialnum, :avail, :paytoken)";
                    $values = array(':email' => $email,
                      ':regnum' => $regnum,
                      ':bizname' => $bizname1,
                      ':serialnum,' => 3,
                      ':avail' => $availability,
                      ':paytoken' => $paytoken
                    );
                    $data3 = $cacreg->insert_query($sql, $values);

                    if($data1 && $data2 && $data3){

                        echo "<script>window.location='../client/index.php';</script>";
                        echo  "<div class='alert alert-success'>
                          <strong>Payment Successful!</strong>.
                        </div>";
                    }

                  }
              }
              elseif ($_SESSION['charge'] == 'N15,000.00') {
                # code...
                if($_POST['payauth']){

                  // $target = '../uploads/';
                  //
                  // $target = $target . basename($_FILES['upload']['name']);
                  //
                  // $filename = basename($_FILES['upload']['name']);
                  //
                  // move_uploaded_file($_FILES['upload']['tmp_name'], $target);


                  $email = $_SESSION['email'];
                  $bizname = $_SESSION['bizname'];
                  $regnum = $_SESSION['regnum'];
                  $firstname = strip_tags($_SESSION['fname']);
                  $lastname = strip_tags($_SESSION['lname']);
                  $address = strip_tags($_SESSION['address']);
                  // $upload = NULL;
                  $status = 0;
                  $registrarid = strip_tags($_SESSION['regid']);
                  $paytoken = md5(rand(1, 50000) . $_SESSION['charge']);


                  $sql = "INSERT INTO registration(Email, LastName, FirstName, Address, RegistrarId, BizName, Status, RegNumber, Paytoken)
                  VALUES(:email, :lname, :fname, :address, :regid, :bizname, :status, :regnum :paytoken)";
                  $values = array(':email' => $email,
                    ':lname' => $lastname,
                    ':fname' => $firstname,
                    ':address' => $address,
                    ':regid' => $registrarid,
                    ':bizname' => $bizname,
                    ':status' => $status,
                    ':regnum' => $regnum,
                    ':paytoken' => $paytoken
                  );
                  $data = $cacreg->insert_query($sql, $values);


                  if($data){
                    $id = $_SESSION['id'];
                    $sqlst = "UPDATE name_search SET registered = 1 WHERE id = :id";
                    $val = array(':id' => $id);
                    $updated = $cacreg->update_value($sqlst, $val);

                      //echo "<script>window.location='../client/index.php';</script>";
                      echo  "<div class='alert alert-success'>
                        <strong>Payment Successful!</strong>.
                      </div>";
                  }

                }
              }

          break;

        case 'namesearch':
          # code...
          if (isset($_POST['search'])) {
            # code...
            $_SESSION['bizname1'] = $_POST['bizname1'];
            $_SESSION['bizname2'] = $_POST['bizname2'];
            $_SESSION['bizname3'] = $_POST['bizname3'];
            $_SESSION['charge'] = $_POST['charge'];

            echo "<script>window.location='../client/payment.php';</script>";
          }
          elseif(isset($_POST['submit'])){
            $_SESSION['charge'] = NULL;
            $_SESSION['charge'] = $_POST['charge'];

            echo "<script>window.location='../client/payment.php';</script>";
          }
          break;

        case 'bizreg':
          # code...
            if (isset($_POST['reg2'])) {
              # code...
              echo "<script>window.location='../client/payment.php';</script>";
            }
          break;

        case 'not_in_use':
          # code...
                if (isset($_POST['submit'])) {
                  # code...
                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $regnum = $_SESSION['regnum'];
                    $email = $_SESSION['email'];
                    $bizname = $_POST['bizname'];
                    $upload = $_POST['upload'];
                    $address = $_POST['address'];
                    $registrar = $_POST['regid'];
                    $status = 0;
                    $sql = "INSERT INTO registration (BizName, RegNumber, FirstName, LastName, Email, Address, IdUpload, RegistrarId, Status) VALUES(:bizname, :regnum, :fname, :lname, :email, :addess, :upload; :registrar, :status)";
                    $values = array(':bizname' => strip_tags($bizname),
                    ':regnum' => strip_tags($regnum),
                    ':fname' => strip_tags($firstname),
                    ':lname' => strip_tags($lastname),
                    ':email' => strip_tags($email),
                    ':address' => strip_tags($address),
                    ':upload' => $upload,
                    ':registrar' => $registrar,
                    ':status' => $status);
                    $data = $cacreg->insert_query($sql, $values);
                }
          break;

        default:
          # code...
          break;
      }
}
?>

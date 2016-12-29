<?php
        class sessions{

            // when logged in, insert user session_id into session table
        public static function insert_session($sessionid, $email, $time, $date, $afrigrad){
              $sql = "INSERT INTO sessions(SetTime, SetDate, SessionKey, Email) VALUES(:settime, :setdate, :session, :email)";
              $values = array(':settime' => $time, ':setdate' => $date, ':session' => $sessionid, ':email' => $email);
              $data = $afrigrad->insert_query($sql, $values);
              return $data;
            }

        public static function update_session($time, $email, $afrigrad){
              $sql = "UPDATE sessions SET SetTime = :settime WHERE Email = :email";
              $values = array(':settime' => $time, ':email' => $email);
              $data = $afrigrad->update_query($sql, $values);
            }

        public static function select_session($email, $afrigrad){
              $sql = "SELECT * FROM sessions WHERE Email = :email";
              $values = array(':email' => $email);
              $data = $afrigrad->select_query($sql, $values);
              return $data;
            }

        public static function delete_session($field, $afrigrad){
              $sql = "DELETE FROM sessions WHERE Email = :email";
              $values = array(':email' => $_SESSION[$field]);
              $data = $afrigrad->update_query($sql, $values);
              return $data;
            }

          public static function sec_session_start() {
              $sessionname = "sec_session_name";   // Set a custom session name
              $secure = true;
              // // This stops JavaScript being able to access the session id.
              $httponly = true;

              $lifetime = time() + (1 * 5); //30 minutes
              $rootdomain = 'localhost';
              // // Forces sessions to only use cookies.
              if (ini_set('session.use_only_cookies', 1) === FALSE) {
                  header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
                  exit();
              }
              // Gets current cookies params.
              $cookieParams = session_get_cookie_params();

              // session_set_cookie_params($lifetime,
              // $cookieParams["path"],
              // $cookieParams['domain'],
              // $secure,
              // $httponly);



              // Sets the session name to the one set above.
              session_name($sessionname);
              session_start();            // Start the PHP session
              // session_regenerate_id(true);    // regenerated the session, delete the old one.

              // setcookie(session_name(),session_id(),time()+$lifetime);
        }

        public static function auto_logout($field, $email, $afrigrad){
              $t = time();
              $t0 = $_SESSION[$field];
              $diff = $t - $t0;
              if ($diff > 600 || !isset($t0))
              {
                  return true;
              }
              else
              {
                  $_SESSION[$field] = time();
                  self::update_session($_SESSION[$field], $email, $afrigrad);
              }
        }

        public static function start_session(){
              $sessionanme = 'sec_session_name';
              session_name($sessionanme);
              session_start();
        }
      }
?>

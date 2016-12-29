<?php
    function sec_session_start() {
        $sessionname = "sec_session_id";   // Set a custom session name
        $secure = true;
        // // This stops JavaScript being able to access the session id.
        $httponly = true;

        $lifetime = time() + (1 * 5); //30 minutes
        $rootdomain = DOMAIN;
        // // Forces sessions to only use cookies.
        if (ini_set('session.use_only_cookies', 1) === FALSE) {
            header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
            exit();
        }
        // Gets current cookies params.
        $cookieParams = session_get_cookie_params();

        // session_set_cookie_params($lifetime,
        // $cookieParams["path"],
        // $rootdomain,
        // $secure,
        // $httponly);



        // Sets the session name to the one set above.
        session_name($sessionname);
        session_start();            // Start the PHP session
        // session_regenerate_id(true);    // regenerated the session, delete the old one.

        // setcookie(session_name(),session_id(),time()+$lifetime);
    }

?>

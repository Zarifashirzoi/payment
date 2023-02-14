<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit;
?>
This code starts the session, unsets all session variables, destroys the session cookie, and finally destroys the session. The ini_get("session.use_cookies") function checks if the session is using cookies. If it is, the session_get_cookie_params() function retrieves the parameters of the current session cookie and setcookie() function destroys the session cookie by setting its value to an empty string and making it expire in the past. The header() function then sends a raw HTTP header to redirect the user to the login page and exit terminates the script execution.

Note that this code assumes that you have already started a session on your website and have a login page at login.php. You may need to modify this code to fit the specific needs of your website.





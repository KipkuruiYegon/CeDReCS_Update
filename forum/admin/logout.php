<?php
//start session
session_start();

//destroty the session.
if (session_destroy()) {
    //redirect to login
    header("location: index.php");
}
?>
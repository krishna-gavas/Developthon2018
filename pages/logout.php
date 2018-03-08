<?php
/* Log out process, unsets and destroys session variables */
/*and redirects to login page*/

session_start();
session_unset();
session_destroy();
header('Refresh:0;url=../index.php');

?>

﻿<?php
/**
 * The logout file
 * destroys the session
 * expires the cookie
 * redirects to index.php
 */
//session_start();
//session_destroy();
setcookie('username', '', time() - 1*24*60*60);
setcookie('password', '', time() - 1*24*60*60);
header("location: ../index.php");
?>
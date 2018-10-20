<?php

if (!defined('HOST')) define("HOST", "localhost"); // The host you want to connect to.
if (!defined('USER')) define("USER", "root"); // The database username.
if (!defined('PASSWORD')) define("PASSWORD", ""); // The database password.
if (!defined('DATABASE')) define("DATABASE", "atul"); // The database name.
if (!defined('PORT')) define("PORT", 3306);

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a param
?>

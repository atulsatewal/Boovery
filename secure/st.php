<?php
require ('db_connect.php');
echo "connected using require";
/*define("HOST", "localhost"); // The host you want to connect to.
define("USER", "root"); // The database username.
define("PASSWORD", "123456"); // The database password. 
define("DATABASE", "youngman_qb"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);*/
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.



/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Success... ' . $mysqli->host_info . "\n";
/*

$q = "SELECT username FROM members";

if($stmt = $mysqli->prepare($q)){
    echo "<br>Prepared<br>";
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($username);
}else echo $mysqli->error;

while($stmt->fetch()){
    echo "<br>".$username;
}


$mysqli->close();
*/

echo "Hello<br>";
$email = "vikas@gmail.com";
if ($stmt = $mysqli->prepare("SELECT id, username FROM members WHERE email = ? LIMIT 1")) { 
      $stmt->bind_param('s', $email); // Bind "$email" to parameter.
      $stmt->execute(); // Execute the prepared query.
      $stmt->store_result();
      $stmt->bind_result($user_id, $username); // get variables from result.
      $stmt->fetch();
}else echo $mysqli->error;

echo "user id :".$user_id."<br>";
echo "username :".$username."<br>";

?>
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'kbp2_users2');

// define('DB_SERVER', 'sql111.epizy.com');
// define('DB_USERNAME', 'epiz_30424908');
// define('DB_PASSWORD', 'gtwED1WwFlM');
// define('DB_NAME', 'epiz_30424908_kbp_cred');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
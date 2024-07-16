
<?php
// Setting output buffer
 ob_start();
if(!session_start()){
    session_start();
}
// Error Handling
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
// constant database
define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_livesystem');
define('DB_USER', 'u471974205_livesystem');
define('DB_PASS', '1bf#xLyAvD#');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);

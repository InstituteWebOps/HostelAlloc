<?php
//http://codular.com/php-pdo-how-to

// $dsn = 'mysql:dbname=room_allocation;host=students.iitm.ac.in;'; //omitting the port=3306
$dsn = 'mysql:dbname=room_allocation;host=localhost;'; //omitting the port=3306
$username = 'root';
// $password = 'wmo_16_17';
$password = '12017';
try {
$db = new PDO($dsn, $username, $password, array (
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
echo("Connected!");
} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}

?>
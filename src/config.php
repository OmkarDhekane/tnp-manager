<?php

$username = 'root';
$password = ''; //push db password
$db_name = 'tnp_manager';
$success = 'user saved sucessully!';
$error=  'error in saving data!';

try {
    $db = connect ($db_name, $username, $password);
    // echo 'Connected to database';

} catch(PDOException $e) {
    echo $e->getMessage();
}


function connect ($db_name, $username, $password){
    // $dbh = new PDO("mysql:host=$hostname;dbname=removed", $username, $password);
    // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db  = new PDO("mysql:host=localhost;port=3308;dbname=$db_name",$username, $password);
    return $db;
}

?>
<?php

$db_user = 'root';
$db_password = '';
$db_name = "tnp_manager";

$db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8mb4',$db_user,$db_password);

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

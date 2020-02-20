<?php
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "sms_app");

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$con){
    exit();
}

return $config = [

    'account_sid'=> 'ID',
    'auth_token'=> 'Token',
    'phone_number'=> '+19518214609'

];


?>

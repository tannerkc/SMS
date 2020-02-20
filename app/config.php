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

    'account_sid'=> 'AC5d953904dffb7dc824532ece52c5b450',
    'auth_token'=> '75d27672f8fe5bf0512ade6e3097c2cc',
    'phone_number'=> '+19518214609'

];


?>
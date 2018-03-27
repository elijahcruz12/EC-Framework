<?php
//Login.php
$admin['username'] = "admin";
$admin['hashpass'] = password_hash("qwaszx12", PASSWORD_DEFAULT);

$json = json_encode($admin);

echo $json;
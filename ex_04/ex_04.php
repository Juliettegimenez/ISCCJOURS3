<?php
function my_password_hash (string $password) {
$salt = uniqid();
$mdpsalt = $salt.$password;
$mdpencript = md5($mdpsalt);

$array = array ();
$array["hash"] = $mdpencript;
$array["salt"] = $salt;
return $array;
}

function my_password_verify ($password, $salt, $hash){
    $mdpencript = md5($salt.$password);
    if ($mdpencript == $hash)
    return true;
    else
    return false; 
}
?>
<?php
include "Db.php";
echo "<pre>";
var_dump($_POST);
 



if ($_POST) {

$loginFromInput=$_POST['login'];
$passwordFromInput=$_POST['password'];
$userNameFromInput=$_POST['userName'];

    $db = new Db();

    $db->setQuery("SELECT * FROM `users` WHERE `login` = '$loginFromInput'");

    if ($db->getNumRows()) {
     
        $res=$db->getObject();
        var_dump($res);
    }

    else {
        $db->setQuery("INSERT INTO `users`(`login`, `password`, `fio`) VALUES ('$loginFromInput','$passwordFromInput','$userNameFromInput')");
        echo "User '$loginFromInput' was add";
    }
}
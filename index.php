<?php
require_once 'config/database.php';
require_once 'controllers/UserController.php';


if (isset($pdo)){
$controller = new UserController($pdo);
}else {
    die('blablablablabalbla');
}

$action = $_GET['action'];
echo "sadfasdfasdfasd";
//switch ($action)


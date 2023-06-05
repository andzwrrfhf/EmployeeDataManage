<?php
include_once("controllerData.php");
$controller = new createData();
$controller->invoke();
?>

<?php
require_once 'controllerData.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];

    $controller = new UserController();
    $controller->login($id, $password);
} else {
    include 'login.php';
}
?>
<?php

require '../include/Connection.php';
if (empty($_SESSION['idAdmin'])){
    header("Location:index.php");
    exit;
}else{
require '../include/class/AdminClass.php';

$classAdmin = new AdminClass($pdo);
$adminId = $_SESSION['idAdmin'];

$dataAdmin = $classAdmin->dataloginAdmin($adminId);

$firstname = $dataAdmin->first_name;
$lastname = $dataAdmin->last_name;
}

?>
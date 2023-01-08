<?php
require_once "models/car.php";
require_once "controllers/carController.php";

$ctr = $_GET['ctr'] ?? '';
switch($ctr){
    case '':
    case 'home':
        carIndex();
        break;
    case 'addCar':
        addCar();
        break;
    case 'deleteCar':
        deleteCar();
        break;
    case 'editCar':
        editCar();
    case 'getCarById':
        getCarById();
        break;
}
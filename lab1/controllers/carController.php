<?php

function carIndex()
{
    $cars = getData("SELECT * FROM car");
    include "views/home.php";
}

function addCar()
{
    if (isset($_POST['btnAdd'])) {
        $carName = $_POST['carName'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $version = $_POST['version'];
        $gear = $_POST['gear'];
        $origin = $_POST['origin'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);

        $sql = "INSERT INTO car(carName, image, price, description, version, gear, origin) Values('$carName','$image','$price','$description', '$version','$gear','$origin')";
        exeQuery($sql);
        header("location:?ctr=home");
        die;
    }
}

function deleteCar()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM car WHERE id = $id";
    exeQuery($sql);
    header("location:?ctr=home");
    die;
}
function getCarById()
{
    $id = $_GET['id'];
    $car = getData("SELECT * FROM car WHERE id = $id");
    include "views/edit.php";

}

function editCar()
{
    $carName = $_POST['carName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $version = $_POST['version'];
    $gear = $_POST['gear'];
    $origin = $_POST['origin'];

    $sql = "UPDATE car SET carName = $carName, price=$price, description = $description, version = $version, gear = $gear, origin = $origin";
    exeQuery($sql);
    header("location:?ctr=home");
    die;
}
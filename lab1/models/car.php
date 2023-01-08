<?php

function connection(){
    try{
        $conn = new PDO("mysql:host=localhost;dbname=lab1;charset=utf8", "root", "");
        return $conn;
    }catch(PDOException $e){
        echo "loi ket noi" . $e->getMessage();
    }
}

function getData($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function exeQuery($sql){
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
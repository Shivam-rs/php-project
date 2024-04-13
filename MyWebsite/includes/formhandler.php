<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);
    if(empty($firstName) || empty($lastName) || empty($favoritepet)){
        header("Location: ../index.php");
    }
    echo "These are the data user entered:";
    echo "<br>";
    echo $favoritepet;
}else{
    header("Location: ../index.php");
}
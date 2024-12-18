<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "chefcuisinier"

$conn = new mysqli($host,$user,$password,$dbname);

if(!$conn){
    echo "Connexion impossible";
}
<?php
if (isset($_GET['nom'])){
    $nom =$_GET['nom'];
    echo $nom."<br>";
}
if (isset($_GET['prenom'])){
    $prenom =$_GET['prenom'];
    echo $prenom."<br>";
}
if (isset($_GET['age'])){
    $age =$_GET['age'];
    echo $age."<br>";
}
echo '<pre>';
print_r($_GET);
var_dump($_GET);

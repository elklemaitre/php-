<?php
if (isset($_POST['nom'])){
    $nom =$_POST['nom'];
    echo $nom."<br>";
}
if (isset($_POST['prenom'])){
    $prenom =$_POST['prenom'];
    echo $prenom."<br>";
}
if (isset($_POST['age'])){
    $age =$_POST['age'];
    echo $age."<br>";
}
echo '<pre>';
print_r($_POST);

var_dump($_POST);


# Learn to sanatize data to protect from injection
<!DOCTYPE html>
<html>
<head>
    <title>Tableau à Deux Dimensions en PHP</title>
</head>
<body>

<?php
$tableau = [
    ["prenom" => "Alice", "nom" => "Dupont"],
    ["prenom" => "Bob", "nom" => "Martin"],
    ["prenom" => "Charlie", "nom" => "Durand"]
];

echo "<table border='1'>";
echo "<tr>";
foreach(array_keys($tableau[0]) as $entete) {
    echo "<th>$entete</th>";
}
echo "</tr>";

foreach($tableau as $ligne) {
    echo "<tr>";
    foreach($ligne as $valeur) {
        echo "<td>$valeur</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>




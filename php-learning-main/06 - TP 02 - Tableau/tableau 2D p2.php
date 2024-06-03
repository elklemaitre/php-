<!DOCTYPE html>
<html>
<head>
    <title>Exercices PHP</title>
</head>
<body>

<?php
// Objectif 1
$entiers = range(0, 63);

echo "<h2>Objectif 1</h2>";
echo "<table border='1'>";
echo "<tr><th>Indice</th><th>Valeur</th></tr>";
foreach ($entiers as $indice => $valeur) {
    echo "<tr><td>$indice</td><td>$valeur</td></tr>";
}
echo "</table>";

// Objectif 2
$nombres = [];
for ($i = 0; $i <= 63; $i++) {
    $nombres[] = $i / 10;
}

echo "<h2>Objectif 2</h2>";
echo "<table border='1'>";
echo "<tr><th>Indice</th><th>Valeur</th></tr>";
foreach ($nombres as $indice => $valeur) {
    echo "<tr><td>$indice</td><td>$valeur</td></tr>";
}
echo "</table>";

// Objectif 3
$sinus = [];
foreach ($nombres as $x) {
    $sinus[(string)$x] = sin($x);
}

echo "<h2>Objectif 3</h2>";
echo "<table border='1'>";
echo "<tr><th>X</th><th>sin(X)</th></tr>";
foreach ($sinus as $x => $valeur) {
    echo "<tr><td>$x</td><td>$valeur</td></tr>";
}
echo "</table>";

// Objectif 4
$emails = [
    "hello@sfr.fr", "marc@sfr.fr", "estelle@sfr.fr", "caroline@sfr.fr",
    "hello@orange.fr", "goodbye@orange.fr", "justine@orange.fr",
    "hello@free.fr", "bob@free.fr"
];

$fournisseurs = [];
foreach ($emails as $email) {
    $domaine = substr(strrchr($email, "@"), 1);
    if (isset($fournisseurs[$domaine])) {
        $fournisseurs[$domaine]++;
    } else {
        $fournisseurs[$domaine] = 1;
    }
}

// Affichage des occurrences
echo "<h2>Objectif 4: Occurrences</h2>";
echo "<table border='1'>";
echo "<tr><th>Indice</th><th>Valeur</th></tr>";
foreach ($fournisseurs as $domaine => $occurrences) {
    echo "<tr><td>@$domaine</td><td>$occurrences</td></tr>";
}
echo "</table>";

// Affichage des pourcentages
$totalEmails = count($emails);
echo "<h2>Objectif 4: Pourcentages</h2>";
echo "<table border='1'>";
echo "<tr><th>Indice</th><th>Valeur</th></tr>";
foreach ($fournisseurs as $domaine => $occurrences) {
    $pourcentage = ($occurrences / $totalEmails) * 100;
    echo "<tr><td>@$domaine</td><td>" . number_format($pourcentage, 2) . "%</td></tr>";
}
echo "</table>";
?>

</body>
</html>

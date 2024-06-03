<html> lang="en

<head>
    <meta name="viewport" content="widh=device-width" , initial-scale="1.0">
    <title>PHP</title>

</head>

<body>
    <php? $age=19; ?>
        <h1> Entrez Casino</h1>
        <?php if ($age >= 18) { ?>
            <h1>Vous êtes autorisé à entrer dans le casino</h1>
        <?php } else { ?>
            <h1>Non autorisé <?= $age ?></h1>
        <?php } ?>

        <?php if ($age >= 18): ?>
            <h1>Ok</h1>
        <?php else: ?>
            <h1>Non autorisé</h1>
        <?php endif; ?>

        }
</body>

</html>
<?php
    require_once('./src/produits.inc.php');
    session_start();
    $commande = $_SESSION['commande'];

    /** INSERTION DES RETOURS DES FONCTIONS SUR CETTE PAGE **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Order Result</title>
</head>
<body>
    <main>
        <section>
            <h2>Votre Commande du <?php print $_SESSION['time']?></h2>
            <h3>Détail de votre commande:</h3>
            <p>Nombre de produits: <?php print $commande->getNbProduits();?></p>
            <ul>
                <li><?php print $commande->getTablettes()?> : Tablettes</li>
                <li><?php print $commande->getPc()?> : PC</li>
                <li><?php print $commande->getPortable()?> : Portables</li>
            </ul>
            <p>Le total de votre commande est de : <?php print $commande->getPrix()?>€ (<?=$commande->getPrixHT()?>€ HT)</p>
            <p>Adresse : <i><?php print $commande->getAdresse();?></i></p>
        </section>
    </main>
</body>
</html>
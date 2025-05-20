<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 3</title>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    $connexionOk = false;

    if (isset($_POST['nomConnexion']) && isset($_POST['motDePasse'])) {
        $nom = $_POST['nomConnexion'];
        $mdp = $_POST['motDePasse'];

        if ($nom === "sanaya" && $mdp === "bio") {
            $connexionOk = true;
        }
    }
    ?>

    <h5>
        <?php
        if ($connexionOk) {
            echo " Administrateur connecté.";
        } else {
            echo " Connexion refusée.";
        }
        ?>
    </h5>

    <?php
    if ($connexionOk) {
        echo '<a href="authentification.html">Déconnexion</a>';
    } else {
        echo '<a href="authentification.html">Retour au formulaire</a>';
    }
    ?>

</body>
</html>

<?php
echo "<h1>Récapitulatif de votre demande</h1>";

if (isset($_POST['civilite']) && $_POST['civilite'] !== "") {
    echo "<p><strong>Civilité :</strong> " . $_POST['civilite'] . "</p>";
}

if (isset($_POST['nom']) && $_POST['nom'] !== "") {
    echo "<p><strong>Nom :</strong> " . $_POST['nom'] . "</p>";
} else {
    echo "<p style='color:red;'>Nom :</p>";
}

if (isset($_POST['prenom']) && $_POST['prenom'] !== "") {
    echo "<p><strong>Prénom :</strong> " . $_POST['prenom'] . "</p>";
} else {
    echo "<p style='color:red;'>Prénom :</p>";
}

if (isset($_POST['numero']) && $_POST['numero'] !== "") {
    echo "<p><strong>Numéro :</strong> " . $_POST['numero'] . "</p>";
} else {
    echo "<p style='color:red;'>Numéro :</p>";
}

if (isset($_POST['email']) && $_POST['email'] !== "") {
    echo "<p><strong>Email :</strong> " . $_POST['email'] . "</p>";
} else {
    echo "<p style='color:red;'>Email :</p>";
}

if (isset($_POST['raison']) && $_POST['raison'] !== "") {
    echo "<p><strong>Raison :</strong> ";
    foreach ($_POST['raison'] as $_POST['r']) {
        echo $_POST['r'] . " ";
    }
    echo "</p>";
}

if (isset($_POST['reponse']) && $_POST['reponse'] !== "") {
    echo "<p><strong>Mode de réponse :</strong> ";
    foreach ($_POST['reponse'] as $_POST['r']) {
        echo $_POST['r'] . " ";
    }
    echo "</p>";

    if (in_array("telephone", $_POST['reponse']) && isset($_POST['date_tel']) && $_POST['date_tel'] !== "") {
        echo "<p><strong>Date de rappel souhaitée :</strong> " . $_POST['date_tel'] . "</p>";
    }
}

if (isset($_POST['message']) && $_POST['message'] !== "") {
    echo "<p><strong>Message complémentaire :</strong><br>" . $_POST['message'] . "</p>";
}
?>

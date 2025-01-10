<!DOCTYPE html>
<html lang="fr">

<head>
    <h1>INFORMATIONS PERSONNELS</h1>

</head>


<body>

<?php

    $nom = $_POST["user_name"];
    $prenom = $_POST["user_prename"];
    $email = $_POST["user_email"];
    $datenai = $_POST["datedenaissance"];


echo "Nom : " .$nom. "<br>";
echo "prenom : " .$prenom. "<br>";
echo "email : " .$email. "<br>";
echo "date de naissance : " .$datenai. "<br>"


?>

</body>
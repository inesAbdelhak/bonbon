<?php
$nom_image = basename($_FILES["image"]['name']);
$chemin_destination = 'images/' . $nom_image;
$resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin_destination);

?>
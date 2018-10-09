<?php
/**
 * Created by PhpStorm.
 * User: nuand
 * Date: 09/10/2018
 * Time: 20:34
 */
include "connex.php";

$titre =  $_POST['titre'];
$auteur = $_POST['auteur'];
$content = $_POST['contenu'];

$sql = "INSERT INTO article (titre, contenu, auteur) VALUES ('$titre', '$content', '$auteur')";
$rowadd = $pdo->exec($sql);

echo $sql;
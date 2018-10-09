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

?>

<html>
<body>
<h1>
    <?php
        echo $titre;
    ?>
</h1> <br>
<h2>
    <?php
        echo $auteur;
    ?>
</h2>
</body>
</html>

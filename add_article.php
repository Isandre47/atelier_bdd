<?php
/**
 * Created by PhpStorm.
 * User: nuand
 * Date: 09/10/2018
 * Time: 20:27
 */

include 'connex.php';

?>
<html>
<body>

<form action="listearticle.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="titre" name="titre">
    </div>
    <div>
        <label for="auteur">auteur :</label>
        <input type="text" id="auteur" name="auteur">
    </div>
    <div>
        <label for="msg">Contenu :</label>
        <textarea id="msg" name="contenu"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

</body>
</html>

<?php
$title = "modification";
require_once 'views/layout/header.php';
?>

<!-- modification de la voiture --> 

<<form action="enregistrement.php" method="post">
 <p>Nom de la voiture : <input type="text" name="nom" /></p>
 <p>Année de sortie  : <input type="text" name="sortie" /></p>
 <p>Nombre de kilomètres  : <input type="text" name="miles" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<?php require_once 'views/layout/footer.php'; ?>--
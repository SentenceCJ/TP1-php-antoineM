<?php
$title = "administration";
require_once 'views/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
  <h1>Liste des machines</h1>
  <form method="POST" method="administration.php">
  <input type="checkbox" name="visible" value="visible"> visible<br>
  <input type="checkbox" name="invisible" value="invisible"> invisible<br>
  <form action="modifications.php" method="POST">
  <button type="submit" name="MaJ" class="btn btn-primary">Update</button>
 
  </form>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>
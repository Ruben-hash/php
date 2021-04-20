<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
<script src='information.js'></script>
<title>Utilisation d'Apache</title>
</head>

<body>
  <p>Le serveur Apache fonctionne parfaitement</p>
  <?php
  $heure = date("H:i");
  echo '<h1>Bienvenue sur mon site</h1>
  <p>Il est '.$heure.'</p>';
  ?>

  <form name="insertion" method="get" action="enregistrement.php">

  <p>Nom : <input type="text" name="nom" id="nom"> </p>
  <p>Prenom: <input type="text" name="prenom" id="pass"> </p>
    <p>numero de  téléphone : <input type="text" name="tel" id="pass"> </p>
  <p><input type="submit" /><input type="reset" /></p>
  
</form>

</body>
</html>

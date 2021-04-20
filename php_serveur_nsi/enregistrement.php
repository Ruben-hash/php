<?php
 $nom=$_GET['nom'];
 $pre=$_GET['prenom'];
$tel=$_GET['tel'];
 echo "<p>Bonjour ".$pre." ".$nom.", j'espère que vous allez bien.<br>votre telephone est le :".$tel."</p>";


$fp = fopen ("contact.txt", "r+");

fputs ($fp,$pre); //il sert à prendre en  compte la variable $pre
fputs ($fp,$nom); //il sert à prendre en  compte la variable $nom

fputs ($fp,$tel); //il sert à prendre en  compte la variable $tel

$contenu_du_fichier = fgets ($fp,255);
fclose($fp);


$ligne="nom :".$nom." prenom :".$pre." tel: ".$tel;
$fp = "contact.txt";
$new = file_get_contents($fp);
$new .= $ligne;
file_put_contents($fp,$new);

$i = 0;
foreach($new as $row)
{
fputs($fp, $row[$i]);
fputs($fp, "\n");
$i++;
}

?>

<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
<title>enregistrement</title>
</head>

<body>

<script>
function myFunction() {
  document.location.href="http://127.0.0.1:8080/edsa-php_serveur_test/";
  alert("vos données sont enregistrées")
}
</script>

<button onclick="myFunction()">finir l'enregistrement </button>

</body>




// JavaScript Document
// Création d'une requête HTTP
var req = new XMLHttpRequest();
// Requête HTTP GET synchrone vers le fichier message.txt publié localement
req.open("GET", "http://127.0.0.1/edsa-bonjour/bonsoir/message.txt", false);
// Envoi de la requête
req.send(null);
// Affiche la réponse reçue pour la requête
console.log(req.responseText);
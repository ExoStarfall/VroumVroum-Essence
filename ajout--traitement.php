<?php

  // récupère les données postées
  $prixLitre   = $_POST["prix-au-litre"] ?? false;
  $volumePlein = $_POST["volume-plein"] ?? false;
  $kmParcourus = $_POST["kilometres-parcourus"] ?? false;
  $temps = 182.5*24*3600;

  // affiche un message si un champ n'est pas rempli
  if ($prixLitre == false OR $volumePlein == false OR $kmParcourus == false) exit("merci de renseigner tous les champs");
  // calcul à effectuer
  $moyenneLitresAuCent = $volumePlein*100/$kmParcourus;

  // date à cet instant T
  $dateObjet = new DateTime(null, new DateTimeZone("Europe/Paris"));
  $datePlein = $dateObjet->format("Y-m-d H:i:s.u");

  // dépose un nouveau cookie
  $cookieIndex = $dateObjet->format("YmdHisu");
  $cookieContent = "$datePlein|$prixLitre|$moyenneLitresAuCent";
  setcookie("plein[$cookieIndex]", $cookieContent, time( ) + $temps);

  // redirection vers la page d'accueil
  header("Location: index.php");
  exit; // force l'arrêt de ce script après avoir demander la redirection

?>
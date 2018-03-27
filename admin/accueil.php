<?php
session_start();
if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Document sans nom</title>
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">

<p class="soustitre" align="center">Administration - Galerie Saint Martin</p>
<ul>
  <li> <a href="liste_artiste.php" class="titre">Gestion des artistes</a><br>
  </li>
  <li><a href="liste_oeuvre.php?type=1" class="titre">Gestion des tableaux</a><br>
  </li>
  <li><a href="liste_oeuvre.php?type=2" class="titre">Gestions des meubles</a><br>
  </li>
  <li><a href="liste_oeuvre.php?type=3" class="titre">Gestion des objets d'art</a><br>
  </li>
  <li><a href="liste_expo.php" class="titre">Gestion des expositions</a><br>
  </li>
  <li><a href="liste_oeuvre.php?type=5" class="titre">Gestion des curiosit&eacute;s</a></li>
</ul>
</body>
</html>

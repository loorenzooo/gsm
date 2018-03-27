<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	require_once("conn.php");
	
	//recupère le type de liste à afficher : tableaux, meubles, objet d'art, ...
	if(isset($_GET['type'])) $type= $_GET['type'];

	//suppression d'un produit
	if(isset($_GET['idOeuvre']))
	{
		//on recherche d'abord le nom des images correspondant à l'oeuvre pour les supprimer
		//suppresion image
		$sql = "SELECT * FROM oeuvre WHERE id_oeuvre = '".$_GET['idOeuvre']."'";
		$res = $r->sel_once($sql) or die ($r->err." ".$sql);
		
		if($res['img_oeuvre']!="" )
		{
			if(file_exists("../".$repertoire_oeuvre_mini.$res['img_oeuvre']))
				unlink("../".$repertoire_oeuvre_mini.$res['img_oeuvre']);
				if(file_exists("../".$repertoire_oeuvre.$res['img_oeuvre']))
				unlink("../".$repertoire_oeuvre.$res['img_oeuvre']);
		}
		if($res['img2_oeuvre']!="" )
		{
			if(file_exists("../".$repertoire_oeuvre_mini.$res['img2_oeuvre']))
				@unlink("../".$repertoire_oeuvre_mini.$res['img2_oeuvre']);
			if(file_exists("../".$repertoire_oeuvre.$res['img2_oeuvre']))
				@unlink("../".$repertoire_oeuvre.$res['img2_oeuvre']);
		}
		//fin suppression image
		
		//supression ds la base de données
		$sql = "DELETE FROM oeuvre WHERE id_oeuvre = '".$_GET['idOeuvre']."'";
		$r->exe($sql) or die ($r->err." ".$sql);
		//fin suppression dans la base de données
		
		//redirection
		header("Location:liste_oeuvre.php?type=".$_GET['type']);
		
	}
	//fin suppression
?>
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">
<p> <a href="accueil.php">Retour au menu principal</a> <br><br>
<?php
//possibilités de gérer les genres seulement si il ne s'agit ni de curisosité ni d'exposition
if($type!=4 AND $type!=5)
{
?>
  <a href="liste_genre.php?type=<?= $type ?>">Gestion des genres</a>
<?php
}
?> 
<p class="soustitre" align="center">Liste des oeuvres </p>
 <br><a href="form_oeuvre.php?type=<?= $type; ?>">Ajout 
  d'une oeuvre</a><br>
  <?php
//selectionne toutes les genres appartenant à la rubrique $type, classées par genre
$sql = "SELECT * FROM genre WHERE type_genre = '".$type."' ORDER BY nom_genre ASC";
$r->sel($sql) or die($r->err." ".$sql);

//affichage listes des genres
while($res = $r->objFetch())
{

	?>
</p>

<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td class="soustitre">
      <?= $res->nom_genre;?>
    </td>
  </tr>
</table>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  
  <?php
  //selectionne toutes les oeuvres appartenant à la rubrique $type, classées par genre
  $sql2 = "SELECT * FROM oeuvre WHERE genre_oeuvre = '".$res->id_genre."'";
  $r2->sel($sql2) or die($r2->err." ".$sql2);
  
  //affichage de la liste des oeuvres seulement si il yen a
  if($r2->nb_aff>0)
  {
  ?>
	  <tr class="texte"> 
		<td width="485"><strong>Nom de l'oeuvre</strong></td>
		<td width="52" align="center"><strong>Modifier</strong></td>
		<td width="63" align="center"><strong>Supprimer</strong></td>
	  </tr>
	<?php
	  while($res2 = $r2->objFetch())
	  {
	 ?>
	  <tr bgcolor="#FFFFFF"> 
		<td class="texte"> 
		  <?= $res2->nom_oeuvre." ".$res2->desc_oeuvre; ?>
		</td>
		<td align="center"><a href="form_oeuvre.php?idOeuvre=<?= $res2->id_oeuvre; ?>&type=<?= $type; ?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
		<td align="center"><a href="liste_oeuvre.php?idOeuvre=<?= $res2->id_oeuvre; ?>&type=<?= $type; ?>"><img src="../images/del.gif" width="16" height="16" border="0"></a></td>
	  </tr>
	  <?php
	  } 
  }
  //fin affichage liste des oeuvres
  //si il n'y ap as d'oeuvre d'enregistrée on affiche un message d'erreur
  else
  {
  		echo "Il n'y a pas d'oeuvre d'enregistrées";
  }
 $r2->free();
  
  
  ?>
</table>
<br>
<?php
}
$r->free();
//fin affichage liste des genres
?>
</body>
</html>

<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	
	require_once("conn.php");
	
	//recupère pour le retour le type de liste à afficher : tableaux, meubles, objet d'art, ...
	if(isset($_GET['type'])) $type= $_GET['type'];
	
	//suppression d'un genre
	if(isset($_GET['idGenre']))
	{
		//on verifie si il y a des oeuvres ebregistrées dans le genre
		$sql = "SELECT * FROM oeuvre WHERE genre_oeuvre = '".$_GET['idGenre']."'";
		$r-> sel($sql) or die ($r->err." ".$sql);
		
		//si il ya des oeuvres qui appartiennent au genre on affiche un msg d'erreur
		//et on ne supprime pas
		if($r->nb_aff>0)
		{
		?>
			<script language="JavaScript">
				alert("Il existe des oeuvres appartenant au genre que vous souhaitez supprimer. Veuillez d'abord procéder à la suppression des oeuvres puis à la suppression des genres");
			</script>
		<?php
		}
		else
		{
			$r->free();
			//suppression de l'image associée au genre
			if(file_exists("../".$repertoire_genre) AND $res['img_genre']!="" )
				unlink("../".$repertoire_genre.$res['img_oeuvre']);
				
			//suppression dans la table
			$sql = "DELETE FROM genre WHERE id_genre = '".$_GET['idGenre']."'";
			$r-> exe($sql) or die ($r->err." ".$sql);
			
			//redirection
			header("Location:liste_genre.php?type=".$type);
		}
	}
	//fin de suppression d'un genre
	
?>
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">
<p><a href="liste_oeuvre.php?type=<?= $type; ?>">Retour</a><br>

<p class="soustitre" align="center">Liste des genres</p>

<a href="form_genre.php?type=<?= $type; ?>">Ajout d'un genre</a><br>
<br>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr class="texte"> 
	<td width="485"><strong>Nom de l'oeuvre</strong></td>
	<td width="52" align="center"><strong>Modifier</strong></td>
	<td width="63" align="center"><strong>Supprimer</strong></td>
  </tr>
  <?php
  //selectionne toutes les oeuvres appartenant à la rubrique $type, classées par genre
  $sql = "SELECT * FROM genre WHERE type_genre = '".$type."'";
  $r->sel($sql) or die($r->err." ".$sql);
  
  //affichage de la liste des genres seulement si il yen a
  if($r->nb_aff>0)
  {
	  while($res = $r->objFetch())
	  {
	 ?>
  <tr bgcolor="#FFFFFF"> 
	<td class="texte"> 
	  <?= $res->nom_genre; ?>
	</td>
	<td align="center"><a href="form_genre.php?idGenre=<?= $res->id_genre; ?>&type=<?= $type; ?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
	<td align="center"><a href="liste_genre.php?idGenre=<?= $res->id_genre; ?>&type=<?= $type; ?>"><img src="../images/del.gif" width="16" height="16" border="0"></a></td>
  </tr>
  <?php
	  } 
  }
  //fin affichage liste des genres
  //si il n'y ap as de genres d'enregistrés on affiche un message d'erreur
  else
  {
  		echo "Il n'y a pas de genres d'enregistrées";
  }
 $r->free();
  ?>
</table>
</body>
</html>

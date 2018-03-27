<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	require_once("conn.php");
	
	if(isset($_GET['idExpo'])) $idExpo = $_GET['idExpo'];

	$repertoire_expo_mini= "../".$repertoire_expo_mini;
	$repertoire_expo= "../".$repertoire_expo;
	
	//parametrage du tableau d'affichage
	$cpt = 1; 		//image de début
	$nbColonne = 5; //nb de colonne pour laffichage des images
	
	//suppression d'une image
	if(isset($_GET['idOeuvre']))
	{
		//on recherche d'abord le nom des images correspondant à l'oeuvre pour les supprimer
		//suppresion image
		$sql = "SELECT * FROM oeuvre WHERE id_oeuvre = '".$_GET['idOeuvre']."'";
		$res = $r->sel_once($sql) or die ($r->err." ".$sql);
		
		if($res['img_oeuvre']!="" )
		{
			if(file_exists($repertoire_expo_mini.$res['img_oeuvre']))
				unlink($repertoire_expo_mini.$res['img_oeuvre']);
			if(file_exists($repertoire_expo.$res['img_oeuvre']))
				unlink($repertoire_expo.$res['img_oeuvre']);
		}
		//fin suppression image
		
		//supression ds la base de données
		$sql = "DELETE FROM oeuvre WHERE id_oeuvre = '".$_GET['idOeuvre']."'";
		$r->exe($sql) or die ($r->err." ".$sql);
		//fin suppression dans la base de données
		
		//suppression de la correspondance oeuvre/expo base de données
		$sql = "DELETE FROM faire_partie WHERE oeuvre_faire_partie= '".$_GET['idOeuvre']."' AND expo_faire_partie = '".$_GET['idExpo']."'";
		$r->exe($sql) or die ($r->err." ".$sql);
		//fin de suppression de la correspondance oeuvre/expo 
		
		//redirection
		header("Location:gallerie.php?idExpo=".$_GET['idExpo']);
	}
	//fin suppression image

?>
	
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">
<p><a href="liste_expo.php">Retour &agrave; la liste des expositions</a>
<p class="soustitre" align="center">Gallerie</p>
<br>
<a href="form_gallerie.php?idExpo=<?= $idExpo ?>">Ajout d'une photo</a> 
<br><br>
<table align="center" cellspacing="5">
  <?php
	//selectionne les images de la galerie
	$sql = "SELECT * FROM oeuvre, faire_partie WHERE expo_faire_partie = '".$idExpo."' AND oeuvre_faire_partie = id_oeuvre";
	$r->sel($sql) or die($r->err." ".$sql);
	
	//affichage de la liste des sous rubrique
	while($res = $r->fetch())
	{
		
		if($cpt == 1){ ?>
  <tr> <?php } // si c'est le début d'une ligne on ouvre la ligne?>
			
    <td align="center"> 
	
	<?php
	if(isset($res['img_oeuvre']) AND $res['img_oeuvre']!="")
	{
	?><img src="<?= $repertoire_expo_mini.$res['img_oeuvre']; ?>" border="0"> 
	<?php
	}
	?><span class="titre"><br>
      <?=$res["legende_oeuvre"]; ?>
      </span><a href="gallerie.php?idExpo=<?= $idExpo?>&idOeuvre=<?= $res['id_oeuvre']?>"><img src="../images/del.gif" border="0" align="absmiddle"></a><br>
   
	</td>
	<?php
		if($cpt == $nbColonne) 
				{
					echo "</tr>"; //on ferme la ligne
					$cpt = 1;
				}//on ferme la ligne

		 $cpt++; //passe à la colonne suivante
	}
	$r->free();
	//fin affichage de la liste des sous rubrique
	?>
</table>
</body>
</html>

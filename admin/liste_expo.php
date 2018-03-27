<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	
	require_once("conn.php");
	
	if(isset($_GET['idExpo'])) $idExpo = $_GET['idExpo'];
	if(isset($_GET['idArtiste'])) $idExpo = $_GET['idArtiste'];

	$repertoire_expo_mini= "../".$repertoire_expo_mini;
	
	//suppression d'une exposition
	if(isset($_GET['idExpo']))
	{
		//on recherche d'abord le nom de l'image correspondant à l'artiste pour la supprimer
		//suppression image
		$sql = "SELECT * FROM exposition WHERE id_expo = '".$_GET['idExpo']."'";
		$res = $r->sel_once($sql) or die ($r->err." ".$sql);
		
		if($res['img_expo']!="" )
		{
			if(file_exists("../".$repertoire_expo_mini.$res['img_expo']))
				unlink("../".$repertoire_expo_mini.$res['img_expo']);
		}	
		
		//suppression dans la base de l'artiste
		$sql = "DELETE FROM exposition WHERE id_expo = '".$_GET['idExpo']."'";
		$r->exe($sql) or die ($r->err." ".$sql);
		
		//redirection
		header("Location:liste_expo.php");	
	}
?>
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">
<p><a href="accueil.php">Retour au menu principal</a> 
<p class="soustitre" align="center">Liste des expositions</p>
<p><br>
  <a href="form_expo.php">Ajout d'une exposition</a> </p>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr class="texte">
    <td width="9%" class="texte">&nbsp;</td>
    <td width="63%" class="texte">Nom de l'exposition</td>
    <td width="6%" align="center" class="texte">Gallerie</td>
    <td width="7%" align="center" class="texte">Modifier</td>
    <td width="15%" align="center" class="texte">Supprimer</td>
  </tr>
  <?php
$sql = "SELECT * FROM exposition, artiste WHERE artiste_expo = id_artiste ORDER BY artiste_expo";
$r-> sel($sql) or die ($r->err." ".$sql);

while($res = $r->objFetch())
{
?>
  <tr> 
    <td width="9%" class="texte"><img src="<?= $repertoire_expo_mini.$res->img_expo ?>" width="80" height="80"></td>
    <td width="63%" bgcolor="#FFFFFF" class="texte"> 
      <?= ucfirst(strtolower($res->prenom_artiste))." ".strtoupper($res->nom_artiste);?>
    </td>
    <td width="6%" align="center" bgcolor="#FFFFFF"><a href="gallerie.php?idExpo=<?= $res->id_expo;?>&idArtiste=<?= $res->id_artiste?>">voir</a></td>
    <td width="7%" align="center" bgcolor="#FFFFFF"><a href="form_expo.php?idExpo=<?= $res->id_expo;?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
    <td width="15%" align="center" bgcolor="#FFFFFF"><a href="liste_expo.php?idExpo=<?= $res->id_expo;?>"><img src="../images/del.gif" width="16" height="16" border="0"></a></td>
  </tr>
  <?php
}
?>
</table>
<p>&nbsp; </p>
</body>
</html>

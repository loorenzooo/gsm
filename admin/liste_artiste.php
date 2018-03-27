<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	require_once("conn.php");
	
	//suppression d'un artiste
	if(isset($_GET['idArtiste']))
	{
		//on recherche d'abord le nom de l'image correspondant à l'artiste pour la supprimer
		//suppression image
		$sql = "SELECT * FROM artiste WHERE id_artiste = '".$_GET['idArtiste']."'";
		$res = $r->sel_once($sql) or die ($r->err." ".$sql);
		
		if($res['img_artiste']!="" )
		{
			if(file_exists("../".$repertoire_artiste.$res['img_artiste']))
				unlink("../".$repertoire_artiste.$res['img_artiste']);
		}	
		
		//suppression dans la base de l'artiste
		$sql = "DELETE FROM artiste WHERE id_artiste = '".$_GET['idArtiste']."'";
		$r->exe($sql) or die ($r->err." ".$sql);
		
		//redirection
		header("Location:liste_artiste.php");	
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
<p class="soustitre" align="center">Liste des artistes</p>
<br>
<a href="form_artiste.php">Ajout d'un artiste</a><br>
<br>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr class="texte"> 
    <td width="86%" class="texte">Nom de l'artiste</td>
    <td width="7%" align="center" class="texte">Modifier</td>
    <td width="7%" align="center" class="texte">Supprimer</td>
  </tr>
<?php
$sql = "SELECT * FROM artiste WHERE id_artiste!='100' ORDER BY nom_artiste";
$r-> sel($sql) or die ($r->err." ".$sql);

while($res = $r->objFetch())
{
?>
  <tr bgcolor="#FFFFFF"> 
    <td width="86%" class="texte"> 
      <?= $res->prenom_artiste." ".$res->nom_artiste;?>
    </td>
    <td width="7%" align="center"><a href="form_artiste.php?idArtiste=<?= $res->id_artiste;?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
    <td width="7%" align="center"><a href="liste_artiste.php?idArtiste=<?= $res->id_artiste;?>"><img src="../images/del.gif" width="16" height="16" border="0"></a></td>
  </tr>
<?php

}
?>
</table>
</body>
</html>

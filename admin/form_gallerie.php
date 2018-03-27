<?php
session_start();
if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");

require_once("conn.php");
require_once("inc_photo.php");
	
$repertoire_expo = "../".$repertoire_expo;
$repertoire_expo_mini = "../".$repertoire_expo_mini;

//insertion de l'oeuvre
if(isset($_POST['ajout']))
{
		$img = $_FILES['image']['name'];

		// tableau photos des oeuvres 
		$data[1]['repertoire'] = $repertoire_expo;
		$data[1]['aspect'] = 1;
		$data[1]['sizey'] = $taille_expo;
		// tableau photos des oeuvres : miniatures
		$data[2]['repertoire'] = $repertoire_expo_mini;
		$data[2]['aspect'] = 1;
		$data[2]['sizey'] = $taille_expo_mini;

		if ($img !="")  $im =create_resized('image',$data,rename_file($img));
		
		//recupere l'identifiant de l'artiste
		$sql = "SELECT * FROM exposition WHERE id_expo = '".$_POST['idExpo']."'";
		$res = $r -> sel_once($sql) or die ($r->err." ".$sql);
		
		//insertion de l'oeuvre
		$sql = "INSERT INTO oeuvre  SET
				legende_oeuvre = '".$_POST['legende']."',
				en_legende_oeuvre = '".$_POST['en_legende']."',
				artiste_oeuvre = '".$res['artiste_expo']."',
				img_oeuvre = '".rename_file($img)."'";
		
		$r -> exe ($sql) or die ($r->err." ".$sql);
		//fin de l'insertion de l'oeuvre
		
		//recupere le dernier identifiant
		$idOeuvre = $r-> last_ins;
		
		//insertion de la correspondance oeuvre/exposition
		$sql = "INSERT INTO faire_partie  SET
				oeuvre_faire_partie = '".$idOeuvre."',
				expo_faire_partie   = '".$_POST['idExpo']."'";
		
		$r -> exe ($sql) or die ($r->err." ".$sql);
		//fin insertionde la correspondance oeuvre/exposition
		
		
		
		header("Location:gallerie.php?idExpo=".$_POST['idExpo']);
}
//fin insertion oeuvre

?>
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">
<a href="liste_expo.php">retour </a> 
<div class="soustitre" align="center"> 
  <p>Ajout d'une photo &agrave; la gallerie</p>
</div>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="form" id="form">
  <input name="idExpo" type="hidden" value="<?= $_GET['idExpo']; ?>">
  <input name="idArtiste" type="hidden" value="<?= $_GET['idArtiste']; ?>">
  <input name="ajout" type="hidden" value="1">
  <table width="59%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="42%" class="titre">L&eacute;gende Francais</td>
      <td width="58%"><input name="legende" type="text" id="legende" size="50" maxlength="255"></td>
    </tr>
    <tr>
      <td class="titre">L&eacute;gende Anglais</td>
      <td><input name="en_legende" type="text" id="en_legende" size="50" maxlength="255"></td>
    </tr>
    <tr> 
      <td class="titre">Image</td>
      <td><input name="image" type="file" id="image"></td>
    </tr>
    <tr align="center"> 
      <td colspan="2"><input type="submit" name="Submit" value="Valider"> </td>
    </tr>
  </table>
</form>
</body>
</html>

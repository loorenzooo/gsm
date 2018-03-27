<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	
	require_once("conn.php");
	require_once("inc_photo.php");
	
	//recupère pour le retour le type de liste à afficher : tableaux, meubles, objet d'art, ...
	if(isset($_GET['type'])) $type= $_GET['type'];
	
	$repertoire_genre = "../".$repertoire_genre;
	
	//modification affichage des données
	if(isset($_GET['idGenre']))
	{
		$sql = "SELECT * FROM genre WHERE id_genre = '".$_GET['idGenre']."'";
		$res = $r -> sel_once($sql) or die ($r->err." ".$sql);
	}
	//fin modification affichage des données
	else
	{
		//modification dans la base
		if(isset($_POST['idGenre']))
		{
			$img = $_FILES['image']['name'];
			
			//suppression des anciennes images
			if(isset($_POST['oldImg']) AND file_exists ($repertoire_genre.$_POST['oldImg']) AND $img!="")
			{
				@unlink($repertoire_genre.$_POST['oldImg']);
			}
			//fin suppresion des anciennes images
						
			// tableau photos des oeuvres : miniatures
			$data[1]['repertoire'] = $repertoire_genre;
			$data[1]['aspect'] = 1;
			
			if($_POST['type']!=1) $data[1]['sizey'] = $taille_genre_meuble;
			else $data[1]['sizey'] = $taille_genre;
	
			if ($img !="")  $im =create_resized('image',$data,rename_file($img));
			//fin du traitement des images
			
			$sql = "UPDATE genre SET
					nom_genre = '".$_POST['nom']."',
					en_nom_genre = '".$_POST['en_nom']."',
					img_genre = '".rename_file($img)."',
					type_genre = '".$_POST['type']."'
					WHERE id_genre = '".$_POST['idGenre']."'";
			
			$r->exe($sql) or die($r->err." ".$sql);
			
			//redirection
			header("Location:liste_genre.php?type=".$_POST['type']);
			
			
		}
		//fin modification dans la base
		else
		{
			//ajout dans la base
			if(isset($_POST['ajout']))
			{
				//traitement des images
				$img = $_FILES['image']['name'];
				
				// tableau photos des oeuvres : miniatures
				$data[1]['repertoire'] = $repertoire_genre;
				$data[1]['aspect'] = 1;
				
				
				if($_POST['type']!=1) $data[1]['sizey'] = $taille_genre_meuble;
				else $data[1]['sizey'] = $taille_genre;
		
				if ($img !="")  $im =create_resized('image',$data,rename_file($img));
			    //fin du traitement des images
				
				$sql = "INSERT INTO genre SET
						nom_genre = '".$_POST['nom']."',
						en_nom_genre = '".$_POST['en_nom']."',
						type_genre = '".$_POST['type']."',
						img_genre = '".rename_file($img)."'";
				
				$r->exe($sql) or die($r->err." ".$sql);
				
				//redirection
				header("Location:liste_genre.php?type=".$_POST['type']);
			}
		//fin ajout d'une nouvelle oeuvre
		
		}
		
	}
	
?>
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F8E4C9">
<p><a href="liste_genre.php?type=<?= $type ?>">retour </a> 
<div class="soustitre" align="center">
  <p>Ajout d'un genre d'oeuvre </p>
 <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="form">
 <input name="type" type="hidden" value="<?= $type ?>">
 <?php
 if(isset($_GET['idGenre']))
 {
 ?>
	 <input name="idGenre" type="hidden" value="<?= $_GET['idGenre']; ?>">
	 <input name="oldImg" type="hidden" value="<?= $res['img_genre']?>">
 <?php	
 }
 else
 {
 ?>
 	<input name="ajout" type="hidden" value="1">
 <?php
 }
 ?>
    <table width="88%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
        <td>&nbsp;</td>
        <td align="center" class="titre">Fran&ccedil;ais</td>
        <td align="center" class="titre">&nbsp;</td>
        <td align="center" class="titre">Anglais</td>
      </tr>
      <tr> 
        <td width="10%" class="titre">Nom </td>
        <td width="42%"><input name="nom" type="text" id="nom" size="50" maxlength="255" <?php if(isset($res['nom_genre'])) echo "value=\"".$res['nom_genre']."\"";?>></td>
        <td width="4%">&nbsp;</td>
        <td width="44%"><input name="en_nom" type="text" id="en_nom" size="50" maxlength="255" <?php if(isset($res['en_nom_genre'])) echo "value=\"".$res['en_nom_genre']."\"";?>></td>
      </tr>
      <tr> 
        <td class="titre">Image</td>
        <td colspan="3"><input name="image" type="file" id="image"></td>
      </tr>
      <tr align="center"> 
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr align="center"> 
        <td>&nbsp;</td>
        <td colspan="3"><input name="Submit" type="submit" id="Submit" value="Valider"></td>
      </tr>
    </table>
  </form>
</div> 
</body>
</html>

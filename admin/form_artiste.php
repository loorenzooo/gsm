<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");

	require_once("conn.php");
	require_once("inc_photo.php");
	
	$repertoire_artiste = "../".$repertoire_artiste;
	
	//modification affichage des données
	if(isset($_GET['idArtiste']))
	{
		$sql = "SELECT * FROM artiste WHERE id_artiste = '".$_GET['idArtiste']."'";
		$res = $r-> sel_once($sql) or die ($r->err." ".$sql);
	}
	//fin modification affichage
	else
	{	
		//modification base de données
		if(isset($_POST['idArtiste']))
		{
			
			$img = $_FILES['image']['name'];
			
			//suppression des anciennes images
			if(isset($_POST['oldImg']) AND file_exists ($repertoire_artiste.$_POST['oldImg'])AND $img!="")
			{
				@unlink($repertoire_artiste.$_POST['oldImg']);
			}
			
			//fin suppresion des anciennes images
						
			// tableau photos des oeuvres : miniatures
			$data[1]['repertoire'] = $repertoire_artiste;
			$data[1]['aspect'] = 1;
			$data[1]['sizey'] = $taille_artiste;
	
			$image  = "";
			if ($img !="") 
			{
				 $im =create_resized('image',$data,rename_file($img));
				 $image = "img_artiste = '".rename_file($img)."',";
			}

			//fin du traitement des images
			
			$sql = "UPDATE artiste SET ".$image."
					nom_artiste = '".$_POST['nom']."',
					prenom_artiste = '".$_POST['prenom']."',
					periode_artiste = '".$_POST['periode']."',
					nationalite_artiste = '".$_POST['nationalite']."',
					categorie_artiste = '".$_POST['categorie']."',
					vie_artiste = '".$_POST['vie']."',
					musee_artiste = '".$_POST['musee']."',
					ref_artiste = '".$_POST['ref']."',
					en_periode_artiste = '".$_POST['en_periode']."',
					en_nationalite_artiste = '".$_POST['en_nationalite']."',
					en_categorie_artiste = '".$_POST['en_categorie']."',
					en_vie_artiste = '".$_POST['en_vie']."',
					en_musee_artiste = '".$_POST['en_musee']."',
					en_ref_artiste = '".$_POST['en_ref']."'				
					WHERE id_artiste = '".$_POST['idArtiste']."'";
			
			$r -> exe ($sql) or die ($r->err." ".$sql);
			
			header("Location:liste_artiste.php");
		
		}
		//fin modification base de données
		else
		{
			//insertion artistes
			if(isset($_POST['ajout']))
			{
					$img = $_FILES['image']['name'];
			
					// tableau photos des oeuvres : miniatures
					$data[1]['repertoire'] = $repertoire_artiste;
					$data[1]['aspect'] = 1;
					$data[1]['sizey'] = $taille_artiste;
			
					if ($img !="")  $im =create_resized('image',$data,rename_file($img));
					
					$sql = "INSERT INTO artiste SET
							nom_artiste = '".$_POST['nom']."',
							prenom_artiste = '".$_POST['prenom']."',
							periode_artiste = '".$_POST['periode']."',
							nationalite_artiste = '".$_POST['nationalite']."',
							categorie_artiste = '".$_POST['categorie']."',
							vie_artiste = '".$_POST['vie']."',
							musee_artiste = '".$_POST['musee']."',
							ref_artiste = '".$_POST['ref']."',
							en_periode_artiste = '".$_POST['en_periode']."',
							en_nationalite_artiste = '".$_POST['en_nationalite']."',
							en_categorie_artiste = '".$_POST['en_categorie']."',
							en_vie_artiste = '".$_POST['en_vie']."',
							en_musee_artiste = '".$_POST['en_musee']."',
							en_ref_artiste = '".$_POST['en_ref']."',
							img_artiste = '".rename_file($img)."'";
					
					$r -> exe ($sql) or die ($r->err." ".$sql);
					header("Location:liste_artiste.php");
			}
			//fin insertion artistes
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
<a href="liste_artiste.php">retour </a> 
<div class="soustitre" align="center">
  <p>Ajout d'un artiste</p>
  <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" name="form1">
  <?php
	 if(isset($_GET['idArtiste']))
    {
	?>
		 <input name="idArtiste" type="hidden" value="<?= $_GET['idArtiste']; ?>">
		<input name="oldImg" type="hidden" value="<?= $res['img_artiste']?>">
	<?php
	}
	else
	{
	?>
		<input name="ajout" type="hidden" value="1">
	<?php
	}
  ?>
    <table width="75%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
        <td width="19%" class="titre">Nom</td>
        <td colspan="3"><input name="nom" type="text" id="nom" size="50" maxlength="255" <?php if(isset($res['nom_artiste'])) echo "value=\"".$res['nom_artiste']."\""; ?>></td>
      </tr>
      <tr> 
        <td class="titre">Pr&eacute;nom</td>
        <td colspan="3"><input name="prenom" type="text" id="prenom" size="50" maxlength="255" <?php if(isset($res['prenom_artiste'])) echo "value=\"".$res['prenom_artiste']."\""; ?>></td>
      </tr>
      <tr> 
        <td valign="top" class="titre">P&eacute;riode</td>
        <td width="81%"><textarea name="periode" cols="40" rows="4" id="periode"><?php if(isset($res['periode_artiste'])) echo $res['periode_artiste']; ?></textarea></td>
         <td>&nbsp;</td>
		 <td><textarea name="en_periode" cols="40" rows="4" id="en_periode"><?php if(isset($res['en_periode_artiste'])) echo $res['en_periode_artiste']; ?></textarea></td>
	    
      </tr>
      <tr> 
        <td valign="top" class="titre">Nationalit&eacute;</td>
        <td><textarea name="nationalite" cols="40" rows="4" id="nationalite"><?php if(isset($res['nationalite_artiste'])) echo $res['nationalite_artiste']; ?></textarea></td>
         <td>&nbsp;</td>
		 <td><textarea name="en_nationalite" cols="40" rows="4" id="en_nationalite"><?php if(isset($res['en_nationalite_artiste'])) echo $res['en_nationalite_artiste']; ?> </textarea></td>
	   
      </tr>
      <tr> 
        <td valign="top" class="titre">Cat&eacute;gorie</td>
        <td><textarea name="categorie" cols="40" rows="4" id="textarea2"><?php if(isset($res['categorie_artiste'])) echo $res['categorie_artiste']; ?></textarea></td>
        <td>&nbsp;</td>
	    <td><textarea name="en_categorie" cols="40" rows="4" id="textarea2"><?php if(isset($res['en_categorie_artiste'])) echo $res['en_categorie_artiste']; ?></textarea></td>
	   
      </tr>
      <tr> 
        <td valign="top" class="titre">Vie</td>
        <td><textarea name="vie" cols="40" rows="10" id="textarea3"><?php if(isset($res['vie_artiste'])) echo $res['vie_artiste']; ?></textarea></td>
        <td>&nbsp;</td>
		<td><textarea name="en_vie" cols="40" rows="10" id="textarea3"><?php if(isset($res['en_vie_artiste'])) echo $res['en_vie_artiste']; ?></textarea></td>
		
      </tr>
      <tr> 
        <td valign="top" class="titre">Mus&eacute;e</td>
        <td><textarea name="musee" cols="40" rows="6" id="textarea4"><?php if(isset($res['musee_artiste'])) echo $res['musee_artiste']; ?></textarea></td>
        <td>&nbsp;</td>
	    <td><textarea name="en_musee" cols="40" rows="6" id="textarea4"><?php if(isset($res['en_musee_artiste'])) echo $res['en_musee_artiste']; ?></textarea></td>
	    
      </tr>
      <tr> 
        <td valign="top" class="titre">R&eacute;f&eacute;rences Bibliographiques</td>
        <td><textarea name="ref" cols="40" rows="6" id="textarea5"><?php if(isset($res['ref_artiste'])) echo $res['ref_artiste']; ?></textarea></td>
         <td>&nbsp;</td>
		 <td><textarea name="en_ref" cols="40" rows="6" id="textarea5"><?php if(isset($res['en_ref_artiste'])) echo $res['en_ref_artiste']; ?></textarea></td>
	  
      </tr>
      <tr> 
        <td valign="middle" class="titre">Photo</td>
        <td colspan="3"><input name="image" type="file" id="image"></td>
      </tr>
      <tr align="center">
        <td colspan="4" valign="top">&nbsp;</td>
      </tr>
      <tr align="center"> 
        <td colspan="4" valign="top"><input type="submit" name="Submit" value="Valider"></td>
      </tr>
    </table>
    
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>

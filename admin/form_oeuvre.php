<?php
	session_start();
	if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	
	require_once("conn.php");
	require_once("inc_photo.php");
	
	//recup�re le type de liste � afficher : tableaux, meubles, objet d'art, ...
	if(isset($_GET['type'])) $type= $_GET['type'];
	if(isset($_POST['type'])) $type= $_POST['type'];
	
	$repertoire_oeuvre_mini = "../".$repertoire_oeuvre_mini;
	$repertoire_oeuvre      = "../".$repertoire_oeuvre;
	
	//modification : affichage des donn�es 
	if(isset($_GET['idOeuvre']))
	{
		switch ($type)
		{
			case 1 : $sql = "SELECT * FROM oeuvre, genre, artiste WHERE id_oeuvre= '".$_GET['idOeuvre']."' AND genre_oeuvre = id_genre AND artiste_oeuvre = id_Artiste";
					 break;
			case 2 : $sql = "SELECT * FROM oeuvre, genre WHERE id_oeuvre= '".$_GET['idOeuvre']."' AND genre_oeuvre = id_genre";
					 break;
			case 3 : $sql = "SELECT * FROM oeuvre, genre, artiste WHERE id_oeuvre= '".$_GET['idOeuvre']."' AND genre_oeuvre = id_genre AND artiste_oeuvre = id_Artiste";
					 break;
			case 4 : $sql = "SELECT * FROM oeuvre, artiste WHERE id_oeuvre= '".$_GET['idOeuvre']."' AND artiste_oeuvre = id_Artiste";
					 break;
			case 5 : $sql = "SELECT * FROM oeuvre, artiste WHERE id_oeuvre= '".$_GET['idOeuvre']."' AND artiste_oeuvre = id_Artiste";
					 break;
		}
		
		$res2 = $r-> sel_once($sql) or die ($r->err." ".$sql);
	}
	//fin modification : affichage des donn�es
	else
	{
		//modification ds la base
		if(isset($_POST['idOeuvre']))
		{			
		//traitement des images
			
			$img = $_FILES['image']['name'];
			$img2 = $_FILES['image2']['name'];
			
			//suppression des anciennes images
			if(isset($_POST['oldImg']) AND file_exists ($repertoire_oeuvre_mini.$_POST['oldImg']) AND $img!="")
			{
				@unlink($repertoire_oeuvre_mini.$_POST['oldImg']);
				@unlink($repertoire_oeuvre.$_POST['oldImg']);
			}
			if(isset($_POST['oldImg2']) AND file_exists ($repertoire_oeuvre_mini.$_POST['oldImg2']) AND $img2!="")
			{
				@unlink($repertoire_oeuvre_mini.$_POST['oldImg2']);
				@unlink($repertoire_oeuvre.$_POST['oldImg2']);
			}
			//fin suppresion des anciennes images
			
			
			// tableau photos des oeuvres : miniatures
			$data[1]['repertoire'] = $repertoire_oeuvre_mini;
			$data[1]['aspect'] = 1;
			$data[1]['sizey'] = $taille_oeuvre_mini;
			
			// tableau photos des oeuvres : grandes
			$data[2]['repertoire'] = $repertoire_oeuvre; 
			$data[2]['aspect'] = 1;
			$data[2]['sizey'] = $taille_oeuvre;
			
			// tableau photos des oeuvres : miniatures
			$data2[1]['repertoire'] = $repertoire_oeuvre_mini;
			$data2[1]['aspect'] = 1;
			$data2[1]['sizey'] = $taille_oeuvre_mini2;
			
			// tableau photos des oeuvres : grandes
			$data2[2]['repertoire'] = $repertoire_oeuvre; 
			$data2[2]['aspect'] = 1;
			$data2[2]['sizey'] = $taille_oeuvre2;
	
			if ($img !="")  $im =create_resized('image',$data,rename_file($img));
			if ($img2 !="") $im2=create_resized('image2',$data2,rename_file($img2));
		//fin du traitement des images
			
			//si il n'y a pas de genre � selectionner : curiosit� + exposition on attribut par d�faut un genre
			if($_POST['type'] == 4) $_POST['genre']=23;
			if($_POST['type'] == 5) $_POST['genre']=24;
			
			$regImage ="";
			if($img!="")
				$regImage .= "img_oeuvre     = '".rename_file($img)."',";
			if($img2!="")
				$regImage .= "img2_oeuvre    = '".rename_file($img2)."',";
				
			$sql = "UPDATE oeuvre SET
					nom_oeuvre     = '".$_POST['nom']."',
					en_nom_oeuvre  = '".$_POST['en_nom']."',
					desc_oeuvre    = '".$_POST['desc']."',
					en_desc_oeuvre = '".$_POST['en_desc']."',
					legende_oeuvre = '".$_POST['legende']."',
					en_legende_oeuvre = '".$_POST['en_legende']."',
					legende2_oeuvre = '".$_POST['legende2']."',
					en_legende2_oeuvre = '".$_POST['en_legende2']."',
					".$regImage."
					genre_oeuvre   = '".$_POST['genre']."',
					artiste_oeuvre = '".$_POST['artiste']."'
					WHERE id_oeuvre = '".$_POST['idOeuvre']."'";
			
			$r->exe($sql) or die($r->err." ".$sql);
			
			
			//echo $sql;
			//redirection
			header("Location:liste_oeuvre.php?type=".$_POST['type']);
					
		}
		//fin modification dans la base
		else
		{
		// ajout d'une nouvelle oeuvre
			if(isset($_POST['ajout']))
			{
				$img = $_FILES['image']['name'];
				$img2 = $_FILES['image2']['name'];
				
				// tableau photos des oeuvres : miniatures
				$data[1]['repertoire'] = $repertoire_oeuvre_mini;
				$data[1]['aspect'] = 1;
				$data[1]['sizey'] = $taille_oeuvre_mini;
				
				// tableau photos des oeuvres : grandes
				$data[2]['repertoire'] = $repertoire_oeuvre; 
				$data[2]['aspect'] = 1;
				$data[2]['sizey'] = $taille_oeuvre;
				
				// tableau photos des oeuvres : miniatures
				$data2[1]['repertoire'] = $repertoire_oeuvre_mini;
				$data2[1]['aspect'] = 1;
				$data2[1]['sizey'] = $taille_oeuvre_mini2;
				
				// tableau photos des oeuvres : grandes
				$data2[2]['repertoire'] = $repertoire_oeuvre; 
				$data2[2]['aspect'] = 1;
				$data2[2]['sizey'] = $taille_oeuvre2;
		
				if ($img !="")  $im =create_resized('image',$data,rename_file($img));
				if ($img2 !="") $im2=create_resized('image2',$data2,rename_file($img2));
			//fin du traitement des images
				
				//si il n'y a pas de genre � selectionner : curiosit� + exposition on attribut par d�faut un genre
				if($_POST['type'] == 4) $_POST['genre']=23;
				if($_POST['type'] == 5) $_POST['genre']=24;
				
				
				$sql = "INSERT INTO  oeuvre SET
						nom_oeuvre     = '".$_POST['nom']."',
						en_nom_oeuvre  = '".$_POST['en_nom']."',
						desc_oeuvre    = '".$_POST['desc']."',
						en_desc_oeuvre = '".$_POST['en_desc']."',
						legende_oeuvre = '".$_POST['legende']."',
						en_legende_oeuvre = '".$_POST['en_legende']."',
						legende2_oeuvre = '".$_POST['legende2']."',
						en_legende2_oeuvre = '".$_POST['en_legende2']."',
						img_oeuvre     = '".rename_file($img)."',
						img2_oeuvre    = '".rename_file($img2)."',
						genre_oeuvre   = '".$_POST['genre']."',
						artiste_oeuvre = '".$_POST['artiste']."'";
				
				$r->exe($sql) or die($r->err." ".$sql);
				
				//redirection
				header("Location:liste_oeuvre.php?type=".$_POST['type']);
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
<a href="liste_oeuvre.php?type=<?= $type ?>">retour </a> 
<div class="soustitre" align="center">Ajout / Modification d'une oeuvre </div> 
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="form">
<input name="type" type="hidden" value="<?= $type ?>">
<?php
if(isset($_GET['idOeuvre']))
{
?>
	<input name="idOeuvre" type="hidden" value="<?= $_GET['idOeuvre'] ?>">
	<input name="oldImg" type="hidden" value="<?= $res2['img_oeuvre']?>">
	<input name="oldImg2" type="hidden" value="<?= $res2['img2_oeuvre']?>">
<?php
}
else
{
?>
	<input name="ajout" type="hidden" value="1">
<?php
}
?>
  <table width="88%" border="0" align="center" cellpadding="0" cellspacing="0">
    <?php 
	//affichage du genre seulement si il ne s'agit pas de meuble "2"
	/*if($type!=2)
	{*/
	?>
	<tr> 
      <td class="titre">Artiste </td>
      <td colspan="3"> 
        <!-- affichage liste des artistes -->
      
		<select name="artiste" id="artiste">
		<option value="100">Aucun</option>
          <?php
		  $sql = "SELECT * FROM artiste WHERE id_artiste!='100' ORDER BY nom_artiste, prenom_artiste ASC";
		  $r->sel($sql) or die($r->err." ".$sql);
		  while($res = $r->objFetch())
		  {
		  ?>
			  <option value="<?= $res->id_artiste; ?>" <?php if(isset($res2['id_artiste']) AND $res2['id_artiste']== $res->id_artiste) echo "selected"; ?>>
			  <?= mb_strtoupper($res->nom_artiste)." ".ucfirst(mb_strtolower($res->prenom_artiste)); ?>
			  </option>
			  <?php
		  }
		  $r->free();
		  ?>
        </select> 
		
        <!-- fin affichage liste artistes-->
      </td>
    </tr>
	<?php
	/*}*/
	
	//affichage du genre seulement si il ne s'agit pas d'exposition "4" et de curiosit� "5"
	if($type!=4 AND $type!=5)
	{
	?>
    <tr>
      <td class="titre">Genre </td>
      <td>
	  <!-- affichage de la liste des genre par rapport � un type $type pr�c�demment selectionner -->
	    
		<select name="genre" id="genre">
          <?php
			$sql = "SELECT * FROM genre WHERE type_genre = '".$type."' ORDER BY nom_genre";
			$r->sel($sql) or die($r->err." ".$sql);
			while($res = $r->objFetch())
			{
			?>
			  <option value="<?= $res->id_genre; ?>" <?php if(isset($res2['id_genre']) AND $res2['id_genre']== $res->id_genre) echo "selected"; ?>>
			  <?= ucfirst(mb_strtolower($res->nom_genre)); ?>
			  </option>
			  <?php
			}
			$r->free();
			?>
        </select>
		
	 <!-- fin affichage liste des genres-->
	 </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<?php
	}

	  //affichage du champ nom seulement si il ne s'agit pas d'exposition "4" et de curiosit� "5"
	  if($type!=4 AND $type!=5)
	  {
	  ?>
	  <tr> 
      <td width="14%" class="titre">Nom</td>
      <td width="38%">  
	  	<input name="nom" type="text" id="nom" size="50" maxlength="255" <?php if(isset($res2['nom_oeuvre'])) echo "value=\"".$res2['nom_oeuvre']."\""; ?>>
	  </td>
      <td width="3%">&nbsp;</td>
      <td width="45%"><input name="en_nom" type="text" id="en_nom" size="50" maxlength="255" <?php if(isset($res2['en_nom_oeuvre'])) echo "value=\"".$res2['en_nom_oeuvre']."\""; ?>></td>
    </tr> 
	<?php
	  }
	  ?>
    <tr> 
      <td valign="top" class="titre">Descriptif</td>
      <td><textarea name="desc" cols="40" rows="8" id="desc"><?php if(isset($res2['desc_oeuvre'])) echo $res2['desc_oeuvre']; ?></textarea></td>
      <td>&nbsp;</td>
      <td><textarea name="en_desc" cols="40" rows="8" id="en_desc"><?php if(isset($res2['en_desc_oeuvre'])) echo $res2['en_desc_oeuvre']; ?></textarea></td>
    </tr>
    <tr> 
      <td class="titre">Photo 1</td>
      <td colspan="3"><input name="image" type="file" id="image"><?php if(isset($res2['img_oeuvre'])) echo $res2['img_oeuvre']; ?></td>
    </tr>
    <tr> 
      <td valign="top" class="titre">L&eacute;gende 1</td>
      <td><textarea name="legende" cols="40" rows="3" id="textarea5"><?php if(isset($res2['legende_oeuvre'])) echo $res2['legende_oeuvre']; ?></textarea></td>
      <td>&nbsp;</td>
      <td><textarea name="en_legende" cols="40" rows="3" id="en_legende1"><?php if(isset($res2['en_legende_oeuvre'])) echo $res2['en_legende_oeuvre']; ?></textarea></td>
    </tr>
	
	<tr> 
      <td class="titre">Photo 2</td>
      <td colspan="3"><input name="image2" type="file" id="image2"><?php if(isset($res2['img2_oeuvre'])) echo $res2['img2_oeuvre']; ?></td>
    </tr>
    <tr> 
      <td class="titre">L&eacute;gende 2</td>
      <td><textarea name="legende2" cols="40" rows="3" id="textarea6"><?php if(isset($res2['legende2_oeuvre'])) echo $res2['legende2_oeuvre']; ?></textarea></td>
      <td>&nbsp;</td>
      <td><textarea name="en_legende2" cols="40" rows="3" id="textarea3"><?php if(isset($res2['en_legende2_oeuvre'])) echo $res2['en_legende2_oeuvre']; ?></textarea></td>
    </tr>
	
    <tr align="center"> 
      <td>&nbsp;</td>
      <td>Version Fran&ccedil;aise</td>
      <td>&nbsp;</td>
      <td>Version Anglaise</td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" name="Submit" value="Valider"></td>
    </tr>
  </table>
</form>
</body>
</html>

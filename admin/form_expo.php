<?php
session_start();
if(!isset($_SESSION['user']) OR  $_SESSION['user']=="") header("Location:index.php");
	
require_once("conn.php");
require_once("inc_photo.php");
	
$repertoire_expo_mini = "../".$repertoire_expo_mini;
//modification affichage des données
	if(isset($_GET['idExpo']))
	{
		$sql = "SELECT * FROM exposition WHERE id_expo = '".$_GET['idExpo']."'";
		$res = $r-> sel_once($sql) or die ($r->err." ".$sql);
	}
	//fin modification affichage
	else
	{	
		//modification base de données
		if(isset($_POST['idExpo']))
		{
			$img = $_FILES['image']['name'];
			
			//suppression des anciennes images
			if(isset($_POST['oldImg']) AND file_exists ($repertoire_expo.$_POST['oldImg'])AND $img!="")
			{
				@unlink($repertoire_expo.$_POST['oldImg']);
			}
			
			//fin suppresion des anciennes images
		
			// tableau photos des oeuvres : miniatures
			$data[1]['repertoire'] = $repertoire_expo_mini;
			$data[1]['aspect'] = 1;
			$data[1]['sizey'] = $taille_expo;
	
			if ($img !="")  $im =create_resized('image',$data,rename_file($img));

			//fin du traitement des images
			
			$sql = "UPDATE exposition SET
					artiste_expo = '".$_POST['artiste']."',
					img_expo = '".rename_file($img)."'
					WHERE id_expo = '".$_POST['idExpo']."'";
			
			$r -> exe ($sql) or die ($r->err." ".$sql);
			
			header("Location:liste_expo.php");
		
		}
		//fin modification base de données
		else
		{
			//insertion artistes
			if(isset($_POST['ajout']))
			{
					$img = $_FILES['image']['name'];
			
					// tableau photos des oeuvres : miniatures
					$data[1]['repertoire'] = $repertoire_expo_mini;
					$data[1]['aspect'] = 1;
					$data[1]['sizey'] = $taille_expo;
			
					if ($img !="")  $im =create_resized('image',$data,rename_file($img));
					
					$sql = "INSERT INTO exposition SET
							artiste_expo = '".$_POST['artiste']."',
							img_expo = '".rename_file($img)."'";
					
					$r -> exe ($sql) or die ($r->err." ".$sql);
					header("Location:liste_expo.php");
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
<a href="liste_expo.php">retour </a> 
<div class="soustitre" align="center"> 
  <p>Ajout d'une exposition</p>
</div>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="form" id="form">
 <?php
	 if(isset($_GET['idExpo']))
    {
	?>
		 <input name="idExpo" type="hidden" value="<?= $_GET['idExpo']; ?>">
		<input name="oldImg" type="hidden" value="<?= $res['img_expo']?>">
	<?php
	}
	else
	{
	?>
		<input name="ajout" type="hidden" value="1">
	<?php
	}
  ?>
  <table width="59%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="42%" class="titre">Nom de l'artiste</td>
      <td width="58%">
	  <select name="artiste" id="artiste">
	  <?php
	  $sql2 = "SELECT * FROM artiste order by nom_artiste";
	  $r2-> sel($sql2) or die ($r2->err." ".$sql2);
	  echo $sql2;
	  while($res2 = $r2->objFetch())
	  {
	  ?>
	  	 <option value="<?= $res2->id_artiste; ?>" <?php if(isset($res['artiste_expo']) AND $res['artiste_expo']== $res2->id_artiste) echo "selected";?>>
			  <?= mb_strtoupper($res2->nom_artiste)." ".ucfirst(mb_strtolower($res2->prenom_artiste)); ?>
			  </option>
	  <?php
	  }
	  $r2->free();
	  ?>
       </select>
	   </td>
    </tr>
    <tr> 
      <td class="titre">Image</td>
      <td><input name="image" type="file" id="image"></td>
    </tr>
    <tr align="center"> 
      <td colspan="2"> <input type="submit" name="Submit" value="Valider"> </td>
    </tr>
  </table>
</form>

</body>
</html>

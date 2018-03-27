<?php
session_start();

//connexion à la base de données
require_once("conn.php");
//recuperation des variables de langues
require_once("inc_lang.php");

if(isset($_GET['idArtiste'])) $idArtiste = $_GET['idArtiste'];
?>
<html>
<head>
<title>Galerie Saint-Martin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="970" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="233" height="100%" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="233" height="516">
      <param name="movie" value="<?= $img_prefix?>menu2.swf">
      <param name=quality value=high>
      <embed src="<?= $img_prefix?>menu2.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="233" height="516"></embed>
    </object></td>
    <td height="100%" valign="top" bgcolor="#F8E4C9"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" bgcolor="#FFFFFF"><img src="charte2/titre_galerie_saint_martin.gif" width="394" height="64"></td>
      </tr>
      <tr>
          <td height="100%" align="center" valign="top" bgcolor="#FFFFFF"> 
            <p><br>
              <?php
		$sql = "SELECT * FROM artiste WHERE id_artiste = '".$idArtiste."'";
		$res = $r->sel_once($sql) or die($r->err." ".$sql);
		
		
		?>
            </p>
			<p align="center" class="soustitre">
              <?= $res['prenom_artiste']." ".$res['nom_artiste']; ?>
            </p>
			<?php
			if(isset($res['img_artiste']) AND $res['img_artiste']!="" AND file_exists($repertoire_artiste.$res['img_artiste']))
			{
			?>
				<img src="<?= $repertoire_artiste.$res['img_artiste']; ?>">
			<?php
			}
			?>
            <table width="90%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td></td>
              </tr>
			  <?php
			  if(isset($res['periode_artiste'])AND $res['periode_artiste']!="")
			  {
			  ?>
              <tr>
                <td><span class="titre"><?= $dic['periode']; ?></span><br>
                  <?= nl2br($res[$img_prefix.'periode_artiste']); ?>
                </td>
              </tr>
			  <?php
			  }
			  if(isset($res['nationalite_artiste']) AND $res['nationalite_artiste']!="")
			  {
			  ?>
              <tr>
                <td><span class="titre"><?= $dic['nationalite']; ?></span><br>
                  <?= nl2br($res[$img_prefix.'nationalite_artiste']); ?>
                </td>
              </tr>
			  <?php
			  }
			  if(isset($res['categorie_artiste']) AND $res['categorie_artiste']!="")
			  {
			  ?>
              <tr>
                <td height="18"><span class="titre"><?= $dic['categorie']; ?></span><br>
                  <?= nl2br($res[$img_prefix.'categorie_artiste']); ?>
                </td>
              </tr>
			  <?php
			  }
			  if(isset($res['vie_artiste']) AND $res['vie_artiste']!="")
			  {
			  ?>
              <tr>
                <td><span class="titre"><?= $dic['vie']; ?></span><br>
                  <?= nl2br($res[$img_prefix.'vie_artiste']); ?>
                </td>
              </tr>
			  <?php
			  }
			  if(isset($res['musee_artiste']) AND $res['musee_artiste']!="")
			  {
			  ?>
              <tr>
                <td><span class="titre"><?= $dic['musee']; ?></span><br>
                  <?= nl2br($res[$img_prefix.'musee_artiste']); ?>
                </td>
              </tr>
			<?php
			}
			  if(isset($res['ref_artiste']) AND $res['ref_artiste']!="")
			  {
			  ?>
				<tr>
                <td> <span class="titre"><?= $dic['reference']; ?></span><br>
                  <?= nl2br($res[$img_prefix.'ref_artiste']); ?>
                </td>
              </tr>
			  <?php
			  }
			  ?>
     
            </table>
            <p>&nbsp; </p>
          <p>&nbsp; </p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28" align="center"><img src="charte2/idep.jpg" width="151" height="28" hspace="28" border="0" usemap="#MapMap">
      <map name="MapMap">
        <area shape="rect" coords="5,6,47,28" href="http:///www.idep-multimedia.com" target="_blank">
        <area shape="rect" coords="50,7,93,29" href="http://www.indexa.fr" target="_blank">
        <area shape="rect" coords="97,8,150,28" href="http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&Lang=French&P5_Language=French" target="_blank">
      </map></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><!-- #BeginLibraryItem "/Library/menu.lbi" --><table border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center"><font color="#006600"><a href="presentation.php">Galeries</a>            | <a href="rubrique.php?type=1">Tableaux</a> |
                <a href="rubrique.php?type=2">Meubles</a> | <a href="rubrique.php?type=3">Objets d'Arts</a> | <a href="exposition_rubrique.php">Expositions</a> |
                <a href="produit.php?idGenre=24&type=5">Curiosit&eacute;s</a> | <a href="partenaire.php">Partenaires </a> | <a href="contact.php">Contact </a></font></td>
          </tr>
          <tr>
            <td align="center"><font color="#006600"><a href="en_presentation.php?langue=en">Galleries</a> | <a href="rubrique.php?type=1">Paintings</a> | <a href="rubrique.php?type=2">Furniture</a> | <a href="rubrique.php?type=3">Objects of art</a> | <a href="exposition_rubrique.php">Exhibitions</a> | <a href="produit.php?idGenre=24&type=5">Curio</a> | <a href="partenaire.php">Partners </a> | <a href="en-contact.php">Contact us </a></font></td>
          </tr>
        </table>
<!-- #EndLibraryItem --></td>
  </tr>
</table>
</body>
</html>

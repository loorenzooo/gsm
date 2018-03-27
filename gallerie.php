<?php
session_start();

//connexion à la base de données
require_once("conn.php");

//parametrage du tableau d'affichage
$cpt = 1; 		//image de début
$nbColonne = 3; //nb de colonne pour laffichage des images
?>
<html>
<head>
<title>Galerie Saint-Martin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#3D6D40" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="970" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="233" height="100%" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="233" height="516">
      <param name="movie" value="<?= $img_prefix?>menu2.swf">
      <param name=quality value=high>
      <embed src="<?= $img_prefix?>menu2.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="233" height="516"></embed>
    </object></td>
    <td height="100%" valign="top" bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><img src="charte2/titre_galerie_saint_martin.gif" width="394" height="64"></td>
      </tr>
      <tr>
        <td height="100%" align="center" valign="top">
		<br>
		<table width="90%" align="center" cellspacing="5">
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
			<a href="">
			<?php
			if(isset($res['img_oeuvre']) AND $res['img_oeuvre']!="")
			{
			?>
			<a href="#" onclick="window.open('popup.php?img=<?= $repertoire_expo.$res['img_oeuvre']; ?>','pop1','scrollbars=no,statusbar=no,resize=no,menubar=no'); return false;"><img src="<?= $repertoire_expo_mini.$res['img_oeuvre']; ?>" border="0">
			<?php
			}
			?><span class="titre"><br>
			  <?=$res[$img_prefix."legende_oeuvre"]; ?>
			  </span>
			  </a><br>
		   
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
		</table>		</td>
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

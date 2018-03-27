<?php
session_start();

//connexion à la base de données
require_once("conn.php");
//recuperation des variables de langues
require_once("inc_lang.php");

//parametrage du tableau d'affichage
$cpt = 1; 		//image de début
$nbColonne = 3; //nb de colonne pour laffichage des images


//selectionne les sous rubriques
$sql = "SELECT * FROM  exposition, artiste WHERE artiste_expo = id_artiste";
$r->sel($sql) or die($r->err." ".$sql);
?>
<html>
<head>
<title>Werner van Hoylandt tableaux, fa&iuml;ences Christine Viennet</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Galerie d'art et d'antiquit&eacute;s &aacute; Paris proposant &aacute; la vente des tableaux du XIX&egrave;me et d&eacute;but XXème si&egrave;cle et du mobilier ancien, exposition des tableaux de Werner van Hoylandt tableaux et des fa&iuml;ences Christine Viennet.">
<meta name="keywords" content="Werner van Hoylandt Tableaux, Fa&iuml;ences Christine Viennet, Trompe l'Oeil">
<meta name="abstract" content="Magasin d'antiquit&eacute;s">
<meta name="ressource-type" content="document">
<meta name="subject" content="Magasin d'antiquit&eacute;s">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="author" lang="fr" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Galerie Saint Martin">
<meta name="organization" content="Galerie Saint Martin">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="reply-to" content="">
<meta name="Identifier-URL" content="http://www.galeriesaintmartin.com">
<meta name="language" content="FR">
<meta name="rating" content="General">
<meta name="distribution" content="Global">

<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#3D6D40" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div class="cyc">
<p><br>
              
<p> 
	  <p><H1>Werner van Hoylandt tableaux, fa&iuml;ences Christine Viennet</H1><br>
      Galerie d'art et d'antiquit&eacute;s &aacute; Paris proposant &aacute; la vente des tableaux du XIX&egrave;me et d&eacute;but XXème si&egrave;cle et du mobilier ancien ou r&eacute;gional, exposition des tableaux de <strong>Werner van Hoylandt tableaux</strong> et des <strong>fa&iuml;ences Christine Viennet</strong> ou des <stronG>ceramics</stronG> dans nos locaux de la region parisienne ou du Lot.</p>

      <p><H2>Christine Viennet ceramics, Werner van Hoylandt</H2><br>
      Galeriste de Paris sp&eacute;cialis&eacute; dans la peinture moderne et la peinture fran&ccedil;aise, les objets d'art des XVIIeme au XIXeme, des meubles anciens dans le domaine du meuble r&eacute;gional et des objets d&eacute;coratifs.</p>

      <ul>
      <i><a href="http://www.galeriesaintmartin.com/index.php">Antiquaire paris et antiquit&eacute;s</a></i>
      <i><a href="http://www.galeriesaintmartin.com/presentation.php">Galerie peinture moderne</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=1&langue=fr">Tableaux impressionnistes de maitre</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=2&langue=fr">Mobilier ancien et meuble r&eacute;gional</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=3&langue=fr">Sculptures bronze chandeliers et bougeoirs</a></i>
      <i><a href="http://www.galeriesaintmartin.com/exposition_rubrique.php?langue=fr">Werner van Hoylandt Christine Viennet</a></i>
      <i><a href="http://www.galeriesaintmartin.com/contact.php?langue=fr">Fa&ences et porcelaines</a></i>
      <i><a href="http://www.galeriesaintmartin.com/commodes.php">Commodes</a></i>
      <i><a href="http://www.galeriesaintmartin.com/tables.php">Tables</a></i>
      <i><a href="http://www.galeriesaintmartin.com/consoles.php">Consoles</a></i>
      <i><a href="http://www.galeriesaintmartin.com/sieges.php">Si&egrave;ges</a></i>
      <i><a href="http://www.galeriesaintmartin.com/bergeres.php">Berg&egrave;res</a></i>
      <i><a href="http://www.galeriesaintmartin.com/buffets.php">Buffets</a></i>
      <i><a href="http://www.galeriesaintmartin.com/coffres.php">Coffres</a></i>
      <i><a href="http://www.galeriesaintmartin.com/meubles.php">Meuble</a></i>
      <i><a href="http://www.galeriesaintmartin.com/meubles-style.php">Meubles de style</a></i>
      <i><a href="http://www.galeriesaintmartin.com/mobilier.php">Mobilier</a></i>
      <i><a href="http://www.galeriesaintmartin.com/mobilier-style.php">Mobilier de style</a></i>
      </ul>
	  <ul>
	  <i><a href="http://www.galeriesaintmartin.com/en_presentation.php">French antique dealer</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=1&langue=en">French impressionist painting</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=2&langue=en">XIXth antique century french furniture</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=3&langue=en">French antique bronze</a></i>
      <i><a href="http://www.galeriesaintmartin.com/exposition_rubrique.php?langue=en">Trompe l'oeil</a></i>
      <i><a href="http://www.galeriesaintmartin.com/produit.php?idGenre=24&type=5">Flower oil peinting antique</a></i>
      <i><a href="http://www.galeriesaintmartin.com/contact.php?langue=en">Antique country french table and furnitures</a></i>
      <i><a href="http://www.galeriesaintmartin.com/antique-candelabra.php">Antique candelabras, antique silver candelabra</a></i>
      <i><a href="http://www.galeriesaintmartin.com/antique-candelsticks.php">Antique candlesticks, antique silver candlestick</a></i>
      <i><a href="http://www.galeriesaintmartin.com/antique-vase.php">Antique ceramic vase, antique french vases</a></i>  
      </ul>
<script language="javascript">
document.write('<img src="http://www.idep-multimedia.com/JSstats.php?siteid=858&ref='+document.referrer+'" border="0">');
</script>
</div>
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
		  <table width="90%"  border="0" cellspacing="10" cellpadding="0">
		<?php
		//affichage de la liste des sous rubrique
		while($res = $r->fetch())
		{
			if($cpt == 1) echo "<tr>"; // si c'est le début d'une ligne on ouvre la ligne?>
				<td align="center">
				
				<?php
				if(isset($res['img_expo']) AND $res['img_expo']!="")
				{
				?>
				<a href="gallerie.php?idExpo=<?= $res['id_expo']; ?>"><img src="<?= $repertoire_expo_mini.$res['img_expo']; ?>" border="0"></a>
				<?php
				}
				?>
				<span class="titre"><br>
				<a href="artiste.php?idArtiste=<?= $res['id_artiste']; ?>"><?= $res["prenom_artiste"]." ".$res["nom_artiste"]; ?></a></span><br>				</td>
			<?php 
			  if($cpt == $nbColonne) 
				{
					echo "</tr>"; //on ferme la ligne
					$cpt = 1;
				}
			
			 $cpt++; //passe à la colonne suivante
		}
		$r->free();
		//fin affichage de la liste des sous rubrique
		?>
		</table>
		</td>
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

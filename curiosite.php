<?php
session_start();

//connexion � la base de donn�es
require_once("conn.php");
//recuperation des variables de langues
require_once("inc_lang.php");


if(isset($_GET['idType'])) $idType = $_GET['type'];
if(isset($_GET['idGenre'])) $idGenre = $_GET['idGenre'];
if(isset($_GET['idOeuvre'])) $idOeuvre = $_GET['idOeuvre'];

//selectionne les sous rubriques
$sql = "SELECT * FROM  oeuvre, artiste WHERE id_oeuvre = '".$idOeuvre."' AND artiste_oeuvre = id_artiste";
$res = $r->sel_once($sql) or die($r->err." ".$sql);

?>
<html>
<head>
<title>Galerie Saint-Martin - Fine french antiques dealer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="French antique dealer and fine art gallery in Paris selling XIXth to early XXst paintings, furniture and objects of art XVIIth to early XXst, antique country furniture and fine pieces of furniture.">
<meta name="keywords" content="Fine french antiques, Galerie Saint martin, Fine antiques Dealer">
<meta name="category" content="Art's gallery">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="ressource-type" content="document">
<meta name="author" lang="en" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Galerie Saint Martin">
<meta name="organization" content="Galerie Saint Martin">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="Identifier-URL" content="http://www.galeriesaintmartin.com">
<meta name="language" content="EN">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#3D6D40" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div class="cyc">
<p><br>
              
<p> 
	  <p><H1><a href="http://www.galeriesaintmartin.com/index.php">Fine French Antique</a> <a href="http://www.galeriesaintmartin.com/curiosite.php">Dealer</a> in Paris</H1><br>
	  La Galerie Saint Martin is a <a href="http://www.galeriesaintmartin.com/antique-candlesticks.php">french antique dealer</a> in the great and beautiful city of Paris, selling old oil paintaings (flowers), ancient furnitures and <a href="http://www.galeriesaintmartin.com/antique-vase.php">fine french antiques</a> from all the countries of the old Europe like the new Europe.</p>

      <p><H2>French Antiques Dealer</H2><br>
      Antique dealer and fine art gallery in Paris selling XIXth to early XXst paintings, furniture and objects of art XVIIth to early XXst, antique country furniture and fine pieces of furniture.</p>

      <ul>
      <i><a href="http://www.galeriesaintmartin.com/index.php">Antiquaire et antiquit&eacute;s</a></i>
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
        <td align="center" bgcolor="#FFFFFF"><img src="charte2/titre_galerie_saint_martin.gif" width="394" height="64"></td>
      </tr>
      <tr>
        <td height="100%" align="center" bgcolor="#FFFFFF">
		<table width="90%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><span class="legende"><a href="produit.php?idGenre=<?= $idGenre;?>&type=<?= $type;?>&langue=<?= $_SESSION['langue']?>"><?= $dic['retour'];?></a></span></td>
          </tr>
        </table>
		<br>
		<!--- affichage des informations concernant l'oeuvre --->
		    <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <td colspan="2" class="soustitre"> 
                  <?= $res[$img_prefix.'nom_oeuvre']; ?>
                </td>
              </tr>
              <tr align="center"> 
                <td width="50%"> 
                  <?php if(file_exists($repertoire_oeuvre.$res['img_oeuvre']) AND $res['img_oeuvre']!="") {?>
                  <img src="<?= $repertoire_oeuvre.$res['img_oeuvre']; ?>"> 
                  <?php }?>
                  <br>
                  <span class="legende">
                  <?= $res[$img_prefix.'legende_oeuvre'] ?>
                </span></td>
                 <?php if(file_exists($repertoire_oeuvre.$res['img2_oeuvre']) AND $res['img2_oeuvre']!="") {?><td width="50%">
                 <a href="#" onclick="window.open('popup.php?img=<?= $repertoire_oeuvre.$res['img2_oeuvre']; ?>','pop1','scrollbars=no,statusbar=no,resize=no,menubar=no'); return false;"> <img src="<?= $repertoire_oeuvre_mini.$res['img2_oeuvre']; ?>" border="0"></a>
                 <br>
                 <span class="legende">
                 <?= $res[$img_prefix.'legende2_oeuvre'] ?>
                 </span></td>
                 <?php }?>&nbsp;
              </tr>
              <tr align="center"> 
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr align="center"> 
                <td colspan="2" class="titre"><a href="artiste.php?idArtiste=<?= $res['id_artiste']?>&langue=<?= $_SESSION['langue']?>"> 
                  <?= $res['prenom_artiste']." ".$res['nom_artiste']; ?>
                  </a></td>
              </tr>
              <tr align="center"> 
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr align="center"> 
                <td colspan="2" class="legende"> 
                  <?= nl2br($res[$img_prefix.'desc_oeuvre']) ?>
                </td>
              </tr>
              <tr align="center"> 
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr> 
                <td colspan="2" class="legende"><?= $dic['prix']." : ".$dic['consulter']?></td>
              </tr>
            </table>
		 <!-- fin affichage des informations concernant l'oeuvre -->		</td>
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

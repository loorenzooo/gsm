<?php
session_start();



//connexion à la base de données
include("conn.php");

//recuperation des variables de langue
require_once("inc_lang.php");

//parametrage du tableau d'affichage
$cpt = 1; 		//image de début
$nbColonne = 3; //nb de colonne pour laffichage des images

//type des oeuvres en fonction des de la partie sélectionner
$type = $_GET['type'];


//selectionne les sous rubriques
$sql = "SELECT * FROM  genre WHERE type_genre = '".$type."' ORDER BY ordre_genre";
$r->sel($sql) or die($r->err." ".$sql);


?>
<html>
<head>
<?php
//if (!isset($langue)) $langue = '';
//$img_prefix = $langue;


if (($langue == 'fr') || ($langue == ''))
{ ?>

<?php
if (preg_match("#[/]"."rubrique.php[?]type=1"."$#",$_SERVER['REQUEST_URI']))
{?>
<title>Vente de tableaux de ma&icirc;tre et de tableaux impressionnistes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Galerie d'art proposant &agrave; la vente &agrave; des Vente de tableaux de ma&icirc;tre de diff&eacute;rentes &eacute;poques et des tableaux impressionnistes plus connus sous le nom de tableaux &agrave; fleurs.">
<meta name="keywords" content="Vente de Tableaux, Tableaux de Ma&icirc;tre, Tableaux Impressionnistes, vente de tableau, tableau de maitre, tabmeau impressionniste">
<meta name="category" content="Galerie de peinture">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="ressource-type" content="document">
<meta name="author" lang="fr" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Galerie Saint Martin">
<meta name="organization" content="Galerie Saint Martin">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="Identifier-URL" content="http://www.galeriesaintmartin.com">
<meta name="language" content="FR">

    <?php
    }
    elseif (preg_match("#[/]"."rubrique.php[?]type=2"."$#",$_SERVER['REQUEST_URI']))
    {?>
<title>Vente de meubles anciens et de meuble r&eacute;gional, vente de mobilier ancien</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Vente de meubles anciens des XVII&egrave;me au XX&egrave;me si&egrave;cle et de mobilier de type r&eacute;gional issu du Lot et du Quercy.">
<meta name="keywords" content="Mobilier Ancien, Meubles Ancien, Meuble R&eacute;gional, Mobilier Regional, vente meuble ancien, vente mobilier ancien, vente meuble regional, vente meubles anciens">
<meta name="category" content="Galerie de peinture">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="ressource-type" content="document">
<meta name="author" lang="fr" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Galerie Saint Martin">
<meta name="organization" content="Galerie Saint Martin">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="Identifier-URL" content="http://www.galeriesaintmartin.com">
<meta name="language" content="FR">

    <?php
    }
    elseif (preg_match("#[/]"."rubrique.php[?]type=3"."$#",$_SERVER['REQUEST_URI']))
    {?>
<title>Bronzes anciens, bougeoirs et sculptures en bronze du XVII&egrave;me</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Vente de bougeoirs et de chandeliers anciens, de sculptures et de bronzes des XVII&egrave;me, XVIII&egrave;me et XIX&egrave;me si&egrave;cle par la Galerie Saint Martin.">
<meta name="description" content="Galerie d'art et d'antiquités à Paris proposant à la vente bronzes anciens et sculptures en bronze du XVIII&egrave;me, mobilier regional, bougeoirs et chandeliers du XVIIème au début XXème siècle ainsi que des meubles anciens.">
<meta name="keywords" content="sculpture bronze, bronzes anciens, chandeliers XVII&egrave;me, chandeliers XVIII&egrave;me, chandeliers XIX&egrave;me, bougeoirs bronze, bougeoirs XVII&egrave;me, bougeoirs XVIII&egrave;me, bougeoirs XIX&egrave;me">
<meta name="category" content="Galerie de peinture">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="ressource-type" content="document">
<meta name="author" lang="fr" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Galerie Saint Martin">
<meta name="organization" content="Galerie Saint Martin">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="Identifier-URL" content="http://www.galeriesaintmartin.com">
<meta name="language" content="FR">

    <?php
    }
    else
    {?>
<title>Tableaux de fleurs, vente de tableaux anciens</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Galerie d'art et d'antiquit&eacute;s &agrave; Paris proposant &agrave; la vente des tableaux de fleurs (impressionnistes ou anciens), du mobilier et des objets du XVII&egrave;me au d&eacute;but XX&egrave;me si&egrave;cle.">
<meta name="keywords" content="Tableaux de Fleurs, Tableau Impressionniste, Vente Tableau Fleurs, vente tableaux anciens, tableau fleurs">
<meta name="category" content="Galerie de peinture">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="ressource-type" content="document">
<meta name="author" lang="fr" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Galerie Saint Martin">
<meta name="organization" content="Galerie Saint Martin">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="Identifier-URL" content="http://www.galeriesaintmartin.com">
<meta name="language" content="FR">
<?php
	}
?>



<?php
}
// fin test langue ?>


<?php if ( $langue == 'en')
{ ?>

<?php

	if (preg_match("#[/]"."rubrique.php[?]type=1"."$#",$_SERVER['REQUEST_URI']))
{?>
<title>French impressionist painting, Barbizon painter, flower landscape oil painting</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Fine art gallery in Paris selling flower and landscape oil painting, the barbizon painters works and french impressionists paintings.">
<meta name="keywords" content="French Impressionist Painting, Barbizon Painter, Flower Landscape Oil Painting, french impressionists painting, Barbizons painter, flowers landscape oil painting">
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

<?php
}
elseif (preg_match("#[/]"."rubrique.php[?]type=2"."$#",$_SERVER['REQUEST_URI']))
{?>
<title>XIXth antique century french furnitures, period antique furniture</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Antique dealer and fine art gallery in Paris selling XIXth to early XXst paintings, XIXth antique century french furniture and other period antique furnitures.">
<meta name="keywords" content="XIXth Antique Century French Furnitures, Period Antique Furniture, XIXth antique century french furniture, period antique furnitures">
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

<?php
}
elseif (preg_match("#[/]"."rubrique.php[?]type=3"."$#",$_SERVER['REQUEST_URI']))
{?>
<title>French antique bronze, Antique Casket, antique majolica</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Antique dealer specialist about antique bronzes, furniture and objects of art XVIIth to early XXst, antique casket and majolica, XIXth to early XXst french paintings.">
<meta name="keywords" content="French Antique Bronze, Antique Casket, Antique Majolica, french antiques bronzes, antique caskets, antique majolicas, antiques">
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

<?php
	}
?>



<?php
}

// fin test langue ?>

<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#3D6D40" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div class="cyc">
<p><br>

<p>
	  <?php if ( ($langue == 'fr') || ($langue == ''))
      { ?>

      <?php
	  if (preg_match("#[/]"."rubrique.php[?]type=1"."$#",$_SERVER['REQUEST_URI']))
	  {?>
   	  <p><H1>Vente de <a href="http://www.galeriesaintmartin.com/index.php">tableaux de ma&icirc;tre</a> et de <a href="http://www.galeriesaintmartin.com/rubrique.php?type=1">tableaux impressionnistes</a></H1><br>
      La Galerie Saint Martin est sp&eacute;cialis&eacute;e en oeuvres d'art et en antiquit&eacute;s de type <a href ="http://www.galeriesaintmartin.com/rubrique.php?type=2">tableaux anciens</a> r&eacute;alis&eacute;s par des ma&icirc;tres ayant v&eacute;cu, travaill&eacute; et peint durant une p&eacute;riode s'&eacute;tendant sur tout le XIX&egrave;me et le d&eacute;but du XX&egrave;me si&egrave;cle.</p>

      <p><H2>Tableaux impressionnistes de maitre en vente</H2><br>
      Galeriste de Paris sp&eacute;cialis&eacute; en peintures et objets d'art nous sommes &eacute;galement des antiquaires travaillant dans le domaine du meuble r&eacute;gional et des objets d&eacute;coratifs atypiques vendus sous le nom de curiosit&eacute;s.</p>
      <?php
      }
      elseif (preg_match("#[/]"."rubrique.php[?]type=2"."$#",$_SERVER['REQUEST_URI']))
      {?>
   	  <p><H1>Vente de <a href="http://www.galeriesaintmartin.com">mobilier ancien</a> et de <a href="http://www.galeriesaintmartin.com/rubrique.php?type=2">meuble r&eacute;gional</a></H1><br>
      La Galerie Saint Martin dispose &aacute; Paris d'un fond important de mobilier de diverses &eacute;poques, <a href="http://www.galeriesaintmartin.com/rubrique.php?type=3">vente de meubles anciens</a> des XVII&egrave;me au XIX&egrave;me si&egrave;cle avec des consoles, des tables, des fauteuils et autres si&egrave;ges, de berg&egrave;res, de buffets et de coffres.</p>

      <p><H2>Vente de meuble regional ancien</H2><br>
      Le galeriste parisien est sp&eacute;cialis&eacute; dans les peintures, le mobilier et les objets d'art, en tant qu'antiquaires nous proposons &agrave; la vente des objets d&eacute;coratifs atypiques plus connus sous le nom de curiosit&eacute;s.</p>
      <?php
      }
      elseif (preg_match("#[/]"."rubrique.php[?]type=3"."$#",$_SERVER['REQUEST_URI']))
      {?>
   	  <p><H1>Vente de <a href="http://www.galeriesaintmartin.com/index.php">bronzes anciens</a> et de <a href="http://www.galeriesaintmartin.com/rubrique.php?type=3">sculptures en bronze</a></H1><br>
      Magasin d'art et d'antiquit&eacute;s de Paris, la Galerie Saint Martin est sp&eacute;cialis&eacute;e dans le <a href="http://www.galeriesaintmartin.com/exposition_rubrique.php">les chandeliers en bronze</a> et les <a href="http://www.galeriesaintmartin.com/produit.php?idGenre=24&type=5">bougeoirs</a> des XVII&egrave;me, XVIII&egrave;me, XIX&egrave;me et XX&egrave;me si&egrave;cle, accessoires de table anciens dont on peut relater l'histoire et le v&eacute;cu.</p>

      <p><H2>Chandeliers et bronzes anciens</H2><br>
      Que ce soit sous forme de <strong>sculptures en bronze</strong> pour les objets d'art ou de <stronG>bougeoirs anciens</stronG>, les accessoires de r&eacute;ception ou de d&eacute;coration constituent une partie importante de n&ocirc;tre fond et de nos ventes.</p>

      <?php
	  }
	  else
	  {?>
   	  <p><H1>Vente de <a href="http://www.galeriesaintmartin.com/index.php">tableaux de fleurs</a> et de <a href="http://www.galeriesaintmartin.com/rubrique.php">tableaux anciens</a> &agrave; Paris</H1><br>
      A la fois galeriste d'art et d'antiquit&eacute;s, la Galerie Saint Martin propose &aacute; la vente une large palette de <a href="http://www.galeriesaintmartin.com/contact.php">tableaux &agrave; fleurs</a>, ainsi nomm&eacute;s en hommage aux peintres impressionnistes aui tout en travaillant le plus souvent sur la lumi&egrave;re dse sont &eacute;galement souvent inspir&eacute;s des champs et des fleurs pour une approche r&eacute;elle de la nature.</p>

      <p><H2>Vente de tableaux anciens</H2><br>
      Bien que travaillant beaucoup dans le monde de la peinture impressionniste, la galerie est &eacute;galement un lieu ou vous pourrez trouver des meubles r&eacute;gionaux, des curiosit&eacute;s et des accessoires d&eacute;coratifs atypiques.</p>
      <?php
	  }
      ?>

	  <?php
	  }
      // fin test langue ?>

      <?php if ( $langue == 'en')
      {
	  ?>

      <?php
      if (preg_match("#[/]"."rubrique.php[?]type=1#"."$",$_SERVER['REQUEST_URI']))
      {?>
   	  <p><H1><a href="http://www.galeriesaintmartin.com">Flowers oil paintings</a> by the <a href="http://www.galeriesaintmartin.com/en_presentation.php">Barbizon painters</a></H1><br>
      Galerie Saint Martin is a fine art gallery in Paris, we are dealers about <a href="http://www.galeriesaintmartin.com/rubrique.php?type=1">lansdcape oil paintings</a> and <a href="http://www.galeriesaintmartin.com/rubrique.php?type=2">french impresionnist paintings</a> realized during the last part of XIXth century in country with the feelings of the nature.</p>

      <p><H2>Flowers and Lansdcape Oil Paintings</H2><br>
	  Specialized in the barbizon's painters period, we can furnish you frech impressionist paintings such as  furniture and objects of art XVIIth to early XXst, antique casket and antique majolica.</a>

      <?php
      }
      elseif (preg_match("#[/]"."rubrique.php[?]type=2"."$#",$_SERVER['REQUEST_URI']))
      {?>
 	  <p><H1>XIXth Antique Century <a href="http://www.galeriesaintmartin.com">French Furnitures</a> and <a href="http://www.galeriesaintmartin.com/rubrique.php?type=1">Period Antique Furniture</a></H1><br>
      The Galerie Saint Martin is a provider of <a href="http://www.galeriesaintmartin.com/rubrique.php?type=2">period antique furniture</a> specialized in the <a href="http://www.galeriesaintmartin.com/rubrique.php?type=3">XIXth antique century french furniture</a> with a lot of beautiful and ancient funitures from France and Europe, whatever you want, you can see and you can buy.</p>

      <p><H2>XIXth Antique Century French Furnitures and Other Periord Antique</H2><br>
      Antique dealer and fine art gallery in Paris selling XIXth to early XXst paintings and french antique bronzes :  furniture and objects of art XVIIth to early XXst, antique casket and antique majolica.</p>
      <?php
      }
      elseif (preg_match("#[/]"."rubrique.php[?]type=3"."$#",$_SERVER['REQUEST_URI']))
      {?>
 	  <p><H1><a href="http://www.galeriesaintmartin.com/rubrique.php?type=1">French Antique Bronze</a> and <a href="http://www.galeriesaintmartin.com/rubrique.php?type=2">Antique Casket</a></H1><br>
      Fine art gallery in Paris and antique dealer, the Galerie Saint Martin is a specialized in <a href="http://www.galeriesaintmartin.com/rubrique.php?type=3">french antique bronzes</a> and <a href="http://www.galeriesaintmartin.com/en-contact.php">antique majolica</a> with a lot of and old funitures from France and others coutries in Old or New Europa (East, South, North or West).</p>

      <p><H2>French caskets and majolicas</H2><br>
      Antique dealer specialist about antique bronzes, furniture and objects of art XVIIth to early XXst, antique casket and majolica, XIXth to early XXst french paintings.</p>

      <?php
	  }
      ?>

      <?php
      }

      // fin test langue ?>


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
        <td height="100%" align="center">
		<table width="90%"  border="0" align="center" cellpadding="0" cellspacing="10">
		<?php
		//affichage de la liste des sous rubrique

		while($res = $r->fetch())
		{
			if($cpt == 1) echo "<tr>"; // si c'est le début d'une ligne on ouvre la ligne?>
				<td align="center">
				<a href="produit.php?idGenre=<?= $res['id_genre']; ?>&type=<?= $type; ?>&langue=<?= $_SESSION['langue']?>">				</a>
				<table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="123" align="center">

					<?php
					if(isset($res['img_genre']) AND $res['img_genre']!="")
					{
					?>
					<a href="produit.php?idGenre=<?= $res['id_genre']; ?>&type=<?= $type; ?>&langue=<?= $_SESSION['langue']?>"><img src="<?= $repertoire_genre.$res['img_genre']; ?>" border="0"></a>
					<?php
					}
					?>


					&nbsp;
					</td>
                  </tr>
                  <tr>
                    <td align="center"><a href="produit.php?idGenre=<?= $res['id_genre']; ?>&type=<?= $type; ?>&langue=<?= $_SESSION['langue']?>"><span class="titre">					<?=$res[$img_prefix."nom_genre"]; ?>
					</span></a>&nbsp;</td>
                  </tr>
                </table>

				</td>
			<?php
			  if($cpt == $nbColonne)
				{
					echo "</tr>"; //on ferme la ligne
					$cpt = 0;
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

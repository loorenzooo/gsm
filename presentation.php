<?php
session_start();

//connexion à la base de données
require_once("conn.php");
//recuperation des variables de langues
require_once("inc_lang.php");
?>
<html>
<head>
<title>Galerie peinture moderne Paris, magasin d'antiquit&eacute;s et galerie de peinture fran&ccedil;aise</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Galerie d'art et d'antiquit&eacute;s &aacute; Paris proposant &aacute; la vente des tableaux du XIX&egrave;me et d&eacute;but XXème si&egrave;cle, du mobilier et des objets du XVII&egrave;me au début XX&egraveme si&egravecle, des meubles du Quercy.">
<meta name="keywords" content="Magasin d'Antiquit&eacute;s, Galerie Peinture Paris, Galerie Peinture Fran&ccedil;aise, Magasin d'Antiquit&eacute;s Paris, Galerie de Peinture Moderne">
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
<style type="text/css">
<!--
.Style1 {color: #000000}
-->
</style>
</head>

<body bgcolor="#3D6D40" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div class="cyc">
<p><br>
              
<p> 
	  <p><H1><a href="http://www.galeriesaintmartin.com">Galerie de Peinture Moderne</a> et <a href="http://www.galeriesaintmartin.com/presentation.php">Magasin d'Antiquit&eacute;s</a> de Paris</H1><br>
      Install&eacute;e dans le Quartier Saint Martin d'ou son appellation &eacute;ponyme, la galerie de <a href="http://www.galeriesaintmartin.com/commodes.php">peinture fran&ccedil;aise</a> propose nombres d'oeuvres anciennes, elle est connuse comme &eacute;tant la <a href="http://www.galeriesaintmartin.com/tables.php">galerie de painture de Paris</a> des tableaux &agrave; fleurs et des peintures impresionnistes.</p>

      <p><H2>Magasin d'antiquit&eacute;s d'Ile de France (Paris)</H2><br>
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
	  </NOEMBED> 
<script language="javascript">
document.write('<img src="http://www.idep-multimedia.com/JSstats.php?siteid=858&ref='+document.referrer+'" border="0">');
</script>
</div>
<table width="970" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="233" height="100%" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="233" height="516">
      <param name="movie" value="menu2.swf">
      <param name=quality value=high>
      <embed src="menu2.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="233" height="516"></embed>
	</object></td>
    <td height="100%" valign="top" bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><img src="charte2/titre_galerie_saint_martin.gif" width="394" height="64"></td>
      </tr>
      <tr>
        <td height="100%" align="center"><table width="85%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td class="soustitre"><strong>Paris : </strong></td>
                    </tr>
                    <tr> 
                      <td bgcolor="#3D6D40"><img src="images/10x10.gif" width="10" height="1"></td>
                    </tr>
                    <tr> 
                      <td><img src="images/10x10.gif" width="10" height="10"></td>
                    </tr>
                    <tr> 
                      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr valign="top"> 
                            <td><p align="justify" class="textealacon">Au c&oelig;ur 
                                de Paris, Rive Gauche, entre Saint-Germain des 
                                Pr&eacute;s et le Louvre, Eric Chapoulart a ouvert 
                                en 1986 une galerie au 11 rue des Saints-P&egrave;res. 
                                Il y pr&eacute;sente des peintures, &oelig;uvres 
                                de Petits-Ma&icirc;tres du XIX&egrave;me si&egrave;cle 
                                et du d&eacute;but du XX&egrave;me si&egrave;cle, 
                                en m&ecirc;me temps qu&rsquo;une s&eacute;lection 
                                de meubles et objets d&rsquo;art des XVII&egrave;me 
                                au d&eacute;but du  XX&egrave;me si&egrave;cles.</p>
                              <p align="justify" class="textealacon">Dans le cadre 
                                du Carr&eacute; Rive Gauche qui regroupe les meilleurs 
                                professionnels de ce quartier mythique d&eacute;di&eacute; 
                                aux Arts&nbsp;; la Galerie Saint-Martin ouvre 
                                en Mai 2005 un nouvel espace situ&eacute; au n&deg;5, 
                                m&ecirc;me rue, o&ugrave; sont expos&eacute;s 
                                un ensemble de tableaux , meubles et objets d&rsquo;art 
                                des XVII&egrave;me, XVIII&egrave;me,  XIX&egrave;me et d&eacute;but du XX&egrave;me
                                si&egrave;cles.</p>
                              <p align="justify">Galerie Saint-Martin &ndash; 
                                5 et 11 rue des Saints-P&egrave;res - 75006 PARIS 
                                - t&eacute;l : 01-42-60-83-65 &ndash; fax&nbsp;: 
                                01-42-60-44-19 &ndash; e-mail&nbsp;: <a href="mailto:galerie.saint-martin@wanadoo.fr">galerie.saint-martin@wanadoo.fr</a> 
                              </p>
                              <p align="justify" class="textealacon">Heures 
                                d&rsquo;ouverture&nbsp;:<br>
                                10h30 &ndash; 13h / 14h &ndash; 19h du mardi au 
                                samedi &ndash; lundi&nbsp;: 14h &ndash; 19h<br>
                                M&eacute;tro ligne n&deg;4 arr&ecirc;t Saint-Germain 
                                des Pr&eacute;s 
                              </p>
								<p align="justify" class="textealacon">   
                                 <a href="#" onClick="window.open('plan75.htm','plan','width=550,height=550');"><b>Cliquez-ici 
                                pour acc&eacute;der au plan d'acc&egrave;s</b></a>
                              </p>
                            </td>
                            <td width="235" valign="middle"> <div align="right"><img src="images/photo_paris.jpg" width="220" height="293" border="1"></div></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td class="soustitre">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td class="soustitre"><strong>Province, dans le Lot&nbsp;: 
                        </strong></td>
                    </tr>
                    <tr> 
                      <td bgcolor="#3D6D40"><img src="images/10x10.gif" width="10" height="1"></td>
                    </tr>
                    <tr> 
                      <td><img src="images/10x10.gif" width="10" height="10"></td>
                    </tr>
                    <tr> 
                      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr valign="top"> 
                            <td width="234" height="148"> 
                            <p align="justify" class="textealacon"><img src="images/img_lot.jpg" width="222" height="150" border="1"></p></td>
                            <td width="392"> <p align="justify" class="textealacon">Au c&oelig;ur 
                                du Quercy entre Brive et Cahors, situ&eacute; 
                                au pied du ch&acirc;teau de Castelnau, la Galerie 
                                Saint-Martin pr&eacute;sente dans un espace de 
                                200 m&sup2; une s&eacute;lection de meubles, tableaux 
                                et objets d&rsquo;art du XVI&egrave;me au XIX&egrave;me 
                                si&egrave;cles.</p>
                              <p align="justify" class="textealacon">Sp&eacute;cialit&eacute;s&nbsp;:<br>
                                meubles en bois naturel et meubles r&eacute;gionaux.</p>
                              <p align="justify">Galerie Saint-Martin<strong> 
                                &ndash; </strong><em>&agrave; 45 mn de Brive</em><strong> 
                                - </strong>Route du ch&acirc;teau de Castelnau 
                                &ndash; Louli&eacute; &ndash; 46130 Bretenoux 
                                &ndash; t&eacute;l&nbsp;: 05-65-38-42-01 - e-mail&nbsp;: 
                                <a href="mailto:galerie.saint-martin@wanadoo.fr">galerie.saint-martin@wanadoo.fr</a>
							  <p align="justify" class="textealacon">                                <a href="#" onClick="window.open('plan46.htm','plan','width=550,height=550');">Cliquez-ici 
                                pour acc&eacute;der au plan d'acc&egrave;s</a></p></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                    </tr>
                  </table>            </td>
          </tr>
        </table></td>
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

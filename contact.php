<?php 
//+-+-+-Modif FCS-001-v1.00-1+-+-+-+
include "filtremail.php";
if (!empty($_REQUEST)) filtreMail($_REQUEST);
if (!empty($_REQUEST['sujet'])) hasNewLine($_REQUEST['sujet']);
if (!empty($_REQUEST['subject'])) hasNewLine($_REQUEST['subject']);
//+-+-+-/Modif FCS-001-v1.00-1+-+-+-+
?><?php 
include_once('includes/php-captcha.inc.php');

//connexion à la base de données
require_once("conn.php");
//recuperation des variables de langues
require_once("inc_lang.php");
/*

FORMULAIRE CONTACT IDEP MULTIMEDIA

version 1.06 du 18/10/2003

A CHANGER

$numero_de_client
$bymail (par default : contact@DomainName
$subject du mail : nom de l'entreprise
$ret_url : nom de la page de remerciement vers laquelle se fait la redirection
Mise en page (fond, entete, couleur de texte), integration si spécifique

*/


error_reporting("E_NOTICE");

$nom = $HTTP_POST_VARS['nom'];
$fond = " bgcolor=\"#ffffff\"";
//$bymail = "NO";
$bymail = "contact@galeriesaintmartin.com";
$numero_de_client = 865; //A CHANGER SELON LES CAS
if (!$numero_de_client) die('Le script n est pas configuré - Arret de l éxécution');
$ret_url = "contact.php";

if(!empty($_POST['nom']) and  PhpCaptcha::Validate($_POST['capcha'])){
	$prenom = $HTTP_POST_VARS['prenom'];
	$societe = $HTTP_POST_VARS['societe'];
	$telephone = $HTTP_POST_VARS['telephone'];
	$fax = $HTTP_POST_VARS['fax'];
	$email = $HTTP_POST_VARS['email'];
	$adresse = $HTTP_POST_VARS['adresse'];
	$cpostal = $HTTP_POST_VARS['cpostal'];
	$ville = $HTTP_POST_VARS['ville'];
	$pays = $HTTP_POST_VARS['pays'];
	$commentaire = $HTTP_POST_VARS['commentaire'];
	$fonction = $HTTP_POST_VARS['fonction'];
	$sujet = $HTTP_POST_VARS['sujet'];
	$commentaire = preg_replace ("#\r#","",$commentaire);
	$adresse = preg_replace ("#\r#","",$adresse); 
	
	$subject = "Formulaire contact Galerie Saint Martin";//A MODIFIER SELON LES CAS
	
	if (($subject=="") && ($sujet != "")) $subject=$sujet;
	if (($sujet=="") && ($subject != "")) $sujet=$subject;
	
	$sql = "INSERT INTO abonnement (dateentree, nom,prenom,societe,fonction,telephone,fax,email,adresse,cpostal,ville,pays,commentaire,clientID,sujet) ";
	$sql .= "VALUES (CURDATE(), \"$nom\",\"$prenom\",\"$societe\",\"$fonction\",\"$telephone\",\"$fax\",\"$email\",\"$adresse\",\"$cpostal\",\"$ville\",\"$pays\",\"$commentaire\",$numero_de_client,\"$sujet\");";
	$link_id = mysql_connect("mysql1.idep-multimedia.com" , "umigonda" , "cfyc" );
	$db_id = mysql_select_db("abonnement", $link_id);
	$result = mysql_db_query("abonnement" ,$sql) or die ("Invalid query");

  	mysql_close($link_id);
  	
  	if (!($bymail == "NO")){
  		$exp=preg_replace("/ /","",$email);
  		if (!preg_match("/^[0-9a-zA-Z]([0-9a-zA-Z\_\-]*[0-9a-zA-Z])?(\.[0-9a-zA-Z]([0-9a-zA-Z\_\-]*[0-9a-zA-Z])?)*@([0-9a-zA-Z]([0-9a-zA-Z\_\-]*[0-9a-zA-Z])?\.)+[a-zA-Z0-9]{2,4}$/",$exp))
  		$exp="fgrasset@idep-multimedia.com";
  		$message = "\nnom : $nom\nprenom : $prenom\n\nsociete : $societe\nfonction : $fonction\n";
  		$message .= "telephone : $telephone\nfax : $fax\nemail : $email\n\n";
  		$message .= "ADRESSE : \n$adresse\n$cpostal    $ville      $pays\n\n";
  		$message .= "Question / Commentaire :\n $commentaire";
  		mail($bymail, $subject, $message,"From: $exp");
  		$message .= "\n\nDestinataire principal :\n $bymail";
		mail("fgrasset@idep-multimedia.com", $subject, $message,"From: $exp");
  	}
	header("Location:$ret_url");
}

?>


<html>
<head>
<title>Fa&iuml;ences des XVII&egrave;me et XVIII&egrave;me si&egrave;cles, porcelaines du XIX&egrave;me si&egrave;cle</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Galerie d'art et d'antiquit&eacute;s &aacute; Paris proposant &aacute; la vente des tableaux du XIX&egrave;me et d&eacute;but XXème si&egrave;cle, du mobilier et des objets du XVII&egrave;me au début XX&egraveme si&egravecle, des fa&iuml;ences et porcelaines.">
<meta name="keywords" content="Fa&iuml;ences XVII&egrave;me, Porcelaines XVIII&egrave;me, Fa&iuml;ences XIX&egrave;me, porcelaine XVIIeme, faience XVIIeme, porcelaine XIXeme">
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
	  <p><H1>Porcelaines XVII&egrave;me, Fa&iuml;ences  XVIII&egrave;me, Porcelaines XIX&egrave;me</H1><br>
      Saint Martin est un galerie de peinture moderne de Paris doubl&eacute;e d'un magasin d'antiquites proposant &aacute; la vente : <stronG>fa&iuml;ences XVII&egrave;me</stronG>, <stronG>porcelaines XVIII&egrave;me</stronG> et <strong>fa&iuml;ences XIX&egrave;me</strong> mais &eacute;galement des objets d&eacute;coratifs, du mobilier ancien et des meubles r&eacute;gionaux du Quercy.</p>

      <p><H2>Faience et porcelaine des XVIIeme, XVIIeme ou XIXeme siecle</H2><br>
      Galeriste de Paris sp&eacute;cialis&eacute; dans la peinture moderne et la peinture fran&ccedil;aise, les objets d'art des XVIIeme au XIXeme, la Galerie Saint Martin fournit egalement porcelaine et faience du XVIIeme au XIXeme siecle.</p>

      <ul>
      <i><a href="http://www.galeriesaintmartin.com/index.php">Antiquaire paris et antiquit&eacute;s</a></i>
      <i><a href="http://www.galeriesaintmartin.com/presentation.php">Galerie peinture moderne</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=1">Tableaux impressionnistes de maitre</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=2">Mobilier ancien et meuble r&eacute;gional</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=3">Sculptures bronze chandeliers et bougeoirs</a></i>
      <i><a href="http://www.galeriesaintmartin.com/exposition_rubrique.php">Werner van Hoylandt Christine Viennet</a></i>
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
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=1">French impressionist painting</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=2">XIXth antique century french furniture</a></i>
      <i><a href="http://www.galeriesaintmartin.com/rubrique.php?type=3">French antique bronze</a></i>
      <i><a href="http://www.galeriesaintmartin.com/exposition_rubrique.php">Trompe l'oeil</a></i>
      <i><a href="http://www.galeriesaintmartin.com/produit.php">Flower oil peinting antique</a></i>
      <i><a href="http://www.galeriesaintmartin.com/en-contact.php">Antique country french table and furnitures</a></i>
      <i><a href="http://www.galeriesaintmartin.com/antique-candelabra.php">Antique candelabras, antique silver candelabra</a></i>
      <i><a href="http://www.galeriesaintmartin.com/antique-candelsticks.php">Antique candlesticks, antique silver candlestick</a></i>
      <i><a href="http://www.galeriesaintmartin.com/antique-vase.php">Antique ceramic vase, antique french vases</a></i>  
      </ul>
	</div>  
<table width="970" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="233" height="100%" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="233" height="516">
      <param name="movie" value="<?= $img_prefix?>menu2.swf">
      <param name=quality value=high>
      <embed src="<?= $img_prefix?>menu2.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="233" height="516"></embed>
      <NOEMBED>

	  </NOEMBED>       
	</object></td>
    <td height="100%" valign="top" bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><img src="charte2/titre_galerie_saint_martin.gif" width="394" height="64"></td>
      </tr>
      <tr>
        <td height="100%" align="center"><table width="550"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="soustitre"><strong>Contact</strong></td>
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
                      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                                  <td width="50%"> <p align="center" class="textealacon">Galerie 
                                      Saint-Martin &ndash; PARIS 75006<br>
                                      5 et 11 rue des Saints-P&egrave;res -<br>
                                      t&eacute;l : 01-42-60-83-65<br>
                                      fax&nbsp;: 01-42-60-44-19</p>
                                    <p align="center" class="textealacon"><a href="#" onClick="window.open('plan75.htm','plan','width=550,height=550');"><img src="images/cartouche75.gif" width="230" height="100" border="0"></a></p></td>
                          <td><p align="center" class="textealacon">Galerie Saint-Martin<strong> 
                                      &ndash; 46130 Bretenoux<br>
                                      </strong><em>&agrave; 45 mn de Brive<strong></strong></em><strong>- 
                                      </strong>Route du ch&acirc;teau de Castelnau 
                                      &ndash; Louli&eacute; <br>
                                      t&eacute;l&nbsp;: 05-65-38-42-01</p>
                                    <p align="center" class="textealacon"><a href="#" onClick="window.open('plan46.htm','plan','width=550,height=550');"><img src="images/cartouche46.gif" width="230" height="100" border="0"></a></p></td>
                        </tr>
                      </table>                        
                        <br>
                        <table border="0" align="center" cellpadding="0" cellspacing="0">
                          <form method="POST" action="<?=$_SERVER['PHP_SELF']?>" onsubmit="return(test_form(this));" target="_self">
                            <tr>
                              <td valign="top">&nbsp;</td>
                              <td valign="top">&nbsp;</td>
                              <td valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" valign="top">Pour toute demande de renseignements ou suggestions sur notre site, n'h&eacute;sitez pas &agrave; nous contacter, <br>
        nous vous r&eacute;pondrons dans les plus brefs d&eacute;lais.</td>
                            </tr>
<!--
                            <tr>
                              <td valign="top">&nbsp;</td>
                              <td valign="top">&nbsp;</td>
                              <td valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td valign="top"><table border="0" cellspacing="0" cellpadding="2">
                                  <tr>
                                          <td>Nom*&nbsp;:</td>
                                    <td><input type="text" name="nom" size="24"  class="FORULAIRE">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Pr&eacute;nom&nbsp;:</td>
                                    <td><input name="prenom" type="text"  class="FORULAIRE" id="prenom" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Soci&eacute;t&eacute;&nbsp;:</td>
                                    <td><input name="societe" type="text"  class="FORULAIRE" id="societe" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>T&eacute;l&eacute;phone*&nbsp;: 
                                          </td>
                                    <td><input name="telephone" type="text"  class="FORULAIRE" id="telephone" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Fax&nbsp;:</td>
                                    <td><input name="fax" type="text"  class="FORULAIRE" id="fax" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Email*&nbsp;:</td>
                                    <td><input name="email" type="text"  class="FORULAIRE" id="email" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Adresse&nbsp;:</td>
                                    <td rowspan="2"><b>
                                      <textarea rows="2" name="adresse" cols="26"  class="FORULAIRE"></textarea>
                                    </b></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                              </table></td>
                              <td valign="top">&nbsp;&nbsp;</td>
                              <td valign="top"><table border="0" cellspacing="0" cellpadding="2">
                                  <tr>
                                          <td> Code&nbsp;Postal&nbsp;:</td>
                                    <td><input name="cpostal" type="text"  class="FORULAIRE" id="cpostal" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td> Ville&nbsp;:</td>
                                    <td><input name="ville" type="text"  class="FORULAIRE" id="ville" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td> Pays&nbsp;:</td>
                                    <td><input name="pays" type="text"  class="FORULAIRE" id="pays" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Commentaire&nbsp;:</td>
                                    <td rowspan="2"><textarea rows="3" name="commentaire" cols="26"  class="FORULAIRE"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td><br>
							<img src="capatcha.php" />
							<br>
							Code : <input type="text" name="capcha" id="capcha" />
							<br>
							<br><input type="submit" value="Envoyer" name="B1"  class="FORULAIRE"></td>
                                          <td align="right"><input type="reset" value="R&eacute;tablir" name="B2"  class="FORULAIRE">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="2">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><div align="right">*les champs marqu&eacute;s d'une * sont obligatoires<br>
                                            </div></td>
                                  </tr>
                              </table></td>
                            </tr>
-->
                          </form>
                        </table>
                        <br>
                            </td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
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
<map name="Map">
  <area shape="rect" coords="86,481,169,510" href="#" onclick="window.print()">
</map>
</body>
</html>

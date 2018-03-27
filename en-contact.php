<?php 
//+-+-+-Modif FCS-001-v1.00-1+-+-+-+
include "filtremail.php";
if (!empty($_REQUEST)) filtreMail($_REQUEST);
if (!empty($_REQUEST['sujet'])) hasNewLine($_REQUEST['sujet']);
if (!empty($_REQUEST['subject'])) hasNewLine($_REQUEST['subject']);
//+-+-+-/Modif FCS-001-v1.00-1+-+-+-+
?><?php
session_start();

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
$ret_url = "en-contact.php";

if (!($nom == "")){
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
	$commentaire = preg_replace ("/\r/","",$commentaire);
	$adresse = preg_replace ("/\r/","",$adresse); 
	
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
<title>Antique Country French Table - Galerie Saint-Martin, Antique french furniture</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Dealer of antique french furnitures, old masters paintings, antique country french tables and objects of art XVIIth to early XXst.">
<meta name="keywords" content="Antique country french table, antique french furniture">
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

<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#3D6D40" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div class="cyc">
<p><br>
              
<p> 
	  <p><H1><a href="http://www.galeriesaintmartin.com/index.php">Antique French Founiture</a> by a dealer of <a href="http://www.galeriesaintmartin.com/curiosite.php">antiques country tables</a> in Paris</H1><br>
	  Saint Martin is a gallery specialized in <a href="http://www.galeriesaintmartin.com/antique-candlesticks.php">antique country</a> and <a href="http://www.galeriesaintmartin.com/antique-vase.php">french tables</a> in the marvellous town of Paris. You can find old masters oil paintings and works of fench artists and works of the Barbizon painters.</p>

      <p><H2>Antique french furniture</H2><br>
      Fine art gallery in Paris selling XIXth to early XXst paintings, dealer of furniture and objects of art XVIIth to early XXst, antique country furniture and fine pieces of furniture.</p>

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
    <td height="100%" valign="top" bgcolor="#F8E4C9"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" bgcolor="#FFFFFF"><img src="charte2/titre_galerie_saint_martin.gif" width="394" height="64"></td>
      </tr>
      <tr>
        <td height="100%" align="center" bgcolor="#FFFFFF"><table width="550"  border="0" cellspacing="0" cellpadding="0">
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
                                  <td width="50%">
<p align="center" class="textealacon">Galerie Saint-Martin 
                                      &ndash; PARIS 75006<br>
                                      5 et 11 rue des Saints-P&egrave;res -<br>
                                      phone l : 01-42-60-83-65<br>
                                      facsimile&nbsp; &nbsp;: 01-42-60-44-19</p>
                                    <p align="center" class="textealacon"><a href="#" onClick="window.open('plan75.htm','plan','width=550,height=550');"><img src="images/en_cartouche75.gif" width="230" height="100" border="0"></a></p></td>
                          <td><p align="center" class="textealacon">Galerie Saint-Martin<strong> 
                                      &ndash; 46130 Bretenoux<br>
                                      </strong><em>&agrave; 45 mn de Brive<strong></strong></em><strong>- 
                                      </strong>Route du ch&acirc;teau de Castelnau 
                                      &ndash; Louli&eacute; <br>
                                      phone &nbsp;: 05-65-38-42-01</p>
                                    <p align="center" class="textealacon"><a href="#" onClick="window.open('plan46.htm','plan','width=550,height=550');"><img src="images/en_cartouche46.gif" width="230" height="100" border="0"></a></p></td>
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
                                    <td colspan="3" valign="top">For any request 
                                      on our website, do not hesitate to contact 
                                      us ; we will answer you as soon as possible.</td>
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
                                          <td>Name*&nbsp;:</td>
                                    <td><input type="text" name="nom" size="24"  class="FORULAIRE">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Surname&nbsp;:</td>
                                    <td><input name="prenom" type="text"  class="FORULAIRE" id="prenom" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Company&nbsp;:</td>
                                    <td><input name="societe" type="text"  class="FORULAIRE" id="societe" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Telephone*&nbsp;: </td>
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
                                          <td>&nbsp;Address&nbsp;:</td>
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
                                          <td> Zip&nbsp;Code&nbsp;:</td>
                                    <td><input name="cpostal" type="text"  class="FORULAIRE" id="cpostal" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td> Town&nbsp;:</td>
                                    <td><input name="ville" type="text"  class="FORULAIRE" id="ville" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td> Country&nbsp;:</td>
                                    <td><input name="pays" type="text"  class="FORULAIRE" id="pays" size="24">
                                    </td>
                                  </tr>
                                  <tr>
                                          <td>Comment&nbsp;:</td>
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
                                          <td><input type="submit" value="Send" name="B1"  class="FORULAIRE"></td>
                                          <td align="right"><input type="reset" value="Cancel" name="B2"  class="FORULAIRE">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="2">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><div align="right">                *fields marqued by a * are required.</div></td>
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
</body>
</html>

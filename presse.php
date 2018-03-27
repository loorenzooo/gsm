<?
include_once('requete2.php');  
include_once "inc-config.php";  

$dblink = new mylink ;
$dblink->conn("mysql1.idep-multimedia.com", "umigonda", "cfyc", "marie_demange");

$res = new myres ; 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Artiste contemporain Paris, artiste peintre contemporain</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="La galerie d'art Marie Demange située sur Paris propose un large choix d'oeuvre d'art contemporain et moderne. Elle promeut des artiste contamporain de Paris et des artiste peintre contemporain.">
<meta name="keywords" content="Marie Demange, Paris, Marais, Galerie Marie Demange, artiste, artistes, contemporain, peintre, artiste peintre, peintre contemporain, artiste contemporain, artistes peintres, peintres contemporain, artistes contemporain, artiste peintre paris, artiste contemporain paris, peintre contemporain paris, artiste peintre contemporain paris, artites peintres contemporain paris">
<meta name="abstract" content="Galerie location d'oeuvre d'art Paris">
<meta name="ressource-type" content="document">
<meta name="subject" content="Galerie location d'oeuvre d'art">
<meta name="category" content="Galerie location d'oeuvre d'art">
<meta name="robots" content="index,follow,all">
<meta name="revisit-after" content="30 days">
<meta name="author" lang="fr" content="IDEP Multimedia http://www.idep-multimedia.com">
<meta name="publisher" content="IDEP Multimedia - http://www.idep-multimedia.com">
<meta name="owner" content="Marie Demange">
<meta name="organization" content="Marie Demange">
<meta name="location" content="france">
<meta name="page-topic" content="internet">
<meta name="copyright" content="IDEP Multimedia">
<meta name="reply-to" content="">
<meta name="Identifier-URL" content="http://www.galerie-mariedemange.com">
<meta name="language" content="FR">
<meta name="classification" content="Galerie location d'oeuvre d'art">
<meta name="rating" content="General">
<meta name="distribution" content="Global">
<meta name="audience" content="all">
<meta name="expires" content="never">
<meta name="submission" content="celia">

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="style_demange2.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/charte/galerie_ovr.gif','images/charte/location_ovr.gif','images/charte/evenement_ovr.gif','images/charte/deco_ovr.gif','images/charte/accueil_ovr.gif','images/charte/agenda_ovr.gif','images/charte/presse_ovr.gif','images/charte/contact_ovr.gif')">
<table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="60" colspan="3"><img src="images/charte/10x10.gif" width="10" height="60"></td>
  </tr>
  <tr> 
    <td width="463" height="57" align="left" valign="top"><img src="images/charte/demange.gif" width="463" height="57"></td>
    <td colspan="2" align="right"> <script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
				<noscript>
				<h1>Marie Demange expose les oeuvres d'artiste contemporain et artiste peintre sur Paris.</h1>
				<p><b>Découvrez la galerie d'art de Marie Demange dans le quartier des Marais sur Paris. Cette galerie d'art de Paris met en avant des artistes peintre contemporain et autre artiste contemporain.</b><br>
				<a href="index.html" title="Galerie d'art contemporain Paris">Galerie d'art contemporain Paris</a>
				<a href="accueil_marie_demange.php" title="Marie Demange Galerie Paris">Marie Demange Galerie Paris</a>
				<a href="agenda.php" title="Organisation animation evenementiel Paris">Organisation animation evenementiel Paris</a>
				<a href="presse.php" title="Artiste peintre contemporain Paris">Artiste peintre contemporain Paris</a>
				<a href="contact.php" title="Communication evenementiel Paris">Communication evenementiel Paris</a>
				<a href="galerie.php" title="Galerie Tableau d'art Moderne Paris">Galerie Tableau d'art Moderne Paris</a>
				<a href="location.php" title="Location d'oeuvre d'art Paris">Location d'oeuvre d'art Paris</a>
				<a href="evenement.php" title="Exposition art contemporain Paris">Exposition art contemporain Paris</a>
				<a href="decoration.php" title="Tableau peintre art moderne Paris">Tableau peintre art moderne Paris</a>
				<a href="merci.htm" title="Organisation exposition peinture Paris">Organisation exposition peinture Paris</a>
				<a href="artistes.php" title="Oeuvre d'art contemporain Paris">Oeuvre d'art contemporain Paris</a>
				<h2><p>Marie Demange accueille des artistes contemporain et artiste peintre contemporain sur Paris.</p></h2>
				</noscript> 

 <body onLoad="MM_preloadImages('../images/charte/presse_ovr.gif','../images/charte/agenda_ovr.gif','../images/charte/accueil_ovr.gif')"> 
      <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><img src="images/charte/10x10.gif" width="10" height="10"></td>
          <td><img src="images/charte/puce_verte.gif" width="7" height="12"></td>
          <td><a href="accueil_marie_demange.php" onMouseOver="MM_swapImage('Image5','','images/charte/accueil_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"> 
            </a><img src="images/charte/10x10.gif" width="5" height="10" border="0"><a href="accueil_marie_demange.php" onMouseOver="MM_swapImage('Image5','','images/charte/accueil_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/accueil.gif" name="Image5" width="34" height="12" border="0" id="Image5"></a></td>
          <td><img src="images/charte/puce_verte.gif" width="7" height="12"></td>
          <td><img src="images/charte/10x10.gif" width="5" height="10" border="0"><a href="agenda.php" onMouseOver="MM_swapImage('Image6','','images/charte/agenda_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/agenda.gif" name="Image6" width="32" height="12" border="0" id="Image6"></a></td>
          <td><img src="images/charte/puce_verte.gif" width="7" height="12"></td>
          <td><img src="images/charte/10x10.gif" width="5" height="10" border="0"><a href="presse.php" onMouseOver="MM_swapImage('Image7','','images/charte/presse_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/presse_ovr.gif" name="Image7" width="29" height="12" border="0" id="Image7"></a></td>
          <td><img src="images/charte/puce_verte.gif" width="7" height="12"></td>
          <td><img src="images/charte/10x10.gif" width="5" height="10" border="0"><a href="contact.php" onMouseOver="MM_swapImage('Image8','','images/charte/contact_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/contact.gif" name="Image8" width="34" height="12" border="0" id="Image8"></a></td>
          <td width="10"><img src="images/charte/10x10.gif" width="10" height="10"></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td width="463" height="43" align="left" valign="top"><img src="images/charte/filets.gif" width="463" height="43"></td>
    <td align="left" valign="top"> <!-- #BeginLibraryItem "/Library/menu1.lbi" --><table width="267" border="0" cellspacing="0" cellpadding="0">
        <tr align="left" valign="top"> 
          
    <td width="48"><a href="galerie.php" onMouseOver="MM_swapImage('Image1','','images/charte/galerie_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/galerie.gif" name="Image1" width="45" height="18" border="0" id="Image1"></a></td>
          <td width="11"><img src="images/charte/tiret.gif" width="11" height="18"></td>
          
    <td width="52"><a href="location.php" onMouseOver="MM_swapImage('Image2','','images/charte/location_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/location.gif" name="Image2" width="52" height="18" border="0" id="Image2"></a></td>
          <td width="11"><img src="images/charte/tiret.gif" width="11" height="18"></td>
          
    <td width="63"><a href="evenement.php" onMouseOver="MM_swapImage('Image3','','images/charte/evenement_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/evenement.gif" name="Image3" width="63" height="18" border="0" id="Image3"></a></td>
          <td width="11"><img src="images/charte/tiret.gif" width="11" height="18"></td>
          
    <td width="71"><a href="decoration.php" onMouseOver="MM_swapImage('Image4','','images/charte/deco_ovr.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/charte/deco.gif" name="Image4" width="71" height="18" border="0" id="Image4"></a></td>
        </tr>
      </table><!-- #EndLibraryItem --> 
      <div align="right"></div></td>
    <td width="10" rowspan="2"><img src="images/charte/10x10.gif" width="10" height="10"></td>
  </tr>
  <tr> 
    <td width="463" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="center" valign="top"><img src="images/charte/img_presse.jpg" width="222" height="222"></td>
          <td width="66" align="right" valign="top"><img src="images/charte/10x10.gif" width="66" height="200"></td>
        </tr>
      </table></td>
    <td align="left" valign="top" class="textegris"><table width="100%" height="222" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="260" align="left" valign="top"> 
            <p class="lien-gris"><span class="textevert">DOSSIER 
              DE PRESSE MARIE DEMANGE</span><br>
             <?php
			 if(file_exists($dir_upload."/dossier_presse.doc"))
			 {
			 ?>
			 
			  &#8226; <a href="download.php?fichier=dossier_presse.doc" class="lien-gris"><img src="images/charte/ico_doc.gif" width="18" height="18" border="0" align="absmiddle">T&eacute;l&eacute;charger 
              en word</a>
			  <?php
			  }
			  ?>
			  <br>
			   <?php
			 if(file_exists($dir_upload."/dossier_presse.doc"))
			 {
			 ?>
              &#8226;<a href="<?=$dir_upload?>/dossier_presse.doc" class="lien-gris"> 
			 <img src="images/charte/consulter.gif" width="9" height="12" border="0" align="absmiddle"> Consulter en word</a>              
			  <?php
			  }
			  ?>
			  <br>
			    <?php
			 if(file_exists($dir_upload."/dossier_presse.pdf"))
			 {
			 ?>
              &#8226; <a href="download.php?fichier=dossier_presse.pdf" class="lien-gris"><img src="images/charte/ico_pdf.gif" width="18" height="18" border="0" align="absmiddle">T&eacute;l&eacute;charger 
              en  pdf</a>
			 <?php
			}
			?><br>
			   <?php
			 if(file_exists($dir_upload."/".$row->fichier_pdf) AND $row->fichier_pdf!="")
			 {
			 ?>
            <a href="download.php?fichier=<?=$row->fichier_pdf?>" class="lien-gris">&#8226; </a><a href="<?=$dir_upload?>/dossier_presse.pdf" class="lien-gris"><img src="images/charte/consulter.gif" width="9" height="12" border="0" align="absmiddle"> &nbsp;Consulter en  pdf</a>            </p>
            <?php
			}
			?>
			<p><span class="textevert"> COMMUNIQU&Eacute;S DE PRESSE DISPONIBLES</span><br>
              <span class="textegris">
              <?
	  $req = "select * from presse order by ordre";
	  $res->sel( $req);
	  while( $row = $res->objfetch()) {
	  ?>
              </span>
              <span class="textegris">
              <?=stripslashes( $row->date_communique)?>
               <br>
              <?=stripslashes( $row->titre)?> 
              <br>
              <span class="lien-gris">
			  <?php
			  //telecharger en word
			 if(file_exists($dir_upload."/".$row->fichier_word) AND $row->fichier_word!="")
			 {
			 ?>
			  &#8226; <a href="download.php?fichier=<?=$row->fichier_word?>" class="lien-gris"><img src="images/charte/ico_doc.gif" width="18" height="18" border="0" align="absmiddle">T&eacute;l&eacute;charger en  word</a>
			  <?php
			  }
			  
			 //consulter en word 
			 if(file_exists($dir_upload."/".$row->fichier_word) AND $row->fichier_word!="")
			 {
			 ?>
			  <br>
			  
              &#8226; <a href="<?="$dir_upload/$row->fichier_word"?>" class="lien-gris"><img src="images/charte/consulter.gif" width="9" height="12" border="0" align="absmiddle"> Consulter en word</a> 
			 <?php
			 }
			 
			 //telecharger en pdf
			 if(file_exists($dir_upload."/".$row->fichier_pdf) AND $row->fichier_pdf!="")
			 {
			 ?>
			  <br>
			  &#8226; <a href="download.php?fichier=<?=$row->fichier_pdf?>" class="lien-gris"><img src="images/charte/ico_pdf.gif" width="18" height="18" border="0" align="absmiddle">&nbsp;T&eacute;l&eacute;charger en  pdf</a>
			   <?php
			   }
			  
			  //consulter en pdf
			 if(file_exists($dir_upload."/".$row->fichier_pdf) AND $row->fichier_pdf!="")
			 {
			 ?>
			   <br>
			  &#8226; <a href="<?="$dir_upload/$row->fichier_pdf"?>" class="lien-gris"><img src="images/charte/consulter.gif" width="9" height="12" border="0" align="absmiddle"> &nbsp;Consulter en pdf</a></span> </span><br>
				<?php
				}
				?>
				<br>
<?php } // fin boucle communiqué de presse?>

          </td>
          <td width="10" align="right" valign="top"><img src="images/charte/10x10.gif" width="10" height="10"></td>
          <td align="right" valign="top" class="textegrisartistes">&nbsp;</td>
        </tr>
        <tr> 
          <td width="260" valign="bottom"><img src="images/charte/slogan.gif" width="243" height="21"></td>
          <td>&nbsp;</td>
          <td align="right" valign="bottom"><img src="images/charte/adresse.gif" width="115" height="29"></td>
        </tr>
      </table>
      <p class="lien-gris">&nbsp;</p>
      </td>
  </tr>
  <tr> 
    <td width="463" height="26">&nbsp;</td>
    <td height="26" colspan="2" align="left" valign="bottom">&nbsp; </td>
  </tr>
</table>
<script language="javascript">
document.write('<img src="http://www.idep-multimedia.com/JSstats.php?siteid=601&ref='+document.referrer+'" border="0">');
</script>
</body>
</html>

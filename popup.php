<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Galerie St Martin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function resize()
{
	
	var o=document.getElementById("im1");
	
	window.resizeTo(o.width+18,o.height+100);
	window.moveTo(0,0);
	window.focus();
	return;
}
</script>
<link href="saint_martin.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="javascript:resize();">

<div align="center"> 
  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="background-repeat:repeat-x">
    <tr>
      <td align="center" valign="top"><table width="100%" height="100%" cellpadding="0" cellspacing="0">
          <tr> 
            <td height="49" align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><img src="<?=$_GET['img']?>" border="0" id="im1" style="border-color:#999999"> <br>
                <a href="#" class="legende" onClick="javascript:window.close();">Fermer 
            la page </a></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
</body>
</html>


<?php
        /***************************************/
        /*       Cindy PONCIN - 29/08/2005     */
        /***************************************/

        require_once ("conn.php");
        session_start();
        
        $msg = '';
        $login = '';
        $pwd = '';
        if (isset($_POST['login']))
        	$login = $_POST['login'];
        if (isset($_POST['pwd']))
        	$pwd = $_POST['pwd'];
                
        if ( isset($login) && $login != '' && $pwd != '') {
                // Formatage des données reèues
                $login = trim( $login);
                $pwd = trim( $pwd);

                $rs = new myres;
                // On cherche dans la tables des contrats CESAMWEB si le user existe
                $req = "select * from users where ";
                $req .= " login  = '$login'";
                $req .= " and pwd = '$pwd'";
                $rs->sel($req);
                 // $rs->report();

                if ( $user = $rs->objfetch()) { // Le user est ok
                        if ( $login == $user->login && $pwd = $user->pwd) {
                                $_SESSION['user'] = $user;
                                header( "Location: accueil.php");
                        } else $msg = "<br><span class=\"txt12rouge\">Les données saisies sont
erronées.</span><br>";
                } else { // Erreur de connexion
                        $msg = "<br><span class=\"txt12rouge\">Les données saisies sont
erronées.</span><br>";
                } // fin test user
        } // fin login
?>
<html>

<head>

<title>Gallerie St Martin</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../style.css" rel="stylesheet" type="text/css">
</head>



<body>
<table class="cadre-gris" width="33%"  border="0" align="center" cellpadding="0"
cellspacing="0">
  <tr>
    <td align="left" valign="top"><?=$msg?>
        <table width="99%"  border="0" cellspacing="5" cellpadding="5">
          <tr>
            <td><form name="form1" method="post" action="index.php">
                <p class="texte"><br>
                    <span class="txtCatalogue"><strong>Veuillez vous identifier
:</strong></span><br>
                    <br>
                </p>
                <table  border="0" cellspacing="5" cellpadding="0">
                  <tr class="texte">
                    <td class="txtCatalogue"><strong>Login</strong></td>
                    <td><input name="login" type="text" class="champ-texte"
id="login"></td>
                  </tr>
                  <tr class="texte">
                    <td class="txtCatalogue"><strong>Mot de passe </strong></td>
                    <td><input name="pwd" type="password" class="champ-texte"
id="pwd"></td>
                  </tr>
                  <tr class="texte">
                    <td class="texte">&nbsp;</td>
                    <td><input name="Submit" type="submit" class="bouton"
value="Connexion"></td>
                  </tr>
                </table>
            </form></td>
          </tr>
        </table>
        <p class="texte">&nbsp;</p></td>
  </tr>
</table>
</body>
</html>


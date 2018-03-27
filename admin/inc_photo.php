<?php
function rename_file($nom)
{
	$nom=preg_replace("/[����]/","e",$nom);
	$nom=preg_replace("/[���]/","a",$nom);
	$nom=preg_replace("/[��]/","i",$nom);
	$nom=preg_replace("/[��]/","o",$nom);
	$nom=preg_replace("/[�]/","c",$nom);
	$nom=preg_replace("/[��]/","u",$nom);
	$nom=preg_replace("/[ ,~;:]/","_",$nom);
	return (strtolower($nom));
}

function create_resized($upload_field,$data,$nom="")
{
global $msg_upload;
	/*
	Le tableau data contient les donn�es de redimentionnement de l'image.
	$data[$i]['repertoire'] contient le r�pertoire destination
	$data[$i]['aspect'] = 0 ou 1. Si 1, le redimentionnement se fait a proportion d'une des tailles
	$data[$i]['sizex'] taille x de redimentionnent
	$data[$i]['sizey'] taille y de redimentionnent
	avec $i = 1..n.
	*/
	//echo "image resized<br>";
	if (!$data[1]) return; // aucune d�finition de destination
	if(!$_FILES[$upload_field]['name']) return;
	$repertoire1=$data[1]['repertoire'];
	$destfile="tmp123456789123";
	//echo $_FILES[$upload_field]['tmp_name'];
	if($nom==""){
	$destname=rename_file($_FILES[$upload_field]['name']);
	}else{
	$destname=$nom;
	}
	//Test de l'extension
	$path_parts = pathinfo($_FILES[$upload_field]['name']);
	if(preg_match("/jpe?g/",$path_parts["extension"])){
	//echo($path_parts["extension"]);
	//Envoi de l'image
	if (!move_uploaded_file($_FILES[$upload_field]['tmp_name'], $repertoire1. $destfile)) die("Impossible de copier ".$HTTP_POST_FILES['userfile']['tmp_name']." vers ".$repertoire1. $destfile);
	if($nom==""){
	$destname=rename_file($_FILES[$upload_field]['name']);
	}else{
	$destname=$nom;
	}
	$a=getimagesize($repertoire1. $destfile);
	$ratio=$a[0]/$a[1];
	$im2=imagecreatefromjpeg($repertoire1. $destfile);
	$i=1;
	while ($data[$i])
	{
		//echo "cr�ation image $i<br>";
		$aspect=$data[$i]["aspect"];
		$repertoire=$data[$i]["repertoire"];
		$sizex=$data[$i]["sizex"];
		$sizey=$data[$i]["sizey"];
		if ($aspect!=1)
		{
			if ((!$sizex)||(!$sizey)) $aspect=1;
		}
		if ($aspect==1)
		{

			if ($sizex) {$sizey=floor($sizex/$ratio);}
			else
			{
				$sizex=floor($sizey*$ratio);
			}
		}
		$im= imagecreatetruecolor($sizex,$sizey);
		imagecopyresampled ( $im, $im2, 0, 0, 0, 0, $sizex, $sizey, $a[0], $a[1]);
        imageJPEG($im,$repertoire . $destname);
		//echo ("<br>Image cr��e : $repertoire$destname");
		imagedestroy($im);
		$i++;
	}
	unlink($repertoire1."/".$destfile);
	$msg_upload="L'image a �t� envoy�e avec succ�s !";
	return $destname;
	//renvoie le nom de l'image cr��e.
	}else{
	$msg_upload="Echec de l'envoi de l'image, format incorrect (jpeg ou jpg obligatoire) !";
	}
}

function list_dir($path)
{
	$handle=opendir($path);
	if (!$handle) return;
	while($fichier=readdir($handle))
	{
		//echo("$repertoire$subdir$fichier : ".is_dir("$repertoire$subdir$fichier")."<br>");
		if(!is_dir("$path$fichier")&&($fichier!=".")&&($fichier!="..")) 
		{
			$listfic[]=$fichier;
		}
	}
	sort($listfic);
	closedir($handle);
	return $listfic;
	
}?>
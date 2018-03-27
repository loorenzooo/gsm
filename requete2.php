<?php
class mylink {

	public function conn($server, $user, $pass, $database){
		$res = mysql_connect($server, $user, $pass);
		mysql_select_db($database, $res);
	}

}

class myres {

	var $rs;
	var $err;
	var $nb_aff;

	public function sel($sql){
		$this->rs = mysql_query($sql);
		if (! $this->rs) {
			$this->err = mysql_error();
			$this->nb_aff = 0;
		}else {
			$this->nb_aff = mysql_num_rows($this->rs);
		}
		return($this->rs);
	}

	public function exe($sql){
		return(mysql_query($sql));
	}
	
	public function sel_once($sql){
		$this->sel($sql);
		return $this->fetch();
	}

	public function fetch(){
		return mysql_fetch_assoc($this->rs);
	}

	public function free(){
		return (mysql_free_result($this->rs));
	}
	
	public function objfetch(){
		return (mysql_fetch_object($this->rs));
	}

}

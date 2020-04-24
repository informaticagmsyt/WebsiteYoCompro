<?php
	function conectar(){
		$enlace = pg_connect("host='localhost' dbname=gobcojedes port=5432 user=postgres password=aed09f75aa");
		return $enlace;
	}	
?>

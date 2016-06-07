<?php 
	/**
	* 
	*/
	class DieKlasse
	{
		public static $eins="eins";
		var $zwei = 2;
		function __construct()
		{
			# code...
		}
	}
	$klasse = "Die"."Klasse";
	$test = new $klasse;

	//---------------------- delete from here
	echo "<pre>";
	var_dump( $test );
	echo "</pre>";
	//---------------------- delete to here

	echo DieKlasse::$eins;
 ?>
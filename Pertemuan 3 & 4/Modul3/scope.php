<?php 
	error_reporting(0);
	$GLOBALS['varGlobal'] = 18;

	function testvar()
	{
		$varLokal = 1;
		echo "<p> test variable dalam function.</p>";
		echo "Variable global : ".$GLOBALS['varGlobal'];
		echo "<br>";
		echo "Variable lokal : $varLokal ";
		echo "<br>";
	}	

	testvar();

		echo "<p> test variabel didalam function. </p>";
		echo "Variable global : $varGlobal";
		echo "<br>";
		echo "Variable lokal : $varLokal ";
		echo "<br>";
?>
	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>
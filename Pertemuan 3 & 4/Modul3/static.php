<?php 
	function varStatic() {
		static $x = 1;
		echo $x;
		$x++;
		echo "</br>";
	}

	varStatic();
	varStatic();
	varStatic();
?>
	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>
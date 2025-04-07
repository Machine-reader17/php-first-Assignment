<html>
	<head>

	</head>
	<body>
	<?php
	$GLOBALS ['ranstring'] = "Oranges";
	
	function Concat_string(string $str) :string {
		$num = 1;
		global $ranstring;
		$result = $num ." ". strtolower($ranstring);
		return $result . '<br>';
	}
	echo Concat_string("any string");

	function increment() :int {
		static $num1 = 4;
		$num1 += 2;
		return $num1 ;
	}

	echo increment();
	echo '<br>';
	echo increment();
	echo '<br>';
	echo increment();

    ?>
	</body>
</html>



<?php
	class DaysofWeek{
		
		function get_this() {
			$arr3 = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
			$arrlength = count($arr3);
			for($x = 0; $x < $arrlength; $x++) {
				echo $arr3[$x];
				echo "<br>";
			}
		}
		
	}


?>
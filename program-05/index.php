<?php
  header('Content-Type: text/html; charset=iso-8859-1');
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-05 folder
        </title>
		<script type="text/javascript" src="./program-03.js"></script>
    </head>
    <body>
        <hr>
		<?php
        echo "<h1>Welcome to PHP!</h1>";
		?> 
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #01</h3>
			<?php
			$name = "Jawad Jalo";
			$x = 3.14 * (33 * 33);
			echo "<h2>$name</h2>";
			echo "The results for 3.14 * (33 * 33):</br>";
			echo "<h3> $x </h3>";
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #02</h3>
			<?php
			$o2 = 1;
			$p2 = 2;
			$q2 = "Global String 1";
			$r2 = "Global String 2";
			function req2() {
				global $o2,$p2,$q2,$r2;
				$s2 = 3;
				$t2 = 4;
				$u2 = "Local String 1";
				$v2 = "Local String 2";
				echo "<p>Here are my global variables:</p>";
				echo "<p>Global Number Variable o is: $o2</p>";
				echo "<p>Global Number Variable p is: $p2</p>";
				echo "<p>Global String Variable q is: $q2</p>";
				echo "<p>Global String Variable r is: $r2</p>";
				echo "</br>";
				echo "<p>Here are my local variables:</p>";
				echo "<p>Local Number Variable s is: $s2</p>";
				echo "<p>Local Number Variable t is: $t2</p>";
				echo "<p>Local String Variable u is: $s2</p>";
				echo "<p>Local String Variable v is: $s2</p>";
				$o2++;
				$p2++;
			}
			function req2a(){ 
				static $x2 = 0;
				static $y2 = 0;
				echo "<p>Static Variable x is: $x2</p>";
				echo "<p>Static Variable y is: $y2</p>";
				$x2++;
				$y2++;
			}
			req2();
			echo "</br>";
			echo "<p>Here are my static variables:</p>";
			req2a();
			req2a();
			req2a();
			echo "<p>I have messaged each operation to the user</p>";
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #03</h3>
			<?php 
			include 'DaysofWeek.php';
			$obj = new DaysofWeek;
			$obj->get_this();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #04</h3>
			<?php
			function req4(){ 
			$str3a = "ABCDEFGHIJKLMNOPQRSTUVWXYZ JavaScript and PHP are so much fun!";
			echo "The original string: ".$str3a."</br>";
			$str3b = strlen($str3a);
			$str3c = str_word_count($str3a);
			$str3d = strpos($str3a, "PHP");
			$str3e = str_replace("so much fun","wonderful",$str3a);
			echo "<p>The length of the string is $str3b</p>";
			echo "<p>The word count of the string is $str3c</p>";
			echo "<p>The position of PHP in the string is $str3d</p>";
			echo "<p>Replacing so much fun with wonderful in the string is $str3e</p>";
			}
			req4();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #05</h3>
			<?php 
			function req5(){
				$str5 = "JavaScript and PHP are so much fun!";
				$str5a = explode(' ',$str5);
				//print_r(explode('',$str5,2));
				echo "The string as an array seporated on white spaces:</br>";
				foreach ($str5a as $value) {
					echo $value.", " ;
				}
				echo "<br>";
			}
			req5();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #06</h3>
			<?php 
			function myfunction6($v1,$v2)
			{
			return $v1 . " " . $v2;
			}
			function req6(){
				$arr6 = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
				$str6a = array_reduce($arr6,"myfunction6");
				echo "An array converted to a string is:</br> $str6a";
			}
			req6();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #07</h3>
			<?php 
			function req7(){
				global $o2,$p2,$q2,$r2;
				echo "This is a sentence using a global from #2 ".$q2."</br>";
				echo "This is a sentence using another global from #2 ".$r2;
			}
			req7();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #08</h3>
			<?php 
			function req8(){
				$str8 = "JavaScript and PHP are so much fun!";
				echo "Requirement 8a <br>";
				echo count_chars($str8,3);
				echo "<br>";
				echo "Requirement 8b <br>";
				echo count_chars($str8,4);
				echo "<br>";
				echo "Requirement 8c <br>";
				print_r(count_chars($str8,1));
				echo "<br>";
				echo "Requirement 8d completed. <br>";
			}
			req8();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #09</h3>
			<?php 
			function req9(){
				$str9 = htmlentities("<&¢£¥€©>");
				echo $str9;
			}
			req9();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #10</h3>
			<?php 
			function req10(){
				$str10 = "JavaScript and PHP are so much fun!";
				$str10a = str_shuffle($str10);
				echo "The original string: JavaScript and PHP are so much fun!</br>";
				echo "A string shuffled up: $str10a";
			}
			req10();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #11</h3>
			<?php 
			function req11(){
				$str11 = "JavaScript and PHP are so much fun!";
				$str11a = ucwords($str11);
				echo "The original string: JavaScript and PHP are so much fun!</br>";
				echo "First letter of each word upper case: $str11a";
			}
			req11();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #12</h3>
			<?php 
			function req12(){
				$str12 = "JavaScript and PHP are so much fun!";
				$str12a = preg_split('/\s+/', $str12, -1, PREG_SPLIT_NO_EMPTY);//str_split($str12);
				echo "The original string: JavaScript and PHP are so much fun!</br>";
				echo "The string split into each word:</br>";
				foreach($str12a as $value) {
					echo "$value <br>";
				}
			}
			req12();
			?>
        </div>
    </body>
</html>
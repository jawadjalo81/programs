<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-06
        </title>
    </head>
    <body>
        <hr>
        <h1>  program-06 </h1>
			<?php
			define("planet1", "Mercury");
			define("planet2", "Venus");
			define("planet3", "Earth");
			define("planet4", "Mars");
			define("planet5", "Jupiter");
			define("planet6", "Saturn");
			define("planet7", "Uranus");
			define("planet8", "Neptune");
			function req01(){
				echo "<h1>", planet1, " ", planet2, " ", planet3, " ", planet4, " ", planet5, " ", planet6, " ", planet7, " ", planet8,"</h1>";
			}
			?>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #01</h3>
			<?php
			req01();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #02</h3>
			<?php
			function req02(){
			    $curmonth = date("m");
			    if($curmonth === 12 or $curmonth === 1 or $curmonth === 2){
			        echo "It is chilly winter.";
			    }
			    else if($curmonth === 3 or $curmonth === 4 or $curmonth === 5){
			        echo "A beautiful spring.";
  		       }
			    else if($curmonth === 6 or $curmonth === 7 or $curmonth === 8){
			        echo "The heat of summer.";
			    }
			    else{
			        echo "Fabulous Fall.";
			    }
			}
			req02();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
 <hr></hr>
        <div>
			<h3> Requirement #03</h3>
			<form action="index.php" method=post">
			Name: <select name="r3CapCity">
                     <option>
					Austin
					</option>
					  <option>
					Montgomery
					</option>  <option>
					Juneau
					</option>  <option>
					Jackson
					</option>  <option>
					Cheyenne
					</option>  <option>
					Pierre
					</option>  <option>
					Augusta
					</option>  <option>
					Helena
					</option>  <option>
					Concord
					</option>  <option>
					Bismarck
					</option>
			      </select >
			<input type="submit">
			</form>
			<?php
			if(isset($_POST["r3CapCity"])){
				$city = $_POST["r3CapCity"];
				switch (city) {
				case "Austin":
					echo "Your state is Texas!";
					break;
				case "Montgomery":
					echo "Your state is Alabama!";
					break;
				case "Juneau":
					echo "Your state is Alaska!";
					break;
				case "Jackson":
					echo "Your state is Mississippi!";
					break;
				case " 	Cheyenne":
					echo "Your state is Wyoming!";
					break;
				case "Pierre":
					echo "Your state is South Dakota!";
					break;
				case "Augusta":
					echo "Your state is Maine!";
					break;
				case "Helena":
					echo "Your state is Montana!";
					break;
				case "Concord":
					echo "Your state is New Hampshire!";
					break;
				case "Bismarck":
					echo "Your state is North Dakota!";
					break;
				default:
					echo "That city is not in my library!";
			}
			}
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
 <hr></hr>
        <div>
			<h3> Requirement #04</h3>
			<?php
			function req04(){
			$day4 = date("d");
			$count4 = 1;
			while($count4 <= $day4){
				echo "Hello<br>";
				$count4 ++;
			}
			}
			req04();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
		 <hr></hr>
        <div>
			<h3> Requirement #05</h3>
			<?php
			function req05(){
			$day5 = date("d");
			$count5 = 1;
			do{
				echo "Hello<br>";
				$count5 ++;
			}while($count5 <= $day5);
			}
			req05();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
		 <hr></hr>
        <div>
			<h3> Requirement #06</h3>
			<?php
			function req06(){
			for ($x6 = 1; $x6 <= 25; $x6++) {
				$x6a = $x6 * $x6;
				echo " $x6a <br>";
			}
			}
			req06();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
<hr></hr>
        <div>
			<h3> Requirement #07</h3>
			<?php
			function req07(){
			$arr7 = array("January","Feburary","March","April","May","June","July","August","September","October","November","December");
			foreach ($arr7 as $value) {
				echo "$value <br>";
			}
			}
			req07();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
<hr></hr>
        <div>
			<h3> Requirement #08</h3>
			<?php
			function req08($name8, $team8){
			    echo $name8 ," played for the ", $team8,"<br>" ;
			}
			$name8 = "Roger Staubach ";
			$team8 = "Dallas Cowboys";
			req08($name8,$team8);
			$name8 = "Anderson Zaire ";
			$team8 = "Denver Broncos";
			req08($name8,$team8);
			$name8 = "Jeff Allen";
			$team8 = "Houston Texans";
			req08($name8,$team8);
			$name8 = "Sam Acho";
			$team8 = "Chicago Bears";
			req08($name8,$team8);
			$name8 = "Austin Tavon ";
			$team8 = "Washington Redskins";
			req08($name8,$team8);
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
	      <hr></hr>
        <div>
			<h3> Requirement #09</h3>
			<?php
			function req09($num1, $num2){
               if ($num2 === 0){
			   echo $num1 . '/' . $num2 .'<br>';
			   echo 'denominator can not be zero'.'<br>';
			   return;
			}
			echo $num1 . '/'. $num2 . ' = ' . $num1 / $num2 . '<br>';
			}
			req09(2, 4);
			req09(0, 10);
			req09(12, 0);
			req09(8, 2);
			req09(9, 3);
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
		<hr></hr>
        <div>
			<h3> Requirement #10</h3>
			<?php
			function req10(){
			$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			foreach($carsArray as $x => $xvalue){
				echo "Manufacture=" . $x . ", Model=" . $xvalue;
				echo "<br>";
			}
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
				$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
				ksort($carsArray);
				foreach($carsArray as $x => $x_value) {
				echo "Manufacture = " . $x . ", Model = " . $x_value;
				echo "<br>";
			}
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
				$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
				asort($carsArray);
				foreach($carsArray as $x => $x_value) {
				echo "Manufacture = " . $x . ", Model = " . $x_value;
				echo "<br>";
			}
			}
			req12();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
 <hr></hr>
        <div>
			<h3> Requirement #13</h3>
			<?php
			function req13(){
				$current_file_name = basename($_SERVER['PHP_SELF']);
				echo $current_file_name."<br>";
				echo $_SERVER['SERVER_ADDR']."<br>";
				echo $_SERVER["REQUEST_METHOD"]."<br>";
			    echo $_SERVER['REMOTE_ADDR'];
			}
			req13();
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
<hr></hr>
        <div>
			<h3> Requirement #14</h3>
			<?php
			$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			$carsArray2 = array("Ford"=>"Maveric", "Toyota"=>"Camery", "Honda"=>"Accord", "Chevy"=>"Luv", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			function req14($a,$b){
			if ($a===$b)
			  {
			  return 0;
			  }
			  return ($a>$b)?1:-1;
			}
			$result=array_udiff($carsArray,$carsArray2,'req14');
			print_r($result);
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
 <hr></hr>
        <div>
			<h3> Requirement #15</h3>
			<?php
			$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			$carsArray2 = array("Ford"=>"Maveric", "Toyota"=>"Camery", "Honda"=>"Accord", "Chevy"=>"Luv", "Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			function req15($a,$b)
			{
			if ($a===$b)
			  {
			  return 0;
			  }
			  return ($a>$b)?1:-1;
			}
			$result=array_uintersect_assoc($carsArray,$carsArray2,"req15");
			print_r($result);
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
<hr></hr>
        <div>
			<h3> Requirement #16</h3>
			<?php
			$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado",
			"Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			function req016($queryKey, $Array){
					if (array_key_exists($queryKey,$Array))
					  {
					  echo " True, key " . $queryKey . " exists! "."<br>";
					  }
					else
					  {
					  echo " False, key " .  $queryKey .  " does not exist! ";
					  }
                      }
			req016('Ford', $carsArray);
			req016(' Opel ', $carsArray);
			?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
<hr></hr>
        <div>
			<h3> Requirement #17</h3>
			<?php
			$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camery", "Honda"=>"Civic", "Chevy"=>"Silverado",
			"Dodge"=>"Ram", "Cadilac"=>"CTS", "Mercedes"=>"E Class");
			function req017($queryValue, $assocArray){
                $found = false;
				foreach ($assocArray as $x => $x_value){
					if ($x_value == $queryValue)
					{
					  echo " True, value " . $queryValue . " exists! "."<br>";
					  $found = true;
					  break;
					 }
				}
				if ($found == false)
					echo " False, value " . $queryValue . "  not exists! ";
				}
			req017('Civic', $carsArray);
			req017(' Odyessa ', $carsArray);
			?>
        </div>
    </body>
</html>

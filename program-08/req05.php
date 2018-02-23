<?php 
			$txt1=$txt2=$txt3=$txt4 = '';
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["lm1"])) {
				$nameErr = "Name is required";
			  } else {
				  $txt1 = $_POST["lm1"];
			 }
			 if (empty($_POST["lm2"])) {
				$nameErr = "Name is required";
			  } else {
				  $txt2 = $_POST["lm2"];
			 }
			 if (empty($_POST["lm3"])) {
				$nameErr = "Name is required";
			  } else {
				  $txt3 = $_POST["lm3"];
			 }
			 if (empty($_POST["lm4"])) {
				$nameErr = "Name is required";
			  } else {
				  $txt4 = $_POST["lm4"];
			 }
			 }
            $req5 = fopen("landmarks.txt", "w") or die("Unable to open file!");
            //$txt1 = $_POST['lm1'];
            fwrite($req5, $txt1);
            //$txt1 = $_POST["lm2"];
            fwrite($req5, $txt2);
            //$txt1 = $_POST["lm3"];
            fwrite($req5, $txt3);
            //$txt1 = $_POST["lm4"];
            fwrite($req5, $txt4);
            fclose($req5);
            
			echo "<p>You wrote</p><br>";
			echo "<p>$txt1</p>";
			echo "<p>$txt2</p>";
			echo "<p>$txt3</p>";
			echo "<p>$txt4</p>";
			?>
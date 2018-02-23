<!DOCTYPE html>
<?php
$cookie_name = "Monster";
$cookie_value = "Oatmeal";
setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day
?> 
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-08 
        </title>
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
</style>
    </head>
    <body>
	<header>	
	<hr><?php include 'header.php';?>
    </header>    
        
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #01</h3>
			<p>Included header.php file</p>
			<p>Included footer.php file</p>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #02</h3>
			<p>Top five Austin resaurants</p>
			<?php include 'menu.php';?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #03</h3>
			
			 <?php
			 $foods = array
			 (
			     array("North ","Apple Crisp ","Hamburger ","Deep-Dish Pizza ","Drop Biscuits and Sausage Gravy ","Hominy Grits"),
			     array("South ","Barbecue ","Peaches ","Fried green tomatoes ","Boiled peanuts ","Fried chicken"),
			     array("East ","Newport Clam Chowder ","Boston Baked Beans ","Irish Boiled Dinner (Corned Beef) ","Lobster Stew"),
			     array("West ","Chuck Wagon Brisket ","Cranberry Salsa ","Marinated Artichokes ","Broiled Salmon Steaks ","Apple Crisp Blueberry Muffins ")
			 );
			 echo "<table>";
                for ($row = 0; $row < 4; $row++) {
                  echo "<tr>";
                  for ($col = 0; $col < 5; $col++) {
                      echo "<td> ".$foods[$row][$col]." </td>";
                  }
                  echo "</tr>";
                }
             echo "</table>";
             ?> 
         </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #04</h3>
			 <?php
            $cityName = fopen("files/streets.txt", "r") or die("Unable to open file!");
            $cityDesc = fopen("files/strtdesc.txt", "r") or die("Unable to open file!");
            // Output one line until end-of-file
            while(!feof($cityName)) {
                echo fgets($cityName) ." - " . fgets($cityDesc) . "<br>";
            }
            fclose($cityName);
            fclose($cityDesc);
            ?> 
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #05</h3>
			<p>Enter four landmarks.</p>
			<form action="index.php" method="POST">
            <input type="text" name="lm1"><br>
            <input type="text" name="lm2"><br>
            <input type="text" name="lm3"><br>
            <input type="text" name="lm4"><br>
            <input type="submit">
            </form>
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
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #06</h3>
			<form action="index.php" method="POST" enctype="multipart/form-data">
                Select file to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
            </form>
            
            <?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $target_dir = "files/";
            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            /* if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES[$target_file]["tmp_name"]);
                if($check !== false) {
                    echo "File is a txt - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an txt.";
                    $uploadOk = 0;
                }
            } */
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 100000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "txt" ) {
                echo "Sorry, only txt files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
			}
            ?>
            
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #07</h3>
			<?php
            if(!isset($_COOKIE[$cookie_name])) {
                 echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
                 echo "Cookie '" . $cookie_name . "' is set!<br>";
                 echo "Value is: " . $_COOKIE[$cookie_name];
            }
            ?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #08</h3>
			<form action="session_display.php" method="POST">
			<input type="submit" name="Check session values">
			</form>
			<?php
            echo "Session variables are set.";
            ?>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #09</h3>
			 <table>
              <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
              </tr>
              <?php
              foreach (filter_list() as $id =>$filter) {
                  echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
              }
              ?>
            </table> 
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #10</h3>
			<p>Enter an email and URL.</p>
			<form action="index.php" method="POST">
            Email: <input type="text" name="email10"><br>
            URL: <input type="text" name="url10"><br>
            <input type="submit">
            </form>
			 <?php
			 $email = $url ="";//$_POST["email10"];
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["email10"])) {
				$nameErr = "Name is required";
			  } else {
				  $email = $_POST["email10"];
			 }
			 if (empty($_POST["url10"])) {
				$nameErr = "Name is required";
			  } else {
				  $url = $_POST["url10"];
			 }
			 }
            // Remove all illegal characters from email
            //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
            
            // Validate e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo("$email is a valid email address");
            } else {
                echo("$email is not a valid email address");
            }
          echo '<br>';
            //$url = $_POST["url10"];
            
            // Remove all illegal characters from a url
            //$url = filter_var($url, FILTER_SANITIZE_URL);
            
            // Validate url
            if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                echo("$url is a valid URL");
            } else {
                echo("$url is not a valid URL");
            }
            ?> 
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #11</h3>
			<p>Enter a file name.</p>
			<form action="index.php" method="POST">
            File: <input type="text" name="req11"><br>
            <input type="submit">
            </form>
			<?php
			$target_dir = "files/";			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["req11"])) {
				$nameErr = "Name is required";
			  } else {
				  $filename = $_POST["req11"];
				  echo $filename.'<br>';
			
			$getFile = fopen($target_dir.$filename, "r") or die("Unable to open file!");
            // Output one line until end-of-file
            while(!feof($getFile)) {
                echo fgets($getFile) . "<br>";
            }
            fclose($getFile);
			}
			}
            ?> 
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #12</h3>
			<p>Enter a number between 33 and 77.</p>
			<form action="index.php" method="post">
            Number: <input type="text" name="req12"><br>
            <input type="submit">
            </form>
			 <?php
			 $entry = '';
			 if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["req12"])) {
				$nameErr = "Name is required";
			  } else {
				  $entry = $_POST["req12"];
			 }}
			 //$entry = $_POST["req12"];
                $min = 33;
                $max = 77;
                
                if (filter_var($entry, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
                    echo("Variable value is not within the legal range<br>");
                } else {
                    echo("Variable value is within the legal range<br>");
                }
                function checkNum($number) {
                    if($number>77 || $number<33) {
                        throw new Exception("Value must be between 33 and 77.");
                    }
                    return true;
                }
                
                //trigger exception in a "try" block
                try {
                    checkNum($entry);
                    //If the exception is thrown, this text will not be shown
                    echo 'If you see this, the number is in range';
                }
                
                //catch exception
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
                ?> 
        </div>

    </body>
    <footer>
    <?php include 'footer.php';?>
    </footer>
</html>
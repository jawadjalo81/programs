<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-10 folder
        </title>
		<sript type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<?php
		function display_table(){
		include("inc_db_connect.php");
		$query_str = 'SELECT * FROM teams';
		$result = $conn->query($query_str);
		echo "<table><tr><th>teamname</th><th>city</th><th>bestplayer</th><th>yearformed</th><th>website</th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["teamname"]."</td><td>".$row["city"]."</td><td>".$row["bestplayer"]."</td><td>".$row["yearformed"]."</td><td>".$row["website"]."</td></tr>";
		}
		echo "</table>";
		$conn->close();
		}
	?>
    </head>
    <body>
        <hr>
        <h1>program-10 </h1>
        <hr>
      <div>
            <h3>Requirement #01</h3>
			<?php
        include("inc_db_connect.php");

		// prepare and bind
		$sql = "delete from teams;";

		if($conn->query($sql)===TRUE){
			echo "record deleted<br>";
		} else {
			echo "error deleting record: ".$conn->error;
		};
		$stmt = $conn->prepare("INSERT INTO teams (teamname, city, bestplayer, yearformed, website) VALUES (?,?,?,?,?)");
		$stmt->bind_param("sssis", $teamname, $city, $bestplayer, $yearformed, $website);

		// set parameters and execute
		$teamname = "Eagle";
		$city = "Austin";
		$bestplayer ="john"  ;
		$yearformed = 2012;
		$website = "john@example.com"; 
		$stmt->execute();

		$teamname = "Falcon";
		$city = "Dallas";
		$bestplayer ="Joe"  ;
		$yearformed = 2013;
		$website = "Joe@example.com";
		$stmt->execute();


		$teamname = "Tigar";
		$city = "San Antonio";
		$bestplayer ="Black"  ;
		$yearformed = 2014;
		$website = "black@example.com";
		$stmt->execute();

		$teamname = "Python";
		$city = "San  Diego";
		$bestplayer ="Will"  ;
		$yearformed = 2015;
		$website = "will@example.com";
		$stmt->execute();
		echo "New records created successfully";
		$stmt->close();
		$conn->close();
		?>
        </div>
		<!------------------------------------------------------------------------------------------------------------------------------------------------ -->   
        <div>
            <h3>Requirement #02</h3>
			<form method='POST' action="req_02.php">
			<select name='field'>			
			<option value='teamname'>teamname</option>
			<option value='city'>city</option>
			<option value='bestplayer'>bestplayer</option>
			<option value='yearformed'>yearformed</option>
			<option value='website'>website</option>
			</select>			
			<input type='submit'>
			</form>				
        </div>
        <div>
	<hr></hr> 	<!------------------------------------------------------------------------------------------------------------------------------------------------ -->   
            <h3>Requirement #03</h3>
			<form name='field' method='POST' action='req_03.php'>
			<input type="checkbox" name="column[]" value="teamname">teamname <br>
            <input type="checkbox" name="column[]" value="city">city <br>
			<input type="checkbox" name="column[]" value="bestplayer">bestplayer <br>
            <input type="checkbox" name="column[]" value="yearformed">yearformed <br>
            <input type="checkbox" name="column[]" value="website">website <br>
            <input type="submit" value="Submit">
			</form>
			
        </div>
	<hr></hr> 





<div>
             <h3>Requirement #04</h3>
			<?php display_table(); ?>
		    <form method='POST' action="req_04.php">
			<select name='field' id="field">			
			<option value='teamname'>teamname</option>
			<option value='city'>city</option>
			<option value='bestplayer'>bestplayer</option>
			<option value='yearformed'>yearformed</option>
			<option value='website'>website</option>
			</select>			
			<input type="text" name="value">
			</div>
			<input type='submit'>
			</form>	
        </div>
			<hr></hr> 
		<div>
			
			<h3>Requirement #05</h3>
		<?php
		$servername = "lineofcode.com";
		$username = "itse2302003014";
		$password = "HCw5sUAH";
		$db = "itse2302003014";
		$conn5 = mysqli_connect($servername, $username, $password, $db);
	// Check connection
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if ($conn5->connect_error) {
                die("connection failed: " . $conn5->connect_error);
            }         
        }
        
        echo "Now I'll update the table with the Houston Oilers</br>";
        $sql = 'INSERT INTO teams (teamname, city, bestplayer, yearformed, website) VALUES ("Houston oilers", "Houston","Earl", 1966 ,"www.houoilers.com")';
		
		if ($conn5->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$q5a = mysqli_query($conn5,'SELECT * FROM teams');
        echo "<table><tr><th>teamname</th><th>city</th><th>bestplayer</th><th>yearformed</th><th>website</th></tr>";
        while($row = mysqli_fetch_array($q5a)) {
			 echo "<tr><td>".$row["teamname"]."</td><td>".$row["city"]."</td><td>".$row["bestplayer"]."</td><td>".$row["yearformed"]."</td><td>".$row["website"]."</td></tr>";
        }echo "</table>";
		mysqli_close($conn5);
		//$conn5->close();
		?>
			<hr></hr> 

		<h3>Requirement #06</h3>
		<?php
		$servername = "lineofcode.com";
		$username = "itse2302003014";
		$password = "HCw5sUAH";
		$db = "itse2302003014";
		$conn6 = mysqli_connect($servername, $username, $password, $db);
        // Check connection
        if (!$conn6) {
            die("connection failed: " . mysqli_connect_error());
        }
		$q6 = mysqli_query($conn6,'SELECT * FROM teams LIMIT 3');
        echo "<table><tr><th>teamname</th><th>city</th><th>bestplayer</th><th>yearformed</th><th>website</th></tr>";
        while($row = mysqli_fetch_array($q6)) {
			 echo "<tr><td>".$row["teamname"]."</td><td>".$row["city"]."</td><td>".$row["bestplayer"]."</td><td>".$row["yearformed"]."</td><td>".$row["website"]."</td></tr>";
        }echo "</table>";
        $conn6->close();
        ?>
        </div> 
		 </body>
</html>
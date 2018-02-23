<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-09 folder
        </title>        
    </head>
    <body>
        <hr>
        <h1> program-09 folder</h1>

        <hr>
     <div>
            <h3>Requirement #01</h3>
            <form action="index.php" method="POST" >       
            <input type="submit" name="Open_connection" value="Open_connection">
            </form>
<?php
        if (isset($_POST['Open_connection'])) {
        $servername = "lineofcode.com";
        $username = "itse2302003014";
        $password = "HCw5sUAH";
        $db = "itse2302003014";
        $conn1 = mysqli_connect($servername, $username, $password, $db);
        $db_selected = mysqli_select_db($conn1, $db);
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if ($conn1->connect_error) {
                die("connection failed: " . $conn1->connect_error);
            } else {
                echo "connected successfully";
            }        
        }
        $conn1->close();}
        ?>
        </div>
                <hr></hr> <!------------------------------------------------------------------------------------------------------------------------------------------------ -->
          <div>
            <h3>Requirement #02</h3>
            <form action="index.php"  method="POST" >       
            <input type="submit" name="Open_Close_connection" value="Open_Close_connection">
            </form>    
          <?php
          if (isset($_POST['Open_Close_connection'])) {
        $servername = "lineofcode.com";
        $username = "itse2302003014";
        $password = "HCw5sUAH";
        $db = "itse2302003014";
        $conn2 = mysqli_connect($servername, $username, $password, $db);
        $db_selected = mysqli_select_db($conn2, $db);                 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if ($conn2->connect_error) {
                die("connection failed: " . $conn2->connect_error);
            } else {
                echo "connected successfully<br>";
            }        
        }
        $sql = mysqli_query($conn2,'DROP TABLE if EXISTS test');
        // sql to create table
        $sql = "CREATE TABLE test (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        teamname VARCHAR(30) NOT NULL,
        city VARCHAR(30) NOT NULL,
        bestplayer VARCHAR(50),
        yearformed TIMESTAMP,
        website VARCHAR(50)
        )";
        $conn2->close();
        echo @mysqli_ping() ? 'connected still' : 'Disconnected successfully';
        }
          ?>    
        </div>
                <hr></hr> 
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->				
        <div>
                <h3>Requirement #03</h3>
            <?php
            $servername = "lineofcode.com";
            $username = "itse2302003014";
            $password = "HCw5sUAH";
            $db = "itse2302003014";
            $conn3 = mysqli_connect($servername, $username, $password, $db);
        // Check conn4ection
        if (!$conn3) {
            die("connection failed: " . mysqli_connect_error());
        }
        $sql = mysqli_query($conn3,'DROP TABLE if EXISTS teams');
        // sql to create table
        $sql = "CREATE TABLE teams (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        teamname VARCHAR(30) NOT NULL,
        city VARCHAR(30) NOT NULL,
        bestplayer VARCHAR(50),
        yearformed year(4),
        website VARCHAR(50)
        )";
        if ($conn3->query($sql) === TRUE) {
            echo "Table teams created successfully<br>";
        } else {
            echo "Error creating table: " . $conn3->error;
        }
        echo "<br>";
        $q = mysqli_query($conn3,'DESCRIBE teams');
        while($row = mysqli_fetch_array($q)) {
            echo "{$row['Field']} - {$row['Type']}\n";
        }
        $conn3->close();        
        ?>
        </div>
        <hr></hr> <!------------------------------------------------------------------------------------------------------------------------------------------------ -->        
        <div>
            <h3>Requirement #04</h3>            
        <form method="POST" action="index.php">
        <br>
        Enter info for 4 teams and it will inserted into the database<br><br>
        <div class="sqlForm">
        <p class="formHead">Team 1</p>
        <label>Team Name:  </label> <input type="text" name="teamname1"><br>
        <label>City:       </label> <input type="text" name="city1"><br>
        <label>Best Player:</label> <input type="text" name="bestplayer1"><br>
        <label>Year Formed:</label> <input type="text" name="yearformed1"><br>
        <label>Website:    </label> <input type="text" name="website1"><br>
        </div>
        <div class="sqlForm">
        <p class="formHead">Team 2</p>
        <label>Team Name:</label> <input type="text" name="teamname2"><br>
        <label>City:</label> <input type="text" name="city2"><br>
        <label>Best Player:</label> <input type="text" name="bestplayer2"><br>
        <label>Year Formed:</label> <input type="text" name="yearformed2"><br>
        <label>Website:</label> <input type="text" name="website2"><br>
        </div>
        <div class="sqlForm">
        <p class="formHead">Team 3</p>
        <label>Team Name:</label> <input type="text" name="teamname3"><br>
        <label>City:</label> <input type="text" name="city3"><br>
        <label>Best Player:</label> <input type="text" name="bestplayer3"><br>       
        <label>Year Formed:</label> <input type="text" name="yearformed3"><br>
        <label>Website:</label> <input type="text" name="website3"><br>
        </div>
        <div class="sqlForm">
        <p class="formHead">Team 4</p>
        <label>Team Name:</label> <input type="text" name="teamname4"><br>
        <label>City:</label> <input type="text" name="city4"><br>
        <label>Best Player:</label> <input type="text" name="bestplayer4"><br>
        <label>Year Formed:</label> <input type="text" name="yearformed4"><br>
        <label>Website:</label> <input type="text" name="website4"><br><br></div>
        <input class="styled-button" type="submit" name="insert" value="insert">
        </form>
        <?php 
		function validate_input($data){
			$data= trim($data);
			$data= stripcslashes($data);
			$data= htmlspecialchars($data);
			return $data;
		}
        if (isset($_POST['insert'])){
          insertTable();
        } else {
            echo "Enter fields";
        }
        function insertTable() {
        $servername = "lineofcode.com";
        $username = "itse2302003014";
        $password = "HCw5sUAH";
        $dbname = "itse2302003014";
		$varTname = array(1=>'',2=>'', 3=>'', 4=>'');
		$varCity=array(1=>'',2=>'', 3=>'', 4=>'');
		$varBplayer=array(1=>'',2=>'', 3=>'', 4=>'');
		$varYearformed=array(1=>0,2=>0, 3=>0, 4=>0);
		$varWebsite=array(1=>'',2=>'', 3=>'', 4=>'');
        // Create connection
        $conn4 = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if ($conn4->connect_error) {
        echo ("connection failed: " . $conn4->connect_error);
        } else {
		for($i = 1; $i <= 4; $i++){
        $varTname[$i] = validate_input($_POST['teamname'.$i]);
        $varCity[$i] = validate_input($_POST['city'.$i]);
        $varBplayer[$i] = validate_input($_POST['bestplayer'.$i]);
        $varYearformed[$i] = intval( validate_input($_POST['yearformed'.$i]));
        $varWebsite[$i] =validate_input($_POST['website'.$i]);
        }
		$insertStr = 'insert into teams (teamname, city, bestplayer, yearformed, website) values ';
		for ( $i =1; $i<=4; $i++){
			if ( $i < 4)
			$insertStr .= "('" .$varTname[$i] . "','" . $varCity[$i] . "','" . $varBplayer[$i] . "'," . $varYearformed[$i] . ",'" . $varWebsite[$i]. "'),";
          else 
			  $insertStr .= "('" . $varTname[$i] . "','" . $varCity[$i] . "','" . $varBplayer[$i] . "'," . $varYearformed[$i] . ",'" . $varWebsite[$i]. "');";  
		}
		// echo $insertStr;
		if ($conn4->query($insertStr)===TRUE){
			echo 'Four teams have been inserted succussfully'.'<br>';
		} else {
			echo 'failed inserting'.'<br>';
		}
		$conn4->close();
		echo @mysqli_ping() ? 'connected still' : 'Disconnected successfully';
		}
		}
        ?>
    </body>
</html>
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
      
	include("inc_db_connect.php");
	$column = $_POST["field"];
	$value = $_POST["value"];
	$sql_str = "delete from teams where ".$column." = '".$value."'";
	$conn->query($sql_str);
	display_table();
?>
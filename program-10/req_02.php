            <?php include("inc_db_connect.php");
			if(isset($_POST['field'])){
				$field=$_POST['field'];
				$sql = "select ".$field." from teams;";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()) {
					echo $row[$field]."<br>";
				}
				} else {
				echo "0 results";
				}
				$conn->close();
            }	
			?>
<?php        
		if ($_SERVER["REQUEST_METHOD"] === "POST"){
			$fields=$_POST['column'];
			//echo count($fields).'<br>';
			if (count($fields)>0){
				$numSelected = count($fields);				
				$sql = "select ";
				for ($i=0; $i<$numSelected;$i++){
					if ($i < $numSelected-1)
						$sql .= $fields[$i].',';
					else
						$sql .= $fields[$i]." from teams;";
				}
			include("inc_db_connect.php");
			$result = $conn->query($sql);
            //echo $result->num_rows.'<br>';			
    		while($row = $result->fetch_assoc()) {
				for ($i=0; $i<$numSelected;$i++){
				   if ($i < $numSelected-1)
					echo $row[$fields[$i]].", ";
				   else
					echo $row[$fields[$i]]."<br>";   
					}
			}
			
			$conn->close();
			}			
		} 
		?>
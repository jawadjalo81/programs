<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$servername = "lineofcode.com";
$username = "itse2302003014";
$password = "HCw5sUAH";
$db = "itse2302003014";
$con = mysqli_connect($servername, $username, $password, $db);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM teams WHERE teamname = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>teamname</th>
<th>city</th>
<th>bestplayer</th>
<th>yearformed</th>
<th>website</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['teamname'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['bestplayer'] . "</td>";
    echo "<td>" . $row['yearformed'] . "</td>";
    echo "<td>" . $row['website'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
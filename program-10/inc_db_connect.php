<?php
        $servername = "lineofcode.com";
        $username = "itse2302003014";
        $password = "HCw5sUAH";
        $db = "itse2302003014";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
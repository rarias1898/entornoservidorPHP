<?php
// MySQLi connection
$mysqli = new mysqli("127.0.0.1", "root", "", "prueba");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// SQL to select from table
$sql = "SELECT * FROM users";

// Execute query
$result = $mysqli->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch data and display
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["nombre"] . "<br>";
        }
    } else {
        echo "No results found";
    }
} else {
    echo "Error executing query: " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>

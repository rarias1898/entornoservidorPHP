<?php
// MySQLi connection
<<<<<<< HEAD
try {
    $mysqli = new mysqli("127.0.0.1", "root", "root", "hola");
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}
=======
$mysqli = new mysqli("127.0.0.1", "root", "", "prueba");
>>>>>>> e1a3d1939d87a38e303809be72e7444b69d088b8

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// SQL to select from table
<<<<<<< HEAD
$sql = "SELECT * FROM user";
=======
$sql = "SELECT * FROM users";
>>>>>>> e1a3d1939d87a38e303809be72e7444b69d088b8

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

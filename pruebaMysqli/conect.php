<?php
$mysql = new mysqli("127.0.0.1:3307", "root", "root", "prueba");

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$sql = "SELECT * FROM users";

$result = $mysql->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // var_dump("ID: " . $row["id"] . " - Name: " . $row["name"] . " - Surname: " . $row["surname"]);
            print "Bienvenido" . " " . $row["name"];
        }
    } else {
        echo "No results found";
    }
} else {
    var_dump("Error executing query: " . $mysql->error);
}


$mysql->close();
?>

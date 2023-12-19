<?php

include_once "connection.php";

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço da Beleza </title>
</head>
<body>
    
</body>
</html>
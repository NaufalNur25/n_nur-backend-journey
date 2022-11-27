<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "db_score";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    die("Connection Failed:".$conn -> connect_error);
}

// $sql = "CREATE DATABASE db_score";
// if($conn->query($sql) === true){
//     echo "Database created succesfully!";
// }else{
//     echo "Database get error: ". $conn->error;
// }

// $sql = "CREATE TABLE person (
//     pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
// if($conn->query($sql) === true){
//     echo "Query run succesfully!";
// }else{
//     echo "Query error: ". $conn->error;
// }

// $sql = "INSERT INTO person (firstname, lastname, email)
// VALUES ('Nada', 'Nur Alifya', 'nad@example.com')";
// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//   echo "New record created successfully and ID:".$last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$query = "SELECT * FROM person";
$selectExecute = $conn->query($query);

echo "Connection Successfully!";
// $conn->close();
?>
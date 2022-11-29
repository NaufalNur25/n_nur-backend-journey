<?php
include "Database/connect.php";

 $selectSQL = "SELECT firstname, lastname, email FROM person WHERE pid = ?";
 $stmt = $conn->prepare($selectSQL);
 $stmt->bind_param("s", $_GET['q']);
 $stmt->execute();
 $stmt->store_result();
 $stmt->bind_result($firstName, $lastName, $email);
 $stmt->fetch();
 $stmt->close();
?>
<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<table>
    <tr>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <tr>
        <td><?= $email ?></td>
        <td><?= $firstName ?></td>
        <td><?= $lastName ?></td>
    </tr>
</table>
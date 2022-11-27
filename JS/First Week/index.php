<?php
    include "Database/connect.php";

    // if($_POST != null){
    //     $email = $_POST["email"];
    //     $firstName = $_POST["firstName"];
    //     $lastName = $_POST['lastName'];
    //     $stmt = $conn -> prepare("INSERT INTO person (firstname, lastname, email) VALUES (?,?,?)");
    //     $stmt->bind_param("sss", $firstName, $lastName, $email);
    //     $stmt->execute();
    //     $stmt->close();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1</title>
</head>
<body>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>

    <form action="">
        <Select name="person" onchange="showPerson(this.value)">
        <option value="">Select a user:</option>
        <?php foreach($selectExecute as $person): ?>
        <option value="<?= $person["pid"] ?>"><?= $person["firstname"] ?></option>
        <?php endforeach; ?>
        </Select>
    </form>
    <div id="table"></div>
    <!-- <table> 
        <tr>
            <th>
                No.
            </th>
            <th>
                Email
            </th>
            <th>
                Name
            </th>
        </tr>
        <tr>
            <?php
            // $no = 1;
            // while($row = $selectExecute->fetch_assoc()){
            //     echo "<tr><td>". $no++ ."</td>";
            //     echo "<td>".$row["email"]."</td>";
            //     echo "<td>".$row["firstname"]." ". $row["lastname"]."</td></tr>";
            // }
            //  foreach($selectExecute as $person){
            //     echo "<tr><td>". $no++ ."</td>".
            //     "<td>".$person["email"]."</td>".
            //     "<td>".$person["firstname"]." ". $person["lastname"]."</td></tr>";
            // } 
            ?>
        </tr>
    </table> -->
</body>
</html>


<script>
    function showPerson(str){
        var xhttp;

        if(str == ""){
            document.getElementById("table").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("table").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "table.php?q="+str, true);
        xhttp.send();
    }

    function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
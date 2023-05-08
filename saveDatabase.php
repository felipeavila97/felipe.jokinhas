<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'mydb');
if (!$conn) {
    die('Could not connect: ');
}

$sql = 'INSERT INTO league_of_legends(Nome, Classe, Rota, Regiao, Elo) values("' . $_POST["Nome"] . '","' . $_POST["Classe"] . '","' . $_POST["Rota"] . '","' . $_POST["Regiao"] . '","' . $_POST["Elo"] . '")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
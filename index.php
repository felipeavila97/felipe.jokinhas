<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'mydb');
if (!$conn) {
    die('Could not connect: ');
}

$sql = 'SELECT * FROM league_of_legends';
$result = $conn->query($sql);
?>

<style>
  form {
    max-width: 500px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
  }

  label {
    display: inline-block;
    width: 120px;
    margin-bottom: 10px;
  }

  input[type="text"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 20px;
    font-size: 16px;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<form action="saveDatabase.php" method="post">
  <label for="Nome">Nome:</label>
  <input type="text" id="Nome" name="Nome">

  <label for="Classe">Classe:</label>
  <select id="Classe" name="Classe">
    <option value="Tanque">Tanque</option>
    <option value="Lutador">Lutador</option>
    <option value="Assassino">Assassino</option>
    <option value="Mago">Mago</option>
    <option value="Atirador">Atirador</option>
    <option value="Suporte">Suporte</option>
  </select>

  <label for="Rota">Rota:</label>
  <select id="Rota" name="Rota">
    <option value="Topo">Topo</option>
    <option value="Selva">Selva</option>
    <option value="Meio">Meio</option>
    <option value="Atirador">Atirador</option>
    <option value="Suporte">Suporte</option>
  </select>

  <label for="Regiao">Região:</label>
  <select id="Regiao" name="Regiao">
    <option value="BR">Brasil</option>
    <option value="NA">América do Norte</option>
    <option value="EUW">Europa Ocidental</option>
    <option value="EUNE">Europa Oriental e Norte</option>
    <option value="KR">Coreia do Sul</option>
    <option value="JP">Japão</option>
  </select>

  <label for="Elo">Elo:</label>
  <input type="text" id="Elo" name="Elo">

  <input type="submit" value="Enviar">
</form>



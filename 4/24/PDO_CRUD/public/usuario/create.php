<?php
include '../../config/connection.php'

?>

<form action="create.php" method="POST">
<label for="username">Nome de Usuario</label>
<input type="text" name="username" id="username">
<br><br>
<label for="password">Senha</label>
<input type="password" name="password" id="password">
<br><br>
<button type=submit>Cadastrar</button>
</form>

<?php
$username= isset($_POST['username']) ? $_post['username'] :exit();
$password= isset($_POST['password']) ? $_post['password'] :exit();

//statement
$stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES(username, :password)');
$stmt->bindParam(':userbame' , $usernama);
$stmt->bindParam(':password' , $password);
$stmt->execute();

?>
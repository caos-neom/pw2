<?php include '../../includes/header.php';

include '../../includes/menu.php';?>
<?php
include '../../config/connection.php';
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if(empty($id)) {
        echo 'O id é obrigatório!!!';
        exit();
    }
    
    $stmt = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $usuario = $stmt->fetchAll();
    
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
$id = isset($_POST['id']) ? $_POST['id'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
if(empty($id)){
    echo "Id obrigatorio";
    exit();
}
if(empty($username)){
    echo "nome obrigatorio";
    exit();
}
if(empty($password)){
    echo "senha obrigatoria";
    exit();
}
$stmt = $pdo->prepare('UPDATE usuario SET username = :username, password = :password WHERE id = :id');
$stmt->bindParam(':id' , $id);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password' , $password);
$stmt->execute();


header('location: read.php');
}



?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario[0] ['id']?>">
    <label for="username">Nome de usuário </label>
    <input type="text" name="username" id="username" value="<?php echo $usuario [0] ['username'];?>">
    <br><br>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">Atualizar</button>
</form>

<?php include '../../includes/footer.php';?>
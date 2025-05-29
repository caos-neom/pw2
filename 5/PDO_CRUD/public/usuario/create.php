<?php include '../../includes/header.php';

include '../../includes/menu.php';?>
<?php 
    include '../../config/connection.php'; 
    ?>

<div class="conteiner-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-4 border bg-secondary rounded">
            <form action="create.php" method="POST">
<div class='mb-3'>
    <label for="username" class='form-label'>Nome de Usuario</label>
    <input type="text" name='username' id='username' class='form-control'>
</div>

<div>
<label for="password" class='form-label'>Senha</label>
<input type="text" name='password' id='password' class='form-control'>
</div>

<button type="submit" class='btn btn-primary'>Cadastrar</button>
</form>
        </div>
    </div>
</div>



<?php
    $username = isset($_POST['username']) ? $_POST['username'] : exit() ;
    $password = isset($_POST['password']) ? $_POST['password'] : exit() ;
    
    //statement
    $stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (:username, :password)');
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    Header("Location: read.php");
    
    
?>

<?php include '../../includes/footer.php';?>
<?php include '../../includes/header.php';

include '../../includes/menu.php';?>
<?php 
    include '../../config/connection.php'; 

    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if (empty($id)) {
        echo "É necessário informar o código!";
        exit();
    }

    $stmt = $pdo->prepare("DELETE from usuario WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    Header("Location: read.php");
?>

<?php include '../../includes/footer.php';?>
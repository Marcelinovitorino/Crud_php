<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Editar Usuário</h2>

    <?php
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();
    ?>

    <form method="POST" action="edit.php?id=<?= $user['id'] ?>">
        <div class="input-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" value="<?= $user['name'] ?>" required>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $user['email'] ?>" required>
        </div>
        <button type="submit" class="btn">Atualizar</button>
        <a href="index.php" class="btn">Cancelar</a>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $email, $id]);
    header("Location: index.php");
    exit;
}
?>

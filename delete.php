<?php include 'db.php'; ?>
<link rel="stylesheet" href="style/style.css">
<nav>
      <div>
        <b class="logo">UEM</b>
      </div>
      <div>
        <ul>
          <li>
            <a href="">Inicio</a>
          </li>
          <li>
            <a href="">Galeria</a>
          </li>
          <li>
            <a href="">Contacto</a>
          </li>
          <li>
            <a href="">Acerca</a>
          </li>
        </ul>
      </div>
    </nav>

<div class="container">
    <h2>Excluir Usuário</h2>
    <?php
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();
    ?>

    <p>Você tem certeza que deseja excluir o usuário <strong><?= $user['name'] ?></strong>?</p>
    <form method="POST" action="delete.php?id=<?= $user['id'] ?>">
        <button type="submit" class="btn-delete">Excluir</button>
        <a href="index.php" class="btn">Cancelar</a>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
    exit;
}
?>

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
    <h2>Cadastrar Novo Usuário</h2>
    <form method="POST" action="create.php">
        <div class="input-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" style="width: 800px;" required>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" style="width: 800px; margin-top:20px; "  required>
        </div>
        <button type="submit" class="btn" style="margin-top: 20px;">Salvar</button>
        <a href="index.php" class="btn" style="margin-left: 10px;">Cancelar</a>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute([$name, $email]);
    header("Location: index.php");
    exit;
}
?>

<?php include 'db.php'; ?>
<link rel="stylesheet" href="style/style.css">

<div class="container" >
    <h2>Usuários</h2>
    <a href="create.php" class="btn">Cadastrar Novo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM users");
            while ($row = $stmt->fetch()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn-edit'>Editar</a> |
                            <a href='delete.php?id={$row['id']}' class='btn-delete'>Excluir</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

</div>
<footer class="footer">
    <p>&copy; 2025 Desenvolvido por <strong>Marcelino Manguele</strong>. Todos os direitos reservados.</p>
</footer>



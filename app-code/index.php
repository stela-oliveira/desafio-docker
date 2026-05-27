<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST['endereco'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, endereco) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $sobrenome, $endereco]);
    
    header("Location: /index.php");
    exit;
}

$usuarios = $pdo->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro PHP - Arquitetura Nginx+Apache+MySQL</title>
    <link rel="stylesheet" href="/estilo.css">
</head>
<body>
    <h1>Cadastro de Usuários</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="sobrenome" placeholder="Sobrenome" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Cadastrados</h2>
    <ul>
        <?php if (count($usuarios) > 0): ?>
            <?php foreach ($usuarios as $user): ?>
                <li>
                    <strong><?= htmlspecialchars($user['nome']) ?> <?= htmlspecialchars($user['sobrenome']) ?></strong><br>
                    Endereço: <?= htmlspecialchars($user['endereco']) ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Nenhum usuário cadastrado.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
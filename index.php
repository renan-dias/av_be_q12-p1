<?php


$stmt = $pdo->query("SELECT * FROM posts ORDER BY data_criacao DESC");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reclamar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gradient">
    <div class="container mt-5">
        <div class="d-flex justify-content-center mb-4">
            <img src="imagens/logo.jpg" alt="Logo" class="logo">
        </div>
        <h1 class="mb-4">Reclamações</h1>
        <a href="adicionar.php" class="btn btn-primary mb-3">Nova Reclamação</a>
        <?php foreach ($posts as $post): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $post['titulo']; ?></h2>
                    <?php if ($post['imagem']): ?>
                        <img src="<?php echo $post['imagem']; ?>" alt="Imagem da reclamação" class="img-fluid mb-2 rounded">
                    <?php endif; ?>
                    <p class="card-text"><?php echo $post['descricao']; ?></p>
                    <p class="card-text"><small class="text-muted">Criado em: <?php echo $post['data_criacao']; ?></small></p>
                    <a href="editar.php?id=<?php echo $post['id']; ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                    <a href="deletar.php?id=<?php echo $post['id']; ?>" class="btn btn-sm btn-outline-danger">Deletar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Reclamar</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
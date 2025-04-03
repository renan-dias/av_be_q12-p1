<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
    $stmt->execute([$id]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Reclamação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gradient">
    <div class="container mt-5">
        <div class="d-flex justify-content-center mb-4">
        <img src="imagens/logo.jpg" alt="Logo" class="logo">
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><?php echo $post['titulo']; ?></h1>
                <?php if ($post['imagem']): ?>
                    <img src="<?php echo $post['imagem']; ?>" alt="Imagem da reclamação" class="img-fluid mb-4 rounded">
                <?php endif; ?>
                <p class="card-text"><?php echo $post['descricao']; ?></p>
                <p class="card-text"><small class="text-muted">Criado em: <?php echo $post['data_criacao']; ?></small></p>
                <a href="index.php" class="btn btn-primary mt-3">Voltar para Reclamações</a>
            </div>
        </div>
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
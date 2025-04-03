<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = $_FILES['imagem']['name'];
    $imagem_temp = $_FILES['imagem']['tmp_name'];

    if ($imagem) {
        $destino = 'imagens/' . $imagem;
        move_uploaded_file($imagem_temp, $destino);
    } else {
        $destino = null;
    }

    $stmt = $pdo->prepare("INSERT INTO posts (titulo, descricao, imagem) VALUES (?, ?, ?)");
    $stmt->execute([$titulo, $descricao, $destino]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Reclamação</title>
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
                <h2 class="card-title">Adicionar Nova Reclamação</h2>
                <form action="adicionar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control" name="descricao" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem:</label>
                        <input type="file" class="form-control-file" name="imagem">
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
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
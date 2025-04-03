<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $imagem = $_FILES['imagem']['name'];
        $imagem_temp = $_FILES['imagem']['tmp_name'];

        if ($imagem) {
            $destino = 'imagens/' . $imagem;
            move_uploaded_file($imagem_temp, $destino);
            $stmt = $pdo->prepare("UPDATE posts SET titulo = ?, descricao = ?, imagem = ? WHERE id = ?");
            $stmt->execute([$titulo, $descricao, $destino, $id]);
        } else {
            $stmt = $pdo->prepare("UPDATE posts SET titulo = ?, descricao = ? WHERE id = ?");
            $stmt->execute([$titulo, $descricao, $id]);
        }

        header('Location: index.php');
    }

    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
    $stmt->execute([$id]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Reclamação</title>
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
                <h2 class="card-title">Editar Reclamação</h2>
                <form action="editar.php?id=<?php echo $post['id']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo $post['titulo']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control" name="descricao" rows="4" required><?php echo $post['descricao']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem:</label>
                        <input type="file" class="form-control-file" name="imagem">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
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
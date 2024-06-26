<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>

    <h1>Editar Postagem</h1>
    <form action="update_post.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $row['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Conteúdo:</label>
            <textarea name="content" id="content" class="form-control" rows="10" required><?php echo $row['content']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" name="image" id="image" class="form-control">
            <small>Deixe em branco para manter a imagem atual</small>
        </div>
        <button type="submit" class="btn btn-dark">Atualizar</button>
    </form>

    <?php
} else {
    echo '<p class="lead">Postagem não encontrada.</p>';
}
?>

<?php include 'includes/footer.php'; ?>

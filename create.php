<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<h1>Criar Nova Postagem</h1>
<form action="save_post.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" class="form-control" rows="10" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Imagem:</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-dark">Salvar Postagem</button>
</form>

<?php include 'includes/footer.php'; ?>

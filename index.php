<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="row">
    <?php
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4 shadow-sm">';
            echo '<img src="img/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['title'] . '</h5>';
            echo '<p class="card-text">' . substr($row['content'], 0, 100) . '...</p>';
            echo '<a href="post.php?id=' . $row['id'] . '" class="btn btn-outline-dark">Leia mais</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p class="lead">Nenhuma postagem encontrada.</p>';
    }
    ?>
</div>

<form action="subscribe.php" method="post">
    <div class="form-group">
        <label for="email">Inscreva-se e seja mais um otaku sem volta:</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Inscrever-se</button>
</form>

<?php include 'includes/footer.php'; ?>

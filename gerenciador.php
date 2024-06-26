<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<h1>Gerenciador de Postagens</h1>
<a href="create.php" class="btn btn-dark mb-3">Criar novo conteúdo</a>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
         
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM posts ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['title'] . '</td>';
                    echo '<td>';
                    echo '<a href="editar.php?id=' . $row['id'] . '" class="btn btn-success btn-sm">Editar</a> ';
                    echo '<a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Excluir</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="4">Nenhuma postagem encontrada.</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>

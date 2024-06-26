<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h1>' . $row['title'] . '</h1>';
    echo '<img src="img/' . $row['image'] . '" class="img-fluid" alt="' . $row['title'] . '">';
    echo '<p>' . $row['content'] . '</p>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<p class="lead">Postagem não encontrada.</p>';
}
?>

<?php include 'includes/footer.php'; ?>

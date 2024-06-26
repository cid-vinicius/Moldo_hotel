<?php
include 'includes/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

if ($_FILES['image']['name']) {
    $image = $_FILES['image']['name'];
    $target = "img/" . basename($image);
    $sql = "UPDATE posts SET title = '$title', content = '$content', image = '$image' WHERE id = $id";
} else {
    $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $id";
}

if ($conn->query($sql) === TRUE) {
    if ($_FILES['image']['name'] && !move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "Erro ao carregar a imagem.";
    } else {
        header('Location: gerenciador.php');
    }
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

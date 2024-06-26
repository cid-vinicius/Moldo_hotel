<?php
include 'includes/db.php';

$title = $_POST['title'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];

$target = "img/" . basename($image);

$sql = "INSERT INTO posts (title, content, image) VALUES ('$title', '$content', '$image')";

if ($conn->query($sql) === TRUE) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Location: gerenciador.php');
    } else {
        echo "Erro ao carregar a imagem.";
    }
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

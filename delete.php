<?php
include 'includes/db.php';

$id = $_GET['id'];
$sql = "DELETE FROM posts WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: gerenciador.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

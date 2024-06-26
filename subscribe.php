<?php
include 'includes/db.php';

$email = $_POST['email'];

$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Agora que você virou um otaku, saia dessa vida!! (É sério)";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inscrito</title>
    <style>
        .button-link {
            font-size: 16px;
            color: white;
            background-color: white;
            text-align: center;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .button-link:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <p></p>
    <button class="button-link"><a href="index.php">Voltar</a></button>
    
</body>
</html>


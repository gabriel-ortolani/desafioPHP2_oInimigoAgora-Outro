<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $titulo = $_POST['titulo']; // Recebe o titulo do livro
    $autor = $_POST['autor']; // Recebe o autor do livro
    $genero = $_POST['genero']; //recebe o gênero do livro
    $data = $_POST['data']; //recebe a data de publicação do livro
    $sql = "INSERT INTO livros (titulo, autor, gênero, ano_publicado) VALUES ('$titulo', '$autor', '$genero', '$data')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>
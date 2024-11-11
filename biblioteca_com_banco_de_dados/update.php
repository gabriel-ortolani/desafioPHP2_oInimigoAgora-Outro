<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM livros WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $livros = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo']; // Recebe o novo titulo
    $autor = $_POST['autor']; // Recebe o novo autor
    $genero = $_POST['gênero']; // Recebe o novo gênero
    $data = $_POST['ano_publicado']; // Recebe o novo ano de publicação
    $sql = "UPDATE livros SET titulo='$titulo', autor='$autor', gênero='$genero', ano_publicado='$data' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar livro</title>
</head>
<body>
    <h1>Atualizar livro</h1>
    <form action="" method="POST">
        <label>Titulo:</label>
        <input type="text" name="titulo" value="<?php echo $livros['titulo']; ?>" required>
        <label>Autor:</label>
        <input type="text" name="autor" value="<?php echo $livros['autor']; ?>" required>
        <label>Gênero:</label>
        <select name="gênero" value="<?php echo $livros['gênero']; ?>">
            <option value="Ficção">Ficção</option>
            <option value="Não Ficção">Não Ficção</option>
            <option value="Poesia">Poesia</option>
            <option value="Teatro/Drama">Teatro/Drama</option>
            <option value="Literatura Gráfica">Literatura Gráfica</option>
        </select>
        <label>Data de publicação:</label>
        <input type="date" name="ano_publicado" value="<?php echo $livros['ano_publicado']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>
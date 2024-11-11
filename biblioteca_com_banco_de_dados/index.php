<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Adicionar livro</h1>
    <form action="store.php" method="POST">
        <label>Titulo</label>
        <input type="text" name="titulo">
        <label>Autor</label>
        <input type="text" name="autor">
        <label>Gênero</label>
        <select name="genero">
            <option value="Ficção">Ficção</option>
            <option value="Não Ficção">Não Ficção</option>
            <option value="Poesia">Poesia</option>
            <option value="Teatro/Drama">Teatro/Drama</option>
            <option value="Literatura Gráfica">Literatura Gráfica</option>
        </select>
        <label>Data de publicação</label>
        <input type="date" name="data">
        <input type="submit" value="Adicionar Livro" id="add">
    </form>
    <hr>

    <h2>Lista de livros</h2>

    <div>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>
<?php
include 'conexao.php';

$sql = "SELECT * FROM livros"; // Consulta todos os usuários
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>ID</th><th>Titulo</th><th>Autor</th><th>Gênero</th><th>Ano de publicação</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["titulo"] . "</td>
                <td>" . $row["autor"] . "</td>
                <td>" . $row["gênero"] . "</td>
                <td>" . $row["ano_publicado"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum livro encontrado."; // Mensagem se não houver usuários
}

?>
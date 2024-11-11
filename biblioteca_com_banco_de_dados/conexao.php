<?php
    $severname = "localhost";
    $username = "root";
    $password ="";
    $dbname ="site_biblioteca";

    $conn = new mysqli($severname, $username, $password, $dbname);

    if($conn -> connect_error){

        echo "Deu ruim(Erro na conexão)" . $conn->connect_error;
    
    }
    else{
    
        //echo "Deu bom(Conexão Bem-sucedida!)";
    
    }
?>
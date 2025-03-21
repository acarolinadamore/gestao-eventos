<?php
// Configuração da conexão com PostgreSQL
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

// Obtendo dados do formulário
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_evento = $_POST['data_evento'];
$local = $_POST['local'];

// Inserindo no banco
$query = "INSERT INTO eventos (titulo, descricao, data_evento, local) VALUES ($1, $2, $3, $4)";
$result = pg_query_params($conn, $query, array($titulo, $descricao, $data_evento, $local));

if ($result) {
    echo "<script>alert('Evento cadastrado com sucesso!'); window.location.href='listar-eventos.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar evento!'); window.history.back();</script>";
}

pg_close($conn);
?>

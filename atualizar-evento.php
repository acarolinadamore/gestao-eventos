<?php
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

// Pega os dados do formulário
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = !empty($_POST['descricao']) ? $_POST['descricao'] : null;
$data_evento = !empty($_POST['data_evento']) ? $_POST['data_evento'] : null;
$hora_evento = !empty($_POST['hora_evento']) ? $_POST['hora_evento'] : null;
$local = !empty($_POST['local']) ? $_POST['local'] : null;

// Atualiza os dados no banco
$query = "UPDATE eventos SET titulo = $1, descricao = $2, data_evento = $3, hora_evento = $4, local = $5 WHERE id = $6";
$params = array($titulo, $descricao, $data_evento, $hora_evento, $local, $id);

$result = pg_query_params($conn, $query, $params);

pg_close($conn);

header("Location: listar-eventos.php");
exit;

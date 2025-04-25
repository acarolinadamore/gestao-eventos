<?php
// Aqui conecta banco de dados
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

// Pega o ID do evento
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID do evento não informado.");
}

// Excluir evento do banco
$query = "DELETE FROM eventos WHERE id = $1";
$result = pg_query_params($conn, $query, array($id));

if ($result) {
    echo "<script>alert('Evento excluído com sucesso!'); window.location.href='listar-eventos.php';</script>";
} else {
    echo "<script>alert('Erro ao excluir evento!'); window.history.back();</script>";
}

pg_close($conn);
?>

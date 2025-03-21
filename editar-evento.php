<?php 
// Conectar ao PostgreSQL
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

// Verifica se o ID foi passado via GET
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID do evento não informado.");
}

// Buscar o evento pelo ID
$query = "SELECT * FROM eventos WHERE id = $1";
$result = pg_query_params($conn, $query, array($id));

if (!$row = pg_fetch_assoc($result)) {
    die("Evento não encontrado.");
}

pg_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>    
    <div class="container mt-5">
        <h2>Editar Evento</h2>
        <form action="atualizar-evento.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?? ''; ?>">

    <div class="mb-3">
        <label class="form-label">Título *</label>
        <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($row['titulo'] ?? ''); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control"><?= htmlspecialchars($row['descricao'] ?? ''); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Data do Evento</label>
        <input type="date" name="data_evento" class="form-control" value="<?= $row['data_evento'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Hora do Evento</label>
        <input type="time" name="hora_evento" class="form-control" value="<?= $row['hora_evento'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Local</label>
        <input type="text" name="local" class="form-control" value="<?= trim($row['local'] ?? ''); ?>">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

        <a href="listar-eventos.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>

<?php 
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = !empty($_POST['descricao']) ? $_POST['descricao'] : null;
    $data_evento = !empty($_POST['data_evento']) ? $_POST['data_evento'] : null;
    $hora_evento = !empty($_POST['hora_evento']) ? $_POST['hora_evento'] : null;
    $local = !empty($_POST['local']) ? $_POST['local'] : null;

    $query = "INSERT INTO eventos (titulo, descricao, data_evento, hora_evento, local) VALUES ($1, $2, $3, $4, $5)";
    $params = array($titulo, $descricao, $data_evento, $hora_evento, $local);

    pg_query_params($conn, $query, $params);
    pg_close($conn);

    header("Location: listar-eventos.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
</head>
<body>
<?php include 'menu.php'; ?>
    <div class="container mt-5">
        <h2 class="yesteryear-regular">Cadastrar Evento</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Título *</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Data do Evento</label>
                <input type="date" name="data_evento" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Hora do Evento</label>
                <input type="time" name="hora_evento" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Local</label>
                <input type="text" name="local" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <a href="listar-eventos.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>

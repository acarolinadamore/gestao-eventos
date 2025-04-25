<?php 
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = !empty($_POST['cpf']) ? $_POST['cpf'] : null;
    $email = !empty($_POST['email']) ? $_POST['email'] : null;
    $telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : null;
    $observacao = !empty($_POST['observacao']) ? $_POST['observacao'] : null;

    $query = "INSERT INTO participantes (nome, cpf, email, telefone, observacao) VALUES ($1, $2, $3, $4, $5)";
    $params = array($nome, $cpf, $email, $telefone, $observacao);

    pg_query_params($conn, $query, $params);
    pg_close($conn);

    header("Location: listar-participantes.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Participante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
</head>
<body>
<?php include 'menu.php'; ?>
    <div class="container mt-5">
        <h2 class="yesteryear-regular">Cadastrar Participante</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nome *</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email*</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Observação</label>
                <textarea name="observacao" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn-evenza">Cadastrar</button>
        </form>
        <a href="listar-participantes.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>

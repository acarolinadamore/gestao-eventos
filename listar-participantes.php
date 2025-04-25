<?php
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

$query = "SELECT * FROM participantes ORDER BY id ASC";
$result = pg_query($conn, $query);
pg_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
</head>
<body>
<?php include 'menu.php'; ?>
    <div class="container mt-5">
        <h2 class="yesteryear-regular">Participantes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Observação</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = pg_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= htmlspecialchars($row['nome']); ?></td>
                        <td><?= !empty($row['cpf']) ? htmlspecialchars($row['cpf']) : ''; ?></td>
                        <td><?= !empty($row['email']) ? htmlspecialchars($row['email']) : ''; ?></td>
                        <td><?= !empty($row['telefone']) ? htmlspecialchars($row['telefone']) : ''; ?></td>
                        <td><?= !empty($row['observacao']) ? htmlspecialchars($row['observacao']) : ''; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="cadastrar-participante.php" class="btn-evenza">Cadastrar Novo Participante</a>
    </div>
</body>
</html>

<?php
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

$query = "SELECT * FROM eventos ORDER BY id ASC";
$result = pg_query($conn, $query);
pg_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
</head>
<body>
<?php include 'menu.php'; ?>
    <div class="container mt-5">
    <h2 class="yesteryear-regular">Eventos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Local</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = pg_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= htmlspecialchars($row['titulo']); ?></td>
                        <td><?= !empty($row['descricao']) ? htmlspecialchars($row['descricao']) : ''; ?></td>
                        <td>
                            <?= !empty($row['data_evento']) ? date("d/m/Y", strtotime($row['data_evento'])) : ''; ?>
                        </td>
                        <td>
                            <?= !empty($row['hora_evento']) ? date("H:i", strtotime($row['hora_evento'])) : ''; ?>
                        </td>
                        <td><?= !empty($row['local']) ? htmlspecialchars($row['local']) : ''; ?></td>
                        <td>
                            <a href="editar-evento.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="excluir-evento.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="mt-3">
            <a href="cadastrar-evento.php" class="btn-evenza">Cadastrar Novo Evento</a>
        </div>
    </div>
</body>
</html>

<?php
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

// Obtendo dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$observacao = $_POST['observacao'];

// Inserir no banco
$query = "INSERT INTO participantes (nome, cpf, email, telefone, observacao) VALUES ($1, $2, $3, $4, $5)";
$result = pg_query_params($conn, $query, array($nome, $cpf, $email, $telefone, $observacao));

if ($result) {
    echo "<script>alert('Participante cadastrado com sucesso!'); window.location.href='listar-participantes.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar participante!'); window.history.back();</script>";
}

pg_close($conn);
?>

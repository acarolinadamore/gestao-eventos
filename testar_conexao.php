<?php
$conn = pg_connect("host=localhost dbname=web3-cc user=postgres password=postgres");

if ($conn) {
    echo "✅ Conexão com PostgreSQL bem-sucedida!";
} else {
    echo "❌ Erro ao conectar ao PostgreSQL.";
}
?>

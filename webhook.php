<?php
// Verifique se a solicitação é um POST
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receba os dados do webhook
    $webhookData = file_get_contents('php://input');

    // Você pode fazer algo com os dados recebidos aqui
    // Por exemplo, exibir os dados em formato JSON
    header('Content-Type: application/json');
    echo $webhookData;
} else {
    // Se a solicitação não for um POST, emita um erro ou realize alguma outra ação apropriada.
    http_response_code(405); // Método não permitido
    echo 'Método não permitido';
}*/
$nome=$_REQUEST['nome'];
echo($nome);
?>
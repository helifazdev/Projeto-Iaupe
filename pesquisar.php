<?php

// Recebe o termo de pesquisa do formulário
$q = $_GET['q'];

// Codifica o termo de pesquisa para ser usado na URL
$q_encoded = urlencode($q);

// URL do Google para pesquisar o termo
$url = "https://www.google.com/search?q=$q_encoded+site:upenet.com.br";

// Inicia uma sessão cURL
$ch = curl_init();

// Define as opções da requisição cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição cURL e armazena a resposta
$response = curl_exec($ch);

// Fecha a sessão cURL
curl_close($ch);

// Exibe a resposta na página
echo $response;
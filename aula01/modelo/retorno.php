<?php

$nome = $_REQUEST['nome'];
$animal = $_REQUEST['animal'];

if(empty($nome)){
    "tipo" => 'error',
    "mensagem" => "campos não definidos."
);
} else {
    switch($animal) {
        case '1' : $dados = array(
            "tipo" => 'cachorro.jpg',
            "mensagem" =>  "Teste" . $nome . '...'
        );
        break;

        case '2' : $dados = array(
            "tipo" => 'gato.jpg',
            "mensagem" =>  "Teste" . $nome . '...'
        );
        break;

        case '2' : $dados = array(
            "tipo" => 'peixe.jpg',
            "mensagem" =>  "Teste" . $nome . '...'
        );
        break;
    }
}

echo json_encode($dados);
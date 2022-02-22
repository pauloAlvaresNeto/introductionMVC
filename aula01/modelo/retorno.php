<?php

$nome = $_REQUEST['nome'];
$animal = $_REQUEST['animal'];

if(empty($nome)){
    $dados = array(

        "tipo" => 'error',
        "mensagem" => "campos não definidos."
    );

} else {
    switch($animal) {
        case '1' : $dados = array(
            "tipo" => 'cachorro.png',
            "mensagem" =>  "Teste" . $nome . '...'
        );
        break;

        case '2' : $dados = array(
            "tipo" => 'gato.png',
            "mensagem" =>  "Teste" . $nome . '...'
        );
        break;

        case '2' : $dados = array(
            "tipo" => 'peixe.png',
            "mensagem" =>  "Teste" . $nome . '...'
        );
        break;
    }
}

echo json_encode($dados);
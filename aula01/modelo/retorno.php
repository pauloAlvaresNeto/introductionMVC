<?php

$nome = $_REQUEST['nome'];
$animal = $_REQUEST['animal'];

if(empty($nome)){
    $dados = array(

        "tipo" => 'error',
        "mensagem" => 'campos não definidos.'
    );

} else {
    switch($animal) {
        case '1' : $dados = array(
            "tipo" => 'cachorro.png',
            "mensagem" =>  'Olá' . $nome . 'sabemos que seu animal preferido é o cachorro'
        );
        break;

        case '2' : $dados = array(
            "tipo" => 'gato.png',
            "mensagem" =>  'Olá' . $nome . 'sabemos que seu animal preferido é o gato'
        );
        break;

        case '3' : $dados = array(
            "tipo" => 'peixe.png',
            "mensagem" =>  'Olá' . $nome . 'sabemos que seu animal preferido é o peixe'
        );
        break;
    }
}

echo json_encode($dados);
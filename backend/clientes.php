<?php



require __DIR__.'/vendor/autoload.php';


use \App\Entity\cliente;

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json; charset=UTF-8");


$cliente = cliente::getClientes();


foreach($cliente as $cliente){

extract($cliente);

$lista_clientes["records"][$id] = [
    'id' => $id,
    'nome' => $nome,
    'dataData' => $dataData
];
}
http_response_code(200);
echo json_encode($lista_clientes);
?>



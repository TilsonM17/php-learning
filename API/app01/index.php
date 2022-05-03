<?php


function Api(){

    header('content-type:application/json;charset=utf-8');
    # Iniciar a api
    $response = [
        'status' => 'true', 
        'message' => 'Lista de produtos',
        'data' => [
            [
                'id' => 1,
                'nome' => 'Banana'
            ],
            [
                'id' => 2,
                'nome' => 'Morango'
            ],
            [
                'id' => 3,
                'nome' => 'Uva'
            ],
            [
                'id' => 4,
                'nome' => 'Abacate'
            ],    [
                'id' => 5,
                'nome' => 'Pera'
            ]
            
        ]
    ];

if(!isset($_GET['op'])){

    $response['status'] = 'false';
    $response['message'] = 'Este emdpoint não existe';
    
    return json_encode($response);
}else{

    $op = $_GET['op'];
    switch ($op) {
        case 'list':
            return json_encode($response);
            break;
        
        case 'add':
            if(!isset($_GET['id']) || !isset($_GET['nome'])){
                $response['status'] = 'false';
                $response['message'] = 'Dados não informado';
                return json_encode($response);
            }
            $_ = [
                'id' => $_GET['id'],
                'nome' => $_GET['nome']
            ];

            array_push($response, $_);

            return json_encode($response);

            break;
        
        default:
            $response['status'] = 'false';
            $response['message'] = 'Este emdpoint não existe';
            return json_encode($response);
            break;
    }
}

}

print_r(Api());
    
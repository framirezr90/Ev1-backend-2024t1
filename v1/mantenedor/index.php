<?php
include_once '../version1.php';

//parametros
$existeId = false;
$valorId = 0;

if (count($_parametros)>0){
    foreach($_parametros as $p){
        if(strpos($p, 'id') !== false){
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if($_version == 'v1'){
    if ($_mantenedor == 'mantenedor'){
        switch ($_metodo){
            case 'GET':
                if($_header == $_token_get){
                    /*include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    http_response_code(200);
                    echo json_encode(['data' => $lista]);
                    */
                    
                    
                    
                    $retorno = [
                        [
                            "id" => 1,
                            "nombre_completo" => 'Javiera Rivera Arraño',
                            "direccion"=> 'Ojos del salado 52',
                            "numero_telefono"=> '+56950162622',
                            "correo"=> 'riverajavieraa@gmail.com',
                            "solicitud_procesada" => true
                        ],
                        [
                            "id" => 2,
                            "nombre_completo" => 'Mathias Avila Riveros',
                            "direccion"=> 'Peñaflor 123',
                            "numero_telefono"=> '+56957162622',
                            "correo"=> 'mathias.avila@gmail.com',
                            "solicitud_procesada" => true
                        ],
                        [
                            "id" => 3,
                            "nombre_completo" => 'Fabían Ramírez Riveros',
                            "direccion"=> 'Padre Hurtado 456',
                            "numero_telefono"=> '+56950162622',
                            "correo"=> 'fabian.ramirez@gmail.com',
                            "solicitud_procesada" => false
                        ],
                        [
                            "id" => 4,
                            "nombre_completo" => 'Pablo Gandolfo Bustos',
                            "direccion"=> 'Camino Lonquen 1',                            
                            "numero_telefono"=> '+56950182622',
                            "correo"=> 'pepito.perez@gmail.com',
                            "solicitud_procesada" => false
                        ]

                    ];
                    http_response_code(200);
                    echo json_encode(['data' => $retorno]);

                }else{
                    http_response_code(401);
                    echo json_encode(['error' => 'no tiene autorizacion get']);
                }
                break;
            default:
                break;
        }
    }
}
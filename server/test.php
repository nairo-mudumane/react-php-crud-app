<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Methods: POST");
header("content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: content-type, Access-Control-Allow-Headers, Authorization, X-Requested-Width");

    if(isset($data)){
        echo json_encode([
            "sucess" => 1,
            "msg" => "$name",
            ]);
    }else {
        echo json_encode([
            "sucess" => 0,
            "msg"=>"Erro do PHP"
        ]);
    }
?>
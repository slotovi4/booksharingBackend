<?php

function e404($message) {
    header('HTTP/1.1 404 Not Found');
    $responce = [
        'message' => $message 
    ];
    
    echo json_encode($responce, JSON_UNESCAPED_UNICODE);
}
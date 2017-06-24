<?php
require_once('db.php');
require_once('functions.php');
//header('Content-type: application/json');

$id = isset($_GET['id']) ? $_GET['id'] : null;//isset есть ли данные, если есть получем иначе нулл

if ($id !== null) {
    $query = "SELECT * FROM `users` WHERE `id` = '{$id}'";//ищем пользователя из всех по id
    
    $result = mysqli_query($link, $query);//записываем в result результат запроса query в бд
    
    if($row_user = mysqli_fetch_assoc($result)) {//если не пустые данные
        $user = $row;
        $query_book = "SELECT * FROM `book` WHERE `user_id` = '{$row_user['id']}'";
        $result = mysqli_query($link, $query_book);

        if($row_book = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
            
            $responce = [
                'user' => $row_user,
                'books' => $row_book
            ];
            //echo print_r($responce);
            echo json_encode($responce, JSON_UNESCAPED_UNICODE);
        } 
    } else {
        e404('Такого id пользователя нет!');
    }
} else {
    e404('Данные о пользователе не переданы!');
}
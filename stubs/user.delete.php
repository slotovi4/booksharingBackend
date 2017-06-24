<?php
require_once('db.php');
require_once('functions.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id !== null) {//если id передан
    
    $query = "SELECT * FROM `users` WHERE `id` = '{$id}'";//ищу пользователя с таким id
    $result = mysqli_query($link, $query);
    
    if ($row = mysqli_fetch_assoc($result)) {//если такой пользователь существует
        
        $query_book = "SELECT * FROM `book` WHERE `user_id` = '{$id}'";//проверяю кол-во книг у юзера
        $result = mysqli_query($link, $query_book);

        if ($row = mysqli_fetch_assoc($result)) {//если есть книги удалять нельзя
            e404('У пользователя есть книги!');
        } else {//если книг нет
            $query_user = "DELETE FROM `users` WHERE `id` = '{$id}'";//запрос на удаление
            $result = mysqli_query($link, $query_user);

            echo json_encode('Пользователь удален!');
        }
    } else {
        e404("Такого id пользователя нет!");
    }
} else { 
    e404('Данные о пользователе не переданны!');
} 
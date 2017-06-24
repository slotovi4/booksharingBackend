<?php
require_once('db.php');
require_once('functions.php');

$query = 'SELECT * FROM `book` ORDER BY `user_id` DESC';

$result = mysqli_query($link, $query);

if ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)){//MYSQLI_ASSOC для получения ключа а не только значений
    echo json_encode($row, JSON_UNESCAPED_UNICODE);
} else {
    e404('Книг нет!');
}

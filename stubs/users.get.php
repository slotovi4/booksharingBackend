<?php
require_once('db.php');
require_once('functions.php');

$query = 'SELECT * FROM `users`';

$result = mysqli_query($link, $query);

if ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) {//все
    echo json_encode($row, JSON_UNESCAPED_UNICODE);
} else {
    e404('Данных о пользователей нет!');
}

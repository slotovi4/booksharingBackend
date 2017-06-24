<?php

$link = mysqli_connect('localhost', 'root', '', 'book_ring');//запрос к бд

if(mysqli_connect_errno()) {
    echo 'Ошибка а подключении к бд ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}

mysqli_set_charset($link, 'utf-8');
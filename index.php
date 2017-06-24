<!DOCTYPE html>
<html>
    <head>
        <title>132</title>
        <meta charset="utf-8">
        <script src="jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <span>ID = </span><input type="text" class="Id"><span> Name = </span><input type="text" class="Name"><br>
        <button class="getUser">Получить пользователя!</button><br>
        <button class="getUsers">Получить пользователей!</button><br>
        <button class="getBook">Получить книгу!</button><br>
        <button class="getBooks">Получить книги!</button><br>
        <button class="delUser">Удалить пользователя!</button><br>
        <button class="delBook">Удалить книгу!</button><br>
        <button class="noUser">Создать/редактировать пользователя!</button>
    </body>
    
    <script>
       document.querySelector('.getUser').onclick = getUser;
       document.querySelector('.getUsers').onclick = getUsers;
       document.querySelector('.getBook').onclick = getBook;
       document.querySelector('.getBooks').onclick = getBooks;
       document.querySelector('.delUser').onclick = delUser;
       document.querySelector('.delBook').onclick = delBook;
       document.querySelector('.noUser').onclick = noUser;

        function getUser() {
            var id = document.querySelector('.Id').value;

            $.ajax({
                url: '/stubs/user.get.php',
                type: 'GET',
                data: {id : id},
                dataType: 'json'
            }).done (
                function (responce) { 
                    console.log(responce);
            }).fail (
                function () {console.log('ошибка!');
            });
        }
        
        function getUsers() {
            $.ajax({
                url: '/stubs/users.get.php',
                type: 'GET',
                dataType: 'json'
            }).done (
                function (responce) {
                    console.log(responce);
                }
            ).fail(
                function () {console.log('ошибка!');}
            );
        }
        
        function getBook() {
            var id = $('.Id').val();
            
            $.ajax({
                url: '/stubs/book.get.php',
                type: 'GET',
                data: {id : id},
                dataType: 'json'
            }).done (
                function (responce) {console.log(responce);}
            ).fail(
                function () {console.log("Ошибка!");}
            );
        }
        
        function getBooks() {
            $.ajax({
                url: '/stubs/books.get.php',
                type: 'GET',
                dataType: 'json'
            }).done(
                function (responce) {console.log(responce);}
            ).fail(
                function () {console.log("ошибка!");}
            );
        }
        
        function delUser() {
            var id = $('.Id').val();
            
            $.ajax({
                url: '/stubs/user.delete.php',
                type: 'GET',
                data: {id : id},
                dataType: 'json'
            }).done (
                function (responce) {console.log(responce);}
            ).fail(
                function () {console.log('ошибка!');}
            );
        }
        
        function delBook() {
            var id = $('.Id').val();
            
            $.ajax({
                url: '/stubs/book.delete.php',
                type: 'GET',
                data: {id : id},
                dataType: 'json'
            }).done (
                function (responce) {console.log(responce);}
            ).fail (
                function () {console.log('ошибка!');}
            );
        }
        
        function noUser() {
            var id = $('.Id').val();
            var name = $('.Name').val();
            
            $.ajax({
                url: '/stubs/user.up.new.php',
                type: 'GET',
                data: {id : id, name : name},
                dataType: 'json'
            }).done(
                function (responce) {console.log(responce);}
            ).fail(
                function () {console.log("ошибка!");}
            );
        }
    </script>
</html>

<?php
error_reporting(E_ALL);
echo '<pre>';
/********Вся информация*************/
//print_r($GLOBALS);
//print_r($_SERVER['REQUEST_METHOD']);
//print_r($_SERVER);
//print_r($GLOBALS['$_SERVER']['REQUEST_METHOD']);
/*---------------------------------*/


/********Массивы*************/
/*$tet = array('key' => 'value',
             'kek' => 'lol');
echo $tet['kek'];*/
/*----------------------------------*/


/********База данных*************/
//$resource = mysqli_connect('localhost', 'root', '');//подключение к базе данных
//print_r($resource);
//var_dump($resource);
/*--------------------------------*/

/********Обьекты*************/
/*class MyClass {
    function kek(){
        echo(123);
    }
}

$pep = new MyClass();
$pep->kek();*/
/*---------------------------*/


/*$x==5 ? echo 'x=5' : echo 'x!=5';
$x = $p=7 ? 7 : 0;*/
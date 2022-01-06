<?
//данные от пользователя. присвоение идет в строке 4,5 в login.php
function checkAuth(string $login, string $password)
{
$users = require __DIR__ . '/usersDB.php';
// провереят данные введенные строка 3 и что такой логин и пароль есть в базе днных 
foreach ($users as $user) {
    if ($user['login'] === $login && $user['password'] === $password){
        return true;
    } 
} 
return false; 
}

/*вернет имя пользователя если он авторизован, если не авторизован то вернет nall*/
// запрос результата этой функции произойдет из index.php строка 6
function getUserLogin() : ?string
{ 
    //в переменную попадет знач. кукки, если нет тогда пустая строка
    $loginFromCookie = $_COOKIE['login'] ?? ''; 
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }
    return null;
}
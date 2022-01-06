<?php

if (!empty($_POST)) { 
    require __DIR__ . '/auth.php'; // запрос данных функций
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

        if (checkAuth($login, $password)) 
        {
            setcookie('login', $login, 0, '/' ); // ставим кукки
            setcookie('password', $password, 0, '/' );
            (header('Location: /_avtoriz_cooki/index.php')); // редирект
        } else {
            $error = 'Ошибка авторизации';
        }
}
?>
<HTML><head> <title>страница входа</title></head>
<body>
<?php if (isset($error)): ?>
    <span style="color: red"><?= $error ?></span>
    <?php endif; ?>
         <form action="/_avtoriz_cooki/login.php" method="post"> <!-- сама в себя закибывает данные -->
            <input type="text" name="login">
            <br>
            <input type="password" name="password" name="password">
            <br>
            <input type="submit" value="Войти">
        </form>
</body></HTML>

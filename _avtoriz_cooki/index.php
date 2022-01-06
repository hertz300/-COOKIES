<?
echo ('Это главная страница html');
echo '<br>';

require __DIR__ . '/auth.php'; //делаем доступными все функции
$login = getUserLogin();//положим результан функции строка 16 из auth.php
?>
<HTML>
<head> 
    <title> Главная страница </title>
</head>
<body>
<style> .vxod{color:green}</style>
    <?php if ($login !== null) : ?>
    <div class="vxod"> Добро пожаловать, <?= $login ?></div>
    <?php else: ?>
    <a href="/_avtoriz_cooki/login.php">Авторизуйтесь</a>
    <?php endif; ?>
</body>
</HTML>
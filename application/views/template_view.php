<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/">
                    <img src="/images/lodo.png" alt="logo" id="logo">
                </a>
            </div>
            <?php

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if(isset($_SESSION['user'])){
                echo 'Добро пожаловать: '.$_SESSION['user'];
            }
            ?>
            <div class="col">
                <a href="/news"><h6>Новости</h6></a>
            </div>
            <div class="col">
                <a href="/portfolio"><h6>Портфолио</h6></a>
            </div>
            <div class="col">
                <a href="/services"><h6>Контакты</h6></a>
            </div>
     
            <?php if(!isset($_SESSION['user'])){?>
            <div class="col">
                <a href="/login"><h6>Вход</h6></a>
            </div>
            <div class="col">
                <a href="/signup"><h6>Регистрация</h6></a>
            </div>
            <?php } ?> <?php if(isset($_SESSION['admin'])){?>
            <div class="col">
                <a href="/admin"><h6>Admin Panel</h6></a>
            </div>
            
            <div class="col">
                <a href="/logout"><h6>Выход</h6></a>
            <?php } ?>
        </div>
    </div>
</header>
<main class="container">
    <?php include 'application/views/'.$content_view; ?>
</main>
<footer>

</footer>
</body>
</html>

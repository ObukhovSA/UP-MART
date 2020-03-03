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

            <div class="col">
                <a href="#"><h5>Главная</h5></a>
            </div>
            <div class="col">
                <a href="/portfolio"><h5>Портфолио</h5></a>
            </div>
            <div class="col">
                <a href="/services"><h5>Контакты</h5></a>
            </div>
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

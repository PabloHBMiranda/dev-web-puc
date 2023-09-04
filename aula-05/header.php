<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bundle/index.css">
    <script src="bundle/index.js"></script>
    <?php $url = $_SERVER["REQUEST_URI"];
    $url_part = explode('/', $url); ?>
    <title><?= end($url_part) ?></title>
</head>
<body>
<header>
    <?php
        include 'templates/sections/header/header-main.php';
    ?>
</header>
</body>
</html>
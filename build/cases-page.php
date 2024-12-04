<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        name="description"
        content="Разработка IT-инструментов для ваших проектов" />
    <link rel="shortcut icon" href="/img/logo-favicon.svg" type="image/x-icon" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" />
    <title>EndPoint - Разработка IT-инструментов для ваших проектов</title>

    <link rel="stylesheet" href="/css/style.min.css">
</head>

<body>
<div class="wrapper">
        <div class="wrapper__main">
            <?php
            include_once('header.php');
            ?>

            <?php

            include_once('services.php');
            include_once('contacts.php');
            ?>
        </div>


        <?php

        include_once('footer.php');

        ?>

    </div>
</body>

</html>
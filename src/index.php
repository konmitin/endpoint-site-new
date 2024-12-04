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

        <?php
        include_once('header.php');
        ?>
        <div class="wrapper__main">
            <div class="first-screen">
                <div class="first-screen__container container">
                    <div class="first-screen__main">
                        <div class="first-screen__left">
                            <h1 class="first-screen__title title title_h1">
                                Анализ  <br>
                                <span class="text_purple">Разработка </span><br>
                                Сопровождение <br>
                            </h1>
                            <p class="first-screen__subtitle">
                                Разрабатываем, внедряем и сопровождаем Битрикс24
                            </p>

                            <button class="first-screen__btn" data-btn="cta-popup">
                                Обсудить проект
                            </button>
                        </div>
                        <div class="first-screen__right">
                            <picture>
                                <source srcset="/img/first-screen-right.webp" type="image/webp">
                                <img class="first-screen__right-img" src="/img/first-screen-right.png" alt="Картинка">
                            </picture>
                        </div>
                    </div>
                    <div class="first-screen__bottom">
                        <button class="first-screen__bottom-btn">
                        </button>
                    </div>
                </div>
            </div>

            <?php


            include_once('automat.php');
            include_once('licensies.php');
            include_once('expertise.php');
            include_once('cases-block.php');
            include_once('services.php');
            include_once('contacts.php');
            ?>
        </div>


        <?php

        include_once('footer.php');

        ?>

    </div>

    <script src="/js/main.min.js"></script>
</body>

</html>
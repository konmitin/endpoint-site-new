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
    <title>Приветствие новому сотруднику - EndPoint</title>

    <link rel="stylesheet" href="/css/style.min.css">
</head>

<body>
    <div class="wrapper">

        <?php
        include_once('header.php');
        ?>
        <div class="wrapper__main">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__item-link">
                                Главная
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="/cases.php" class="breadcrumbs__item-link">
                                Кейсы
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            Приветствие новому сотруднику
                        </li>
                    </ul>
                </div>

            </div>

            <div class="case">
                <div class="case__container container">
                    <div class="case__top">
                        <div class="case__title-tag">
                            <h2 class="case__title title title_h2">Приветствие новому сотруднику</h2>
                            <ul class="case__tags">
                                <li class="case__tag">
                                    <span>Приложение</span>
                                </li>
                                <li class="case__tag">
                                    <span>По подписке</span>
                                </li>
                            </ul>
                        </div>

                        <div class="case__logo-screen">
                            <div class="case__logo-block">
                                <picture>
                                    <source srcset="/img/logo-case-1.webp" type="image/webp">
                                    <img src="/img/logo-case-1.png" alt="Логотип" class="case__logo-img">
                                </picture>

                                <a href="https://www.bitrix24.ru/apps/app/endpoint.hw/" class="case__logo-btn" target="_blank">
                                    Установить
                                </a>
                            </div>

                            <div class="case__screen-block">
                                <picture>
                                    <source srcset="/img/case-screen-1.webp" type="image/webp">
                                    <img src="/img/case-screen-1.png" alt="Скриншот" class="case__screen-img">
                                </picture>
                            </div>
                        </div>

                    </div>

                    <div class="case__bottom">
                        <div class="case__tabs">
                            <ul class="case__tabs-list">
                                <li data-tab="tab-1" class="case__tab active">Описание</li>
                                <li data-tab="tab-2" class="case__tab">Версии</li>
                                <li data-tab="tab-3" class="case__tab">Установка</li>
                            </ul>
                        </div>
                        <div class="case__contents">
                            <ul class="case__contents-list">
                                <li id="description" data-tab="content-1" class="case__content active">
                                    <h3 class="case__content-title case__content-title_h3">
                                        Приветствие новому сотруднику - удобство информирования новых сотрудников!
                                    </h3>

                                    <div class="case__content-group">
                                        <h4 class="case__content-title case__content-title_h4">
                                            Начало работы
                                        </h4>

                                        <p class="case__content-description">
                                            После установки приложение предложит зарегистрировать бота, который будет отправлять сообщения новым пользователям.
                                            Регистрация бота обязательное условие работы. Боту можно указать имя и выбрать аватарку
                                        </p>

                                        <picture>
                                            <source srcset="/img/case-screen-1.webp" type="image/webp">
                                            <img src="/img/case-screen-1.png" alt="Скриншот" class="case__content-img">
                                        </picture>
                                    </div>

                                    <div class="case__content-group">
                                        <h4 class="case__content-title case__content-title_h4">
                                            Процесс работы
                                        </h4>

                                        <p class="case__content-description">
                                            После регистрации бота появится основное окно приложения, где необходимо будет вводить своё сообщение.
                                            Для формирования сообщения для новых сотрудников достаточно начать писать в текстовом поле, для сохранения
                                            сообщения достаточно нажать в любом месте приложения, чтобы “пропал” фокус с текстового поля.
                                            Для проверки корректности сообщения, можно нажать кнопку “Отправить себе” и сообщения будет
                                            направлено вам в личные сообщения, где вы сможете оценить корректность
                                        </p>

                                        <picture>
                                            <source srcset="/img/case-screen-1.webp" type="image/webp">
                                            <img src="/img/case-screen-1.png" alt="Скриншот" class="case__content-img">
                                        </picture>
                                    </div>


                                </li>
                                <li id="version" data-tab="content-2" class="case__content ">
                                    <div class="case__content-group">
                                        <h4 class="case__content-title case__content-title_h4">
                                            Версия 1
                                        </h4>
                                        <p class="case__content-description">
                                            Создавайте сообщение, которое будет получать каждый новый сотрудник
                                        </p>
                                    </div>
                                </li>
                                <li id="install" data-tab="content-3" class="case__content">
                                    <div class="case__content-group">
                                        <h4 class="case__content-title case__content-title_h4">
                                            Установка
                                        </h4>
                                        <p class="case__content-description">
                                            Установка производится автоматически через Маркетплейс Битрикс24
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <?php

            include_once('cases-block.php');
            include_once('expertise.php');
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
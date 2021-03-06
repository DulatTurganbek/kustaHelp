<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/front/images/fovicon.svg">
    <link rel="stylesheet" href="/front/css/reset.css">
    <link rel="stylesheet" href="/front/css/slick.css">
    <link rel="stylesheet" href="/front/css/style.css">
</head>

<body>

<div class="body">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="header__logo" href="{{ route('home') }}">
                    <img src="/front/images/logo-header.svg" alt="">
                </a>
                <button class="burger">
                    <span class="burger-line"></span>
                </button>
                <div class="header__item-box"></div>
                <div class="header__item">


                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__list-item">
                                <a class="header__list-link" href="#about">
                                    О фонде
                                </a>
                            </li>
                            <li class="header__list-item">
                                <a class="header__list-link" href="#projects">
                                    Наши проекты
                                </a>
                            </li>
                            <li class="header__list-item">
                                <a class="header__list-link" href="#reports">
                                    Отчёты
                                </a>
                            </li>
                            <li class="header__list-item">
                                <a class="header__list-link" href="#contacts">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__contacts">
                        <p class="header__contacts-phone">
                            87789477600
                        </p>
                        <a class="header__contacts-email" href="#?">
                            Kustohelp@gmail.com
                        </a>
                        <a class="header__contacts-whatsaap" href="#?">
                            Написать нам
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__social">
                    <a class="footer__logo" href="#?">
                        <img class="footer__logo-img" src="/front/images/footer-logo.png" alt="">
                    </a>
                    <div class="footer__social-icons">
                        <a class="footer__social-link footer__social-youtube" href="#?">
                            <svg class="icon" width="22" height="15.9">
                                <use xlink:href="/front/images/icons/sprite.svg#youtube"></use>
                            </svg>
                        </a>
                        <a class="footer__social-link footer__social-instagram" href="#?">
                            <svg class="icon" width="19" height="19">
                                <use xlink:href="/front/images/icons/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                        <a class="footer__social-link footer__social-facebook" href="#?">
                            <svg class="icon" width="11" height="21">
                                <use xlink:href="/front/images/icons/sprite.svg#facebook"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="footer__social-contact">
                        <a class="footer__social-whatsaap" href="#?">
                            Написать нам
                        </a>
                        <a class="footer__social-email" href="#?">
                            Kustohelp@gmail.com
                        </a>
                    </div>
                </div>
                <div class="footer__about">
                    <h5 class="footer__title">
                        О нас
                    </h5>
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                О Фонде
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Команда фонда
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Попечительский совет
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Проекты
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Новости Фонда
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__partners">
                    <h5 class="footer__title">
                        Партнерам
                    </h5>
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Свои новости
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Пресса о нас
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Отчеты
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Годовые отчеты
                            </a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#?">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__contacts">
                    <h5 class="footer__title" id="contacts">
                        Контакты
                    </h5>
                    <div class="footer__contacts-item footer__contacts-address">
                        <h6 class="footer__contacts-title">
                            Адрес
                        </h6>
                        <p class="footer__contacts-text">
                            Алматы, ул. Набережная 1
                        </p>
                    </div>
                    <div class="footer__contacts-item footer__contacts-phone">
                        <h6 class="footer__contacts-title">
                            Телефон
                        </h6>
                        <p class="footer__contacts-text">
                            8 800 808-00-80
                        </p>
                    </div>
                    <div class="footer__contacts-item footer__contacts-mode">
                        <h6 class="footer__contacts-title">
                            Режим работы

                        </h6>
                        <p class="footer__contacts-text">
                            Пн - Пт / 8:30 - 19:00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- svg -->

    <svg>
        <symbol id="whatsaap-slide">

        </symbol>
    </svg>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/front/js/slick.min.js"></script>
<script src="/front/js/app.js"></script>
</body>

</html>

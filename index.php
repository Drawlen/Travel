<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Путешествуйте с нами</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper для отзывов в конце -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>

<!-- ВЕРХ -->

<header class="header">
    <div class="container header-container">
        <h1 class="logo">Путешествуйте вместе с нами</h1>
        <nav class="header-nav">
            <ul>
                <li> <a href="#We"> О нас </a> </li>
                <li> <a href="#cont"> Контакты </a> </li>
            </ul>
        </nav>
    </div>
</header>

<!-- ТИТУЛЬ -->

<main class="main">
    <section class="welcome">
        <div class="container">
            <h2 class="welcome-heading">Посетите новые места</h2>
            <div class="welcome-links">
                <a href="#travel" class="link">Ближайшие поездки</a>
                <a id= "We"></a>
            </div>
        </div>
    </section>

    <!-- О НАС -->

    <section class="about common-section">

        <div class="container">
            <div class="title-about">
                <h3 class="title"> Чем же мы занимаемся?</h3>
                <p class="subtitle">Мы организовываем групповые туристические поздки по России</p>
            </div>

            <div class="cards-wrapper">
                <div class="card">
                    <img src="css/img/bai3.jpg" alt="icon">
                </div>
                <div class="card">
                    <img src="css/img/1.jpeg" alt="icon">
                </div>
                <div class="card">
                    <img src="css/img/2.jpeg" alt="icon">
                </div>
                <div class="card">
                    <img src="css/img/4.jpeg" alt="icon">
                </div>
                <div class="card">
                    <img src="css/img/3.jpeg" alt="icon">
                </div>
                <a id= "travel"></a>
            </div>
        </div>
    </section>

    <!-- БЛИЖАЙШИЕ ПОЕЗДКИ -->

    <section class="services common-section common-section-dark">

        <div class="container">
            <div class="title-about">
                <h3 class="title-two">Ближайшие поездки:</h3>
            </div>

            <div class="cards-wrapper">
                <div class="card">
                    <img src="css/img/altai2.jpg" alt="icon">
                    <h4>Республика Алтай</h4>
                    <p> Дата поездки: 7 июня</p>
                    <a class="join-links" id="open-pop-up" >Оставить заявку</a>
                </div>
                <div class="card">
                    <img src="css/img/cumchat5.jpg" alt="icon">
                    <h4>Полуостров Камчатка </h4>
                    <p> Дата поездки: 21 июня</p>
                    <a class="join-links" id="open-pop-up1">Оставить заявку</a>
                </div>
                <div class="card">
                    <img src="css/img/karel1.jpg" alt="icon">
                    <h4>Респуслика Карелия</h4>
                    <p> Дата поездки: 12 июля</p>
                    <a class="join-links"  id="open-pop-up2">Оставить заявку</a>
                </div>
            </div>

            <div class="cards-wrapper">
                <div class="card">
                    <img src="css/img/volg1.jpg" alt="icon">
                    <h4>Волгоград</h4>
                    <p>       </p>
                    <p> Дата поездки: 26 июля</p>
                    <p>       </p>
                    <a class="join-links"  id="open-pop-up3">Оставить заявку</a>
                </div>
                <div class="card">
                    <img src="css/img/adig1.jpg" alt="icon">
                    <h4>Республика Адыгея</h4>
                    <p> Дата поездки: 9 августа</p>
                    <a class="join-links"  id="open-pop-up4">Оставить заявку</a>
                </div>
                <div class="card">
                    <img src="css/img/velnovg2.jpg" alt="icon">
                    <h4>Великий Новгород</h4>
                    <p> Дата поездки: 23 августа</p>
                    <a class="join-links"  id="open-pop-up5">Оставить заявку</a>
                </div>
            </div>
        </div>

        <!--POPUP МЕНЮ-->

        <div class="pop-up" id="pop-up">
            <div class="pop-up-container">
                <div class="pop-up-body" id="pop-up-body">
                    <p>Заявка</p>
                    <form action="">
                        <input type="text" id = "name"  placeholder="Ваше имя" required>
                        <label>ИМЯ</label> <input type="number" id = "number"  placeholder="Ваш телефон" required>
                        <label>НОМЕР ТЕЛЕФОНА</label><input type="email" id = "email" placeholder="Ваш Email" required>
                        <label>ЭЛЕКТРОННЫЙ АДРЕС</label>
                        <!--<input  type="submit">-->
                        <!--<button id="pop-up-close1"> Отправить заявку </button>-->
                        <button > Отправить заявку </button>
                    </form>
                    <div class="pop-up-close" id="pop-up-close">&#10006</div>
                </div>
            </div>
        </div>
        <script src="css/main.js"></script>
        <script src="css/script.js"></script>

    </section>
    <!-- ОТЗЫВЫ -->

    <section class="reviews">
        <div class="title-about">
            <h4 class="title-three"> Отзывы участников </h4>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="contents">
                        <p><img src="css/img/karelcom.jpg" width="200" height="200" align="center" /><br/>ㅤЭто моя первая поездка в Карелию<br/>ㅤи я в восторге: красивая природа, <br/>ㅤнесмотря на межсезонье, <br/>ㅤприветливые местные жители, <br/>ㅤвкуснейшая национальная кухня. </p>
                        <b> @andreygnom</b>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="contents">
                        <p><img src="css/img/altcom.jpeg" width="200" height="200" align="center" /><br/>ㅤВсем привет! Сначала были сомнения,<br/>ㅤно в короткое путешествие в Адыгею <br/>ㅤя все-таки отправилась.<br/>ㅤНе пожалела ни разу!<br/>ㅤОгромное спасибо вам за<br/>ㅤнезабываемые впечатления.</p>
                        <b> @etoiaprivet</b>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="contents">
                        <p><img src="css/img/adigcom.jpeg" width="200" height="200" align="center" /><br/>ㅤМоре впечатлений и эмоций! <br/>ㅤОчень насыщенный тур где тебе дают <br/>ㅤпопробовать и посмотреть по максимуму. <br/>ㅤСмотреть на горы и пить воду <br/>ㅤс рек - это прекрасно)</p>
                        <b> @iavtelevizore</b>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                mousewheel: true,
                keyboard: true,
            });
        </script>
    </section>
</main>

<!-- ПОДВАЛ -->

<footer class="footer">
    <div class="footer-social">
        <div class="container">
            <div class="footer-desc">
                <a name="cont"></a>
                <h4>Мы с социальных сетях</h4>
                <ul>
                    <li>
                        <img src="css/img/vk.png" width="20" height="20" alt="vk">
                        <a href="#!"> VK </a> </li>
                    <li>
                        <img src="css/img/tg.png" width="20" height="20" alt="tg">
                        <a href="#!"> Telegram </a> </li>
                    <li>
                        <img src="css/img/inst.png" width="20" height="20" alt="ins">
                        <a href="#!"> Instagram </a> </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-copy common-section-dark">
        <div class="container">
            <p>  </p>
        </div>
    </div>
</footer>

</body>
</html>

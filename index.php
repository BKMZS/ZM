<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <link href="styles/cs-select.css" rel="stylesheet" type="text/css">
    <link href="styles/cs-skin-underline.css" rel="stylesgeet" type="text/css">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <script src="scripts/classie.js"></script>
    <script src="scripts/selectFx.js"></script>
    <script src="scripts/slides.js"></script>
    <title>Мебель на заказ в Зеленограде</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Зел-Мебель</div>
        <nav>
            <ul class="topmenu">
                <li> <a href="">Главная</a></li>
                <li> <a href="" class="down">Наши работы</a>
                    <ul class="submenu">
                        <li><a href="">Мебель в ванную</a></li>
                        <li><a href="">Мебель в гостиную и ТВ зоны</a></li>
                        <li><a href="">Мебель в детскую</a></li>
                        <li><a href="">Полки и стеллажи</a></li>
                        <li><a href="">Прихожие</a></li>
                        <li><a href="">Тумбы</a></li>
                        <li><a href="">Шкафы и шкафы-купе</a></li>
                    </ul>
                </li>
                <li> <a href="" class="down">Блог</a>
                    <ul class="submenu">
                        <li><a href="">Искусственный камень для столешниц и раковин</a></li>
                        <li><a href="">Мебель с загруглёнными углами</a></li>
                        <li><a href="">Маленькая ванная - используем пространоство по макимуму</a></li>
                        <li><a href="">Маленький коридор - делаем из минусоы плюсы</a></li>   
                    </ul>
                </li>
                <li><a href="">Сотрудничество</a></li>
                <li><a href="">Наши контакты</a></li>
            </ul>
        </nav>

    <!--<div id="navWrap">
            <a href="/">Главная</a>
            <a href="index.php?page=jobs">Наши работы</a>
            <a href="index.php?page=zakaz">Как сделать заказ</a>
            <a href="index.php?page=blog">Блог</a>
            <a href="index.php?page=parners">Сотрудничество</a>
            <a href="index.php?page=contacts">Наши контакты</a>
        </div>-->
    </div>
</header>

<!--Карусель-->

<ul id="slides">
    <li class="slide showing">Slide 1</li>
    <li class="slide">Slide 2</li>
    <li class="slide">Slide 3</li>
    <li class="slide">Slide 4</li>
    <li class="slide">Slide 5</li>
</ul>

<!--УТП-->
<div id="promo">
    <h2 id="promoText">Заполните поля и получите скидку 10% на первый заказ</h2>
    <h3 id="mainText">Спектр изготавливаемых изделий разнообразен и не ограничивается однотипным подходом.<br>
        На сегодняшний день мы предлагаем изготовление различных видео мебели для гостиной,<br>
        спален, ванных комнат, шкафов для прихожих и коридоров, а также детских комнат.<br>
        Ассортимент насчитвает десятки наименований и постоянно пополняется: стенки, тумбы,<br>
        комоды, шкафы-купе, столы, встроенные шкафы и полки и многое другое.
    </h3>

<div class="container">
    <form method="post" onsubmit="send_form();">
        <section>
            <select class="cs-select cs-skin-underline">
                <option value="" disabled selected>Выберите тип помещения</option>
                <option value="1">Спальня</option>
                <option value="2">Прихожая</option>
            </select><br>
        </section>
        <section>
            <select class="cs-select cs-skin-underline">
                <option value="" disabled selected>Выберите площадь помещения</option>
                <option value="1">10м2</option>
                <option value="2">15м2</option>
            </select><br>
        </section>
        <section>
                <select class="cs-select cs-skin-underline">
                <option value="" disabled selected>Выберите материал</option>
                <option>ЛДСП</option>
                <option>МДФ Эмаль</option>
            </select><br>
        </section>
        <section>
            <select class="cs-select cs-skin-underline">
                <option value="" disabled selected>Выберите изделие</option>
                <option>Тумба</option>
                <option>Шкаф</option>
            </select><br>
        </section>
        <section>
                <textarea placeholder="Введите Ваш номер телефона" input type="number" name="numberPhone" size="15" maxlengh="20" value=""></textarea><br>
                <textarea placeholder="Ваш комментарий" cols=”25” rows=”10” wrap=”on”></textarea>
        </section>
    </form><br>
    <script>
            (function() {
                [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
                    new SelectFx(el);
                } );
            })();
    </script>
</div>

<!--Немного о нас-->
</div>
<div id="promoUs">
    <h2 id="promoTextUs">Немного о нас</h2>
    <div id="photoUs">
        <img src="images/photoUs.jpg" class="photoUs">
    </div>
    <h3 id="mainTextUs">Мы с радостью возьмёмся за воплощение в жизнь Ваших идей. Во избежание<br>
        недомолвок, все разработки тщательно прорабатываются до малейших деталей<br>
        как от руки, так и при помощи компьютерной графики. Заказчику предоставляется<br>
        3D модель заказа, и при полном соответствии с заявленными требованиями<br>
        подписывается договор.
        <p>За период пребывания на рынке мы наработали внушительную клиентскую базу и<br>
            зарекомендовали себя как ответственного исполнителя. Качественный сервис,<br>
            широкий ассортимент, гибкие цены, всё это позволяет быть<br>
            конкурентоспособными в независимости от времени.
        </p>
        <p>Для того чтобы оформить заказ, Вы можете оставить онлайн заявку на сайте или<br>
            же позвонить по указанным номерам телефона. В кратчайшие сроки менеджер<br>
            свяжется с Вами и обсудит все интересующие детали
        </p>
    </h3>
</div>

<!--Мы гарантируем-->
<div id="guarantee">
    <div id="guaranteePromo"></div>
    <h2 id="guaranteeTextPromo">Мы гарантируем:</h2>
    <h3 id="guaranteeMainText">
        <p><li>Все заказы выполняются в срок, не превышающий 21 рабочих дней;</li></p>
        <p><li>Исползование только экологически чистых, изностойких материалов;</li></p>
        <p><li>Работа осуществляется грамотно, аккуратно, с соблюдением технологий;</li></p>
        <p><li>Нестадартные решения, уникальный подход к испольнению Вашего заказа;</li></p>
        <p><li>Доставку, установку по указанному адресу;</li></p>
        <p><li>Широкий ассортимент предлагаемой продукции;</li></p>
        <p><li>Гарантию долговечности готового изделия;</li></p>
        <p><li>Лояльную ценовую политику.</li></p>
    </h3>
</div>



<!--Наши работы за март-->
<div id="jobsUs">
    <h2 id="jobsTextUs">Наши работы за март</h2>
    <div id="jobsPhoto">
        <img src="images/photoUs.jpg" class="jobsPhoto">
    </div>
</div>



<!--Отзывы-->
<div id="feedback">
    <h2 id="feedbackText">Отзывы</h2>
    <div id="feedbackCarousel"></div>
</div>

<!--Контакты-->
<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                zel-mebel89@mail.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                +7 (915) 335-43-56
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, Зеленоград
            </div>
        </div>
        <div id="social">
            <a href="https://vk.com/polno_mebeli" target="_blank">
                <img class="socialItem" src="images/vk.png"></a>
            <a href="https://www.instagram.com/zel_mebel/" target="_blank">
                <img class="socialItem" src="images/ig.png"></a>
            <a href="https://t.me/zelmebel89" target="_blank">
                <img class="socialItem" src="images/tg.png"></a>
        </div>

        <div id="copyrights">&copy; Зел-Мебель</div>
    </div>
</footer>

</body>
</html>
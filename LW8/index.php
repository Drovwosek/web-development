<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Лабораторная работа 8</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="header">
      <img class="header__logo contain_wrapper" src="images/logo.svg" />
      <div class="header__investments">
        <p class="header__investments-part">Что будет на курсе?</p>
        <p class="header__investments-part">Вопросы</p>
        <p class="header__investments-part">Автор</p>
      </div>
      <div class="header__button contain_wrapper">
        <span class="header__button-text">Записаться на курс</span>
      </div>
    </div>
    <div class="mainscreen">
      <div class="mainscreen__up">
        <p class="mainscreen__up-header">Не <span class="pink">делай</span> это</p>
        <img class="mainscreen__up-image contain_wrapper" src="images/Done.png" />
      </div>
      <div class="mainscreen__down">
        <p class="mainscreen__down-text">Онлайн-курс для творческих людей, о том, как управлять своим временем </p>
        <div class="mainscreen__button contain_wrapper">
          <span class="mainscreen__button-text">Записаться на курс</span>
        </div>
      </div>
    </div>
    <div class="benefits">
      <div class="benefits__blocks">
        <div class="benefits__time contain_wrapper">
          <img class="benefits__time-icon" src="images/Icon1.svg"  />
          <p class="benefits__text">Для тех, у кого слишком много идей и слишком мало времени</p>
        </div>
        <div class="benefits__notebooks contain_wrapper">
          <img class="benefits__notebooks-icon" src="images/Icon2.svg"  />
          <p class="benefits__text">Метод «списка не дел», который позволит успевать и реализовывать</p>
        </div>
        <div class="benefits__target contain_wrapper">
          <img class="benefits__target-icon" src="images/Icon3.svg"  />
          <p class="benefits__text">Курс научит творческих людей сосредоточиваться</p>
        </div>
      </div>
    </div>
    <div class="problems">
      <div class="problems__up">
        <img class="problems__up-image1 contain_wrapper" src="images/Finances.png" />
        <div class="problems__up-right">
          <h1 class="problems__right-header">Ты не успеешь</h1>
          <p class="problems__right-text">Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
        </div>
      </div>
      <div class="problems__down">
        <div class="problems__down-left">
          <h1 class="problems__left-header">Опять дедлайн</h1>
          <p class="problems__left-text">В мире, где столько всего интересного, когда же успевать жить?</p>
        </div>
        <img class="problems__down-image2 contain_wrapper" src="images/MindBlowing.png" />
      </div>
    </div>
    <div class="opportunities" >
      <h1 class="opportunities__header">На курсе ты <span class="pink">сможешь</span></h1>
      <div class="opportunities__blocks">
        <div class="opportunities__blocks-up">
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l1-image" src="images/l1.svg">
            <p class="opportunities__text">Понять, что нужно делать, а что делать не стоит.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l2-image" src="images/l2.svg">
            <p class="opportunities__text">Перестать себя искусственно ограничивать.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l3-image" src="images/l3.svg">
            <p class="opportunities__text">Определить сильные стороны и начать использовать слабые.</p>
          </div>
        </div>
        <div class="opportunities__blocks-bottom">
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l4-image" src="images/l4.svg">
            <p class="opportunities__text">Научиться достигать любой цели в 3 понятных шага.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l5-image" src="images/l5.svg">
            <p class="opportunities__text">Сотрудничать эффективно и с правильными людьми.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l6-image" src="images/l6.svg">
            <p class="opportunities__text">Оптимизировать общение с клиентами и проведение совещаний.</p>
          </div>
        </div>
      </div>
    </div>
    <?php
      include("form.php");
    ?>      
    <footer class="footer">
      <img class="footer__logo contain_wrapper" src="images/footerlogo.svg">
    </footer>
  </body>
</html>
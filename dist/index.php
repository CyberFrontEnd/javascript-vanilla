<?php header('Cache-Control: max-age=86400') ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content=" " name="description">
  <meta content=" " name="keywords">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/home.css">
  <link href="fonts/GothamPro-Bold.woff2" rel="preload" as="font" type="font/woff2" crossorigin="anonymous"/>
  <link href="fonts/MuseoSansCyrl-700.woff2" rel="preload" as="font" type="font/woff2" crossorigin="anonymous"/>
  <link href="fonts/CyrillicOld.woff2" rel="preload" as="font" type="font/woff2" crossorigin="anonymous"/>
  <link href="fonts/MuseoSansCyrl-500.woff2" rel="preload" as="font" type="font/woff2" crossorigin="anonymous"/>


  <title>Fighwear Главная</title>
</head>
<body>

<div class="fon position-fixed w-100"></div>

<!--Start headerTop-->
<header class="headerTop">
  <!-- Start headerTopMobil -->
  <div class="headerTopMobil justify-content-between align-items-center d-flex container">
    <a href="#" class="headerTop__wholesalers">Оптовикам</a>
    <a href="tel:+7 (800) 200-81-77" class="headerTop__tel"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
      </svg> +7 (800) 200-81-77</a>

    <address class="headerTop__address">г. Москва, м.Павелецкая ул. Дубининская, д. 80</address>
  </div>
  <!-- End headerTopMobil -->

  <div class="headerTopDesc justify-content-between align-items-center m-auto w-100">
    <div class="d-flex headerTopDescLeft">
      <a href="#" class="headerTopDescLeft__region d-flex trans-all-05">Ваш регион доставки: <span>г. Москва</span></a>
      <a href="#" target="_blank" class="trans-all-05">Оплата</a>
      <a href="#" target="_blank" class="trans-all-05">Доставка</a>
    </div>

    <div class="d-flex justify-content-between headerTopDescRightBlock w-100">
      <div class="d-flex headerTopDescRightInfo align-items-center justify-content-between w-100">
        <a href="tel:+7 (800) 200-81-77" class="headerRight__tel trans-all-05"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
          </svg> +7 (800)
          200-81-77</a>
        <a href="tel:+7 (499) 499-81-77" class="headerRight__tel trans-all-05"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
          </svg> +7 (499)
          499-81-77</a>
        <div class="headerRight__time">пн.-вс.: с 10:00 до 20:00</div>
        <a href="mailto:@info@fightwear.ru" class="headerRight__main trans-all-05"><i class="bi bi-envelope"></i>
          @info@fightwear.ru</a>
      </div>

      <a href="#"
         class="headerTopDescRight__call position-absolute d-flex align-items-center justify-content-center trans-all-05">Обратный
        звонок</a>
    </div>
  </div>
</header>
<!--End headerTop-->

<!--Start mobilMiddle-->
<div class="mobilMiddle d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="headerMobilMiddle__btn w-100 d-flex justify-content-start align-items-center">
      <a href="#" class="headerMobil__btn w-100 position-relative">
        <span></span>
        <span></span>
        <span></span>
      </a>

      <button type="button" class="headerMobilSearch__btn border-0">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
        </svg>
      </button>

      <form action="" class="searchMobil border-0 position-absolute w-100">
        <input placeholder="Поиск" type="text" class="w-100">
        <button type="submit" class="search__btn position-relative border-0">Применить</button>
      </form>
    </div>

    <a href="#">
      <img src="images/mobilLogoMiddle.png" alt="">
    </a>

    <ul class="mobilMiddleRight d-flex w-100 justify-content-between align-items-center">
      <li>
        <a href="#">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          </svg>
        </a>
      </li>

      <li>
        <a href="#">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
          </svg>
        </a>
      </li>

      <li>
        <a href="#">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg>
        </a>
      </li>
    </ul>

    <div class="tab-container position-fixed h-100">
      <ul class="nav nav-tabs w-100 border-0 p-0" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="Женское"
             aria-selected="true">Женское</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="Мужское"
             aria-selected="false">Мужское</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="Детское"
             aria-selected="false">Детское</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <ul class="tab-menu">
            <li>
              <a href="#">Новинки</a>
            </li>

            <li>
              <a href="#">Бренды</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">одежда</a>

              <ul class="tab-menu__sub h-100 position-fixed">
                <li>
                  <a href="#" class="tab-menu__subPrev">Назад</a>
                </li>

                <li>
                  <a href="#">Вся одежда</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active2">Платья</a>

                  <ul class="tab-menu__sub2 position-fixed h-100">
                    <li>
                      <a href="#" class="tab-menu__subPrev2">Назад</a>
                    </li>

                    <li>
                      <a href="#">Вся одежда</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Куртки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">брюки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Пуховики</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">деним</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Свитшоты</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">пальто</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">юбки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Футболки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">жакеты</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Белье</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Купальники</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Обувь</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Сумки</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Аксессуары</a>
            </li>

            <li>
              <a href="#">Подарочные карты</a>
            </li>

            <li>
              <a href="#">Часы</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Ювелирные украшения</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Косметика</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">apple</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Интерьер</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Новости</a>
            </li>
          </ul>

          <a href="#" class="personal__cabinet d-block">Личный кабинет</a>

          <div class="fightwear w-100">
            <h2 class="text-uppercase"><span>FIGHTWEAR</span></h2>
          </div>

          <ul class="tab__about w-100">
            <li>
              <a href="#">О нас</a>
            </li>

            <li>
              <a href="#">Контакты</a>
            </li>

            <li>
              <a href="#">Блог</a>
            </li>

            <li>
              <a href="#">Оптовикам</a>
            </li>

            <li>
              <a href="#">Виды спорта</a>
            </li>

            <li>
              <a href="#">Спортсмены</a>
            </li>

            <li>
              <a href="#">Бренды</a>
            </li>

            <li>
              <a href="#">Оплата, доставка и возврат</a>
            </li>

            <li>
              <a href="#">Акции</a>
            </li>

            <li>
              <a href="#">Договор оферта</a>
            </li>

            <li>
              <a href="#">Наши партнеры</a>
            </li>

            <li>
              <a href="#">Вакансии</a>
            </li>
          </ul>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

          <ul class="tab-menu">
            <li>
              <a href="#">Новинки</a>
            </li>

            <li>
              <a href="#">Бренды</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">одежда</a>

              <ul class="tab-menu__sub position-fixed h-100">
                <li>
                  <a href="#" class="tab-menu__subPrev">Назад</a>
                </li>

                <li>
                  <a href="#">Вся одежда</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active2">Платья</a>

                  <ul class="tab-menu__sub2 position-fixed h-100">
                    <li>
                      <a href="#" class="tab-menu__subPrev2">Назад</a>
                    </li>

                    <li>
                      <a href="#">Вся одежда</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Куртки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">брюки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Пуховики</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">деним</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Свитшоты</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">пальто</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">юбки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Футболки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">жакеты</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Белье</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Купальники</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Обувь</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Сумки</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Аксессуары</a>
            </li>

            <li>
              <a href="#">Подарочные карты</a>
            </li>

            <li>
              <a href="#">Часы</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Ювелирные украшения</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Косметика</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">apple</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Интерьер</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Новости</a>
            </li>
          </ul>

          <a href="#" class="personal__cabinet">Личный кабинет</a>

          <div class="fightwear">
            <h2><span>FIGHTWEAR</span></h2>
          </div>

          <ul class="tab__about">
            <li>
              <a href="#">О нас</a>
            </li>

            <li>
              <a href="#">Контакты</a>
            </li>

            <li>
              <a href="#">Блог</a>
            </li>

            <li>
              <a href="#">Оптовикам</a>
            </li>

            <li>
              <a href="#">Виды спорта</a>
            </li>

            <li>
              <a href="#">Спортсмены</a>
            </li>

            <li>
              <a href="#">Бренды</a>
            </li>

            <li>
              <a href="#">Оплата, доставка и возврат</a>
            </li>

            <li>
              <a href="#">Акции</a>
            </li>

            <li>
              <a href="#">Договор оферта</a>
            </li>

            <li>
              <a href="#">Наши партнеры</a>
            </li>

            <li>
              <a href="#">Вакансии</a>
            </li>
          </ul>
        </div>

        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <ul class="tab-menu">
            <li>
              <a href="#">Новинки</a>
            </li>

            <li>
              <a href="#">Бренды</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">одежда</a>

              <ul class="tab-menu__sub position-fixed h-100">
                <li>
                  <a href="#" class="tab-menu__subPrev">Назад</a>
                </li>

                <li>
                  <a href="#">Вся одежда</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active2">Платья</a>

                  <ul class="tab-menu__sub2 position-fixed h-100">
                    <li>
                      <a href="#" class="tab-menu__subPrev2">Назад</a>
                    </li>

                    <li>
                      <a href="#">Вся одежда</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Куртки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">брюки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Пуховики</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">деним</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Свитшоты</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">пальто</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">юбки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Футболки</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">жакеты</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Белье</a>
                </li>

                <li>
                  <a href="#" class="tab-menu__active">Купальники</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Обувь</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Сумки</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Аксессуары</a>
            </li>

            <li>
              <a href="#">Подарочные карты</a>
            </li>

            <li>
              <a href="#">Часы</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Ювелирные украшения</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Косметика</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">apple</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Интерьер</a>
            </li>

            <li>
              <a href="#" class="tab-menu__active">Новости</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End mobilMiddle-->

<!--Start headerDesctop-->
<div class="headerDesctop d-flex align-items-center position-relative">
  <div class="headerDesctopIn d-flex justify-content-between align-items-center m-auto w-100">
    <ul class="headerMiddleLeft d-flex justify-content-between align-items-center">
      <li>
        <a href="#">Женское</a>
      </li>

      <li>
        <a href="#" class="active">Мужское</a>
      </li>

      <li>
        <a href="#">Детское</a>
      </li>
    </ul>

    <a href="#" class="logo position-relative">
      <img src="images/logo.svg" alt="">
    </a>

    <div class="d-flex cabinetMain w-100">
      <div class="cabinet d-flex justify-content-between align-items-center">
        <div class="cabinetImg d-flex justify-content-center align-items-center position-relative">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          </svg>
        </div>

        <div class="cabinet__href">
          <a href="#" class="d-block">Кабинет</a>
          <a href="#" class="d-block">вход</a>
        </div>
      </div>

      <div class="cabinet d-flex justify-content-between align-items-center">
        <div class="cabinetImg d-flex justify-content-center align-items-center position-relative">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
          </svg>
        </div>

        <div class="cabinet__href">
          <a href="#" class="d-block">Избранное</a>
          <a href="#" class="d-block">1110 товаров</a>
        </div>
      </div>

      <div class="cabinet basket d-flex justify-content-between align-items-center">
        <div class="cabinetImg d-flex justify-content-center align-items-center position-relative">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg>
        </div>

        <div class="cabinet__href">
          <a href="#" class="d-block">9 999 999 ₽</a>
          <a href="#" class="d-block">99 товаров</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End headerDesctop-->


<!--Start nav-->
<nav class="nav">
  <div class="navIn d-flex justify-content-between align-items-top w-100">
    <ul class="menu d-flex justify-content-between align-items-top">
      <li>
        <a href="#">Новинки</a>
      </li>

      <li>
        <a href="#" class="menu__arrey position-relative">Одежда</a>

        <div class="menuDown">
          <div class="menuDownIn d-flex justify-content-between">
            <div class="menuDownList menuDownListclothes">
              <a href="#" class="menuDownList__href"><span>НЕОПРЕНОВЫЕ МАСКИ (171)</span></a>
              <a href="#" class="menuDownList__href"><span>ТРЕНИРУЕМСЯ ДОМА (21)</span></a>
              <a href="#" class="menuDownList__href"><span>КРЕМА И МАЗИ (69)</span></a>
              <a href="#" class="menuDownList__href"><span>ЭКСКЛЮЗИВНО В FIGHTWEAR (21)</span></a>
              <a href="#" class="menuDownList__href"><span>БАРАХОЛКА (69)</span></a>

              <div class="menuDownList">
                <a href="#" class="menuDownList__href">РАШГАРДЫ (71)</a>

                <ul class="menuDownListBlock">
                  <li>
                    <a href="#">Длинный рукав (35)</a>
                  </li>

                  <li>
                    <a href="#">Короткий рукав (35)</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">СУМКИ И РЮКЗАКИ (51)</a>

              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Сумки (35)</a>
                </li>

                <li>
                  <a href="#">Рюкзаки (35)</a>
                </li>
              </ul>


              <div class="menuDownList">
                <a href="#" class="menuDownList__href">КОФТЫ (572)</a>

                <ul class="menuDownListBlock">
                  <li>
                    <a href="#">Толстовки (670)</a>
                  </li>

                  <li>
                    <a href="#">Лонгсливы (480)</a>
                  </li>

                  <li>
                    <a href="#">Олимпийки (670)</a>
                  </li>

                  <li>
                    <a href="#">Худи (480)</a>
                  </li>

                  <li>
                    <a href="#">Свитшоты (480)</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">КУРТКИ (51)</a>

              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Спортивные куртки (35)</a>
                </li>
              </ul>


              <div class="menuDownList">
                <a href="#" class="menuDownList__href">ГОЛОВНЫЕ УБОРЫ (51)</a>

                <ul class="menuDownListBlock">
                  <li>
                    <a href="#">Шапки (35)</a>
                  </li>

                  <li>
                    <a href="#">Кепки (35)</a>
                  </li>

                  <li>
                    <a href="#">Бейсболки (35)</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="menuFormSearchBlock w-100">
              <form action="#"
                    class="menuFormSearch d-flex align-items-center justify-content-between position-relative w-100">
                <input placeholder="Например, сумка Everlast" type="text" class="w-100">

                <button type="submit" class="menuSearch position-relative border-0">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </li>

      <li>
        <a href="#" class="menu__arrey position-relative">Экипировка</a>
        <div class="menuDown menuDown2">
          <div class="menuDownIn d-flex justify-content-between">
            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ПЕРЧАТКИ</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Боксерские перчатки</a>
                </li>

                <li>
                  <a href="#">Перчатки ММА</a>
                </li>

                <li>
                  <a href="#">Снарядные перчатки</a>
                </li>

                <li>
                  <a href="#">Перчатки для Каратэ </a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ЗАЩИТА</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Шлемы </a>
                </li>

                <li>
                  <a href="#">Капы</a>
                </li>

                <li>
                  <a href="#">Боксерские бинты</a>
                </li>

                <li>
                  <a href="#">Защита рук </a>
                </li>

                <li>
                  <a href="#">Защита паха </a>
                </li>

                <li>
                  <a href="#">Желеты и пояса </a>
                </li>

                <li>
                  <a href="#">Голеностопы </a>
                </li>

                <li>
                  <a href="#">Наколенники </a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">КИМОНО </a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Кимоно для BJJ </a>
                </li>

                <li>
                  <a href="#">Пояса для BJJ </a>
                </li>

                <li>
                  <a href="#">Кимоно для Дзюдо </a>
                </li>

                <li>
                  <a href="#">Пояса для Дзюдо </a>
                </li>

                <li>
                  <a href="#">Кимоно для Каратэ </a>
                </li>

                <li>
                  <a href="#">Пояса для Каратэ </a>
                </li>

                <li>
                  <a href="#">Куртка для Самбо </a>
                </li>

                <li>
                  <a href="#">Шорты для Самбо </a>
                </li>

                <li>
                  <a href="#">Кимоно для Тхэквандо </a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ИНВЕНТАРЬ / СНАРЯЖЕНИЕ</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Лапы и пэды </a>
                </li>

                <li>
                  <a href="#">Мешки и груши </a>
                </li>

                <li>
                  <a href="#">Резина </a>
                </li>

                <li>
                  <a href="#">Тренировочные маски </a>
                </li>

                <li>
                  <a href="#">Кинезиотейпы </a>
                </li>

                <li>
                  <a href="#">Гири</a>
                </li>

                <li>
                  <a href="#">Прочие системы</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ТАКТИЧЕСКАЯ ЭКИПИРОВКА </a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Тактические перчатки </a>
                </li>
              </ul>
            </div>

            <div class="menuFormSearchBlock w-100">
              <form action="#"
                    class="menuFormSearch d-flex align-items-center justify-content-between position-relative w-100">
                <input placeholder="Например, сумка Everlast" type="text" class="w-100">
                <button type="submit" class="menuSearch position-relative border-0">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </li>

      <li>
        <a href="#" class="menu__arrey position-relative">Обувь</a>
        <div class="menuDown">
          <di class="menuDownIn d-flex justify-content-between">
            <div class="menuDownList">
              <a href="#" class="menuDownList__href">БОКСЕРКИ </a>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">БОРЦОВКИ </a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Борцовки для Самбо</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">КРОССОВКИ</a>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">СЛАНЦЫ </a>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">НОСКИ </a>
            </div>


            <div class="menuFormSearchBlock w-100">
              <form action="#"
                    class="menuFormSearch d-flex align-items-center justify-content-between position-relative w-100">
                <input placeholder="Например, сумка Everlast" type="text" class="w-100">
                <button type="submit" class="menuSearch position-relative border-0">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
              </form>
            </div>
          </di>
        </div>
      </li>

      <li>
        <a href="#" class="menu__arrey position-relative">Аксессуары</a>
        <div class="menuDown">
          <div class="menuDownIn d-flex justify-content-between">
            <div class="menuDownList">
              <a href="#" class="menuDownList__href">СУМКИ И РЮКЗАКИ</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Сумки</a>
                </li>

                <li>
                  <a href="#">Рюкзаки</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ЖИМОВЫЕ ПЕРЧАТКИ </a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ШЕЙКЕРЫ </a>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ТЕЙПЫ </a>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">СКАКАЛКИ</a>
            </div>


            <div class="menuFormSearchBlock w-100">
              <form action="#"
                    class="menuFormSearch d-flex align-items-center justify-content-between position-relative w-100">
                <input placeholder="Например, сумка Everlast" type="text">
                <button type="submit" class="menuSearch position-relative border-0">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </li>

      <li>
        <a href="#">Бренды</a>
      </li>

      <li>
        <a href="#" class="menu__arrey position-relative">Спорт</a>

        <div class="menuDown menuDownSport">
          <div class="menuDownIn d-flex justify-content-between">
            <div class="menuDownList">
              <a href="#" class="menuDownList__href">ММА</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">ММА шорты</a>
                </li>

                <li>
                  <a href="#">ММА перчатки</a>
                </li>

                <li>
                  <a href="#">ММА сумки</a>
                </li>

                <li>
                  <a href="#">Наколенники</a>
                </li>

                <li>
                  <a href="#">Каппы</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Бокс</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Боксерские шорты</a>
                </li>

                <li>
                  <a href="#">Боксерские перчатки</a>
                </li>

                <li>
                  <a href="#">Проф. перчатки</a>
                </li>

                <li>
                  <a href="#">Каппы</a>
                </li>

                <li>
                  <a href="#">Бинты для рук</a>
                </li>

                <li>
                  <a href="#">Головные уборы</a>
                </li>

                <li>
                  <a href="#">Боксерские груши</a>
                </li>

                <li>
                  <a href="#">Боксерские туфли</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Муай-тай</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Муай-тай шорты</a>
                </li>

                <li>
                  <a href="#">Муай-тай перчатки</a>
                </li>

                <li>
                  <a href="#">Щитки</a>
                </li>

                <li>
                  <a href="#">Каппы</a>
                </li>

                <li>
                  <a href="#">Бинты для рук</a>
                </li>

                <li>
                  <a href="#">Головные уборы</a>
                </li>

                <li>
                  <a href="#">Налокотники</a>
                </li>

                <li>
                  <a href="#">Поддержка лодыжки</a>
                </li>

                <li>
                  <a href="#">Поддержка паха</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">BJJ</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">BJJ кимоно</a>
                </li>

                <li>
                  <a href="#">BJJ пояса</a>
                </li>

                <li>
                  <a href="#">BJJ рашгарды</a>
                </li>

                <li>
                  <a href="#">BJJ гетры</a>
                </li>

                <li>
                  <a href="#">BJJ шорты</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Карате</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Карате кимоно</a>
                </li>

                <li>
                  <a href="#">Карате пояса</a>
                </li>

                <li>
                  <a href="#">Зашщитная экипировка</a>
                </li>

                <li>
                  <a href="#">Карате перчатки</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Фитнес</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Скакалки</a>
                </li>

                <li>
                  <a href="#">Фитес шорты</a>
                </li>

                <li>
                  <a href="#">Рубашки компрессионные</a>
                </li>

                <li>
                  <a href="#">Штаны компрессионные </a>
                </li>

                <li>
                  <a href="#">Шорты компрессионные</a>
                </li>

                <li>
                  <a href="#">Майки</a>
                </li>

                <li>
                  <a href="#">Cпортивные бюстгальтеры</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>

      <li>
        <a href="#" class="menu__arrey position-relative">Блог</a>

        <div class="menuDown menuDown2">
          <div class="menuDownIn d-flex justify-content-between">
            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Новости</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Новости спорта</a>
                </li>

                <li>
                  <a href="#">Новости Fightwear.ru</a>
                </li>

                <li>
                  <a href="#">Фотосессии</a>
                </li>

                <li>
                  <a href="#">Клуб Fightwear.ru</a>
                </li>

                <li>
                  <a href="#">Благотворительность</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Разбор техник приемов</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Ударные техника</a>
                </li>

                <li>
                  <a href="#">Борцовские техники</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Видео обзоры товаров</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Перчатки</a>
                </li>

                <li>
                  <a href="#">Защита</a>
                </li>

                <li>
                  <a href="#">Кимоно</a>
                </li>

                <li>
                  <a href="#">Рашгарды</a>
                </li>

                <li>
                  <a href="#">Спортивная обувь</a>
                </li>

                <li>
                  <a href="#">Снаряжение</a>
                </li>
              </ul>
            </div>

            <div class="menuDownList">
              <a href="#" class="menuDownList__href">Статьи</a>
              <ul class="menuDownListBlock">
                <li>
                  <a href="#">Как выбрать экипировку?</a>
                </li>

                <li>
                  <a href="#">Обзоры товаро</a>
                </li>

                <li>
                  <a href="#">Спортсмены</a>
                </li>

                <li>
                  <a href="#">Турниры</a>
                </li>
              </ul>
            </div>

            <div class="menuFormSearchBlock w-100">
              <form action="#"
                    class="menuFormSearch d-flex align-items-center justify-content-between position-relative w-100">
                <input placeholder="Например, сумка Everlast" type="text">

                <button type="submit" class="menuSearch position-relative border-0">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </li>

      <li>
        <a href="#">Оптовикам</a>
      </li>

      <li>
        <a href="#">Контакты</a>
      </li>

      <li>
        <a href="#">Sale%</a>
      </li>
    </ul>

    <form class="search justify-content-between align-items-start">
      <input type="search" placeholder="Поиск" aria-label="Search" class="border-0">
      <button class="search__btn position-relative border-0" type="submit">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
        </svg>
      </button>
    </form>
  </div>
</nav>
<!--End nav-->

<!--Start topSliderBlock-->
<section class="topSliderBlock">
  <div class="swiper-container w-100 mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="headerSliderContent d-flex justify-content-between align-items-start">
          <div class="headerSliderLeft">
            <div class="headerSliderLeft__title">Fightwear.ru <br>
              магазин профессиональной одежды <br>
              и экипировки для всех видов <br>
              единоборств и фитнеса
            </div>

            <a href="#" class="headerSlider__btn align-items-center justify-content-center trans-all-05">В каталог</a>

            <div class="work">Работаем с 1917 года</div>
          </div>

          <div class="headerSliderRight">
            <img src="images/blud320.png" alt="" class="bludMobil">
            <img src="images/blud768.png" alt="" class="bludTable">
            <img src="images/blud1920.png" alt="" class="bludDesc">
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="headerSliderContent d-flex justify-content-between align-items-start">
          <div class="headerSliderLeft">
            <div class="headerSliderLeft__title">Fightwear.ru <br>
              магазин профессиональной одежды <br>
              и экипировки для всех видов <br>
              единоборств и фитнеса
            </div>

            <a href="#" class="headerSlider__btn align-items-center justify-content-center">В каталог</a>

            <div class="work">Работаем с 1917 года</div>
          </div>

          <div class="headerSliderRight">
            <img src="images/blud320.png" alt="" class="bludMobil">
            <img src="images/blud768.png" alt="" class="bludTable">
            <img src="images/blud1920.png" alt="" class="bludDesc">
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="headerSliderContent d-flex justify-content-between align-items-start">
          <div class="headerSliderLeft">
            <div class="headerSliderLeft__title">Fightwear.ru <br>
              магазин профессиональной одежды <br>
              и экипировки для всех видов <br>
              единоборств и фитнеса
            </div>

            <a href="#" class="headerSlider__btn align-items-center justify-content-center">В каталог</a>

            <div class="work">Работаем с 1917 года</div>
          </div>

          <div class="headerSliderRight">
            <img src="images/blud320.png" alt="" class="bludMobil">
            <img src="images/blud768.png" alt="" class="bludTable">
            <img src="images/blud1920.png" alt="" class="bludDesc">
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!--Start headerCategoryFon-->
  <div class="headerCategoryFon position-relative">
    <ul class="headerCategory d-flex justify-content-between align-items-lg-start">
      <li class="col-xl-3 col-md-3 col-sm-3 col-6 position-relative">
        <a href="#" class="headerCategory__new d-flex justify-content-between align-items-center">
          <span class="d-flex justify-content-center align-items-center">Новинки</span>
        </a>
      </li>


      <li class="col-xl-3 col-md-3 col-sm-3 col-6 position-relative">
        <a href="#" class="headerCategory__sale d-flex justify-content-between align-items-center">
          <span class="d-flex justify-content-center align-items-center">Скидки</span>
        </a>
      </li>

      <li class="col-xl-3 col-md-3 col-sm-3 col-6 position-relative">
        <a href="#" class="headerCategory__mase d-flex justify-content-between align-items-center">
          <span class="d-flex justify-content-center align-items-center">Неопреновые маски</span>
        </a>
      </li>

      <li class="col-xl-3 col-md-3 col-sm-3 col-6 position-relative">
        <a href="#" class="headerCategory__day d-flex justify-content-between align-items-center">
          <span class="d-flex justify-content-center align-items-center">Товар дня</span>
        </a>
      </li>
    </ul>
  </div>
  <!--End headerCategoryFon-->
</section>
<!--End mySwiper-->

<!--Start sliderBlock-->
<section class="sliderBlock lazy">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">
        Категории</a>
    </span>
  </h2>

  <div class="categorySlider swiper-container w-100">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <img data-src="images/item.png" class="swiper-lazy"/>
          <div class="swiper-lazy-preloader"></div>
          <span>Рашгарды</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <img data-src="images/item2.png" class="swiper-lazy"/>
          <div class="swiper-lazy-preloader"></div>
          <span>Футболки</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <img data-src="images/item3.png" class="swiper-lazy"/>
          <div class="swiper-lazy-preloader"></div>
          <span>Спортивная одежда для детей</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <img data-src="images/item4.png" class="swiper-lazy"/>
          <div class="swiper-lazy-preloader"></div>
          <span>Бойцовские шорты</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <img data-src="images/item5.png" class="swiper-lazy"/>
          <div class="swiper-lazy-preloader"></div>
          <span>Кофты</span>
        </a>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End sliderBlock-->

<!--Start topSlider-->
<section class="lazy position-relative">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05"> В топе </a>
    </span>
  </h2>

  <div class="swiper-container topSlider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderSale position-absolute">
            <div class="topSliderSale__sale text-center">-7%</div>
            <div class="topSliderSale__new text-uppercase text-center">new</div>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item6.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderSale position-absolute">
            <div class="topSliderSale__sale text-center">-7%</div>
            <div class="topSliderSale__new text-uppercase text-center">new</div>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item7.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item8.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End topSlider-->

<section class="banner lazy position-relative" data-src="images/bannerFon.jpg">
  <div class="bannerIn w-100 m-auto position-relative">
    <div class="banner__title text-uppercase">Акция действует до 9 июня</div>
    <div class="banner__title2">При покупке сумок Everlast гантели в подарок</div>

    <div class="d-flex bannerMobil">
      <div class="banner__desc">Без лишней волокиты заменим продукцию из нашего магазина</div>
      <a href="#" class="w-100 d-flex justify-content-center align-items-center banner__btn">Перейти к товару</a>
    </div>
  </div>
</section>

<!--Start topSlider-->
<section class="lazy position-relative">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">Акции</a>
    </span>
  </h2>

  <div class="swiper-container topSlider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderSale position-absolute">
            <div class="topSliderSale__sale text-center">-7%</div>
            <div class="topSliderSale__new text-uppercase text-center">new</div>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item6.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderSale position-absolute">
            <div class="topSliderSale__sale text-center">-7%</div>
            <div class="topSliderSale__new text-uppercase text-center">new</div>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item7.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item8.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End topSlider-->

<!--Start topSlider-->
<section class="lazy position-relative">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">Новое в блоге</a>
    </span>
  </h2>

  <div class="swiper-container topSlider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/news.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <div class="newsTag w-100 m-auto">
            <a href="#">Новости</a>
          </div>


          <a href="#" class="news__title d-block m-auto ">Незначительный биографический метод: основные моменты</a>

          <p class="newsContent__paragraf">Одиночество начинает неизменный онтологический статус искусства.</p>

          <a href="#" class="newsBtn m-auto d-block d-flex justify-content-between align-items-center">Подробнее</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/news2.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <div class="newsTag w-100 m-auto">
            <a href="#">Новости</a>
          </div>


          <a href="#" class="news__title d-block m-auto ">Незначительный биографический метод: основные моменты</a>

          <p class="newsContent__paragraf">Одиночество начинает неизменный онтологический статус искусства.</p>

          <a href="#" class="newsBtn m-auto d-block d-flex justify-content-between align-items-center">Подробнее</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/news3.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <div class="newsTag w-100 m-auto">
            <a href="#">Новости</a>
          </div>


          <a href="#" class="news__title d-block m-auto ">Незначительный биографический метод: основные моменты</a>

          <p class="newsContent__paragraf">Одиночество начинает неизменный онтологический статус искусства.</p>

          <a href="#" class="newsBtn m-auto d-block d-flex justify-content-between align-items-center">Подробнее</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/news.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <div class="newsTag w-100 m-auto">
            <a href="#">Новости</a>
          </div>


          <a href="#" class="news__title d-block m-auto ">Незначительный биографический метод: основные моменты</a>

          <p class="newsContent__paragraf">Одиночество начинает неизменный онтологический статус искусства.</p>

          <a href="#" class="newsBtn m-auto d-block d-flex justify-content-between align-items-center">Подробнее</a>
        </div>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End topSlider-->

<!--Start topSlider-->
<section class="lazy position-relative">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">Узнайте больше</a>
    </span>
  </h2>

  <div class="swiper-container moreSlider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/more.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <a href="#" class="news__title d-block m-auto ">Подарочные карты FightWear</a>

          <p class="newsContent__paragraf">Подарочные сертификаты с фиксированным
            номиналом в подарок для ваших близких</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/more2.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <a href="#" class="news__title d-block m-auto ">Подарочные карты FightWear</a>

          <p class="newsContent__paragraf">Подарочные сертификаты с фиксированным
            номиналом в подарок для ваших близких</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/more3.png" class="swiper-lazy"/>
            </a>
          </div>

          <a href="#" class="news__title d-block m-auto ">Подарочные карты FightWear</a>

          <p class="newsContent__paragraf">Подарочные сертификаты с фиксированным
            номиналом в подарок для ваших близких</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="newsContent w-100 position-relative m-auto">

          <div class="topSliderItem d-flex align-items-center justify-content-center m-auto">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/more4.jpg" class="swiper-lazy"/>
            </a>
          </div>

          <a href="#" class="news__title d-block m-auto ">Подарочные карты FightWear</a>

          <p class="newsContent__paragraf">Подарочные сертификаты с фиксированным
            номиналом в подарок для ваших близких</p>
        </div>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End topSlider-->

<!--Start topSlider-->
<section class="lazy position-relative">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">Акции</a>
    </span>
  </h2>

  <div class="swiper-container topSlider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderSale position-absolute">
            <div class="topSliderSale__sale text-center">-7%</div>
            <div class="topSliderSale__new text-uppercase text-center">new</div>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item6.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderSale position-absolute">
            <div class="topSliderSale__sale text-center">-7%</div>
            <div class="topSliderSale__new text-uppercase text-center">new</div>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item7.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="topSliderContent w-100 position-relative m-auto">
          <div class="topSliderContent__top d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center">В наличии</span>

            <button type="button" class="star border-0">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                   xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </button>
          </div>

          <div class="topSliderItem w-100 d-flex align-items-center justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
              <img data-src="images/item8.png" class="swiper-lazy"/>
            </a>
          </div>

          <div class="topSliderBottom">
            <a href="#" class="topSliderBottom__tag text-uppercase">СПОРТИВНЫЕ СУМКИ</a>

            <h1 class="topSliderBottom__title">
              <a href="#" class="text-uppercase">ОЛИМПИЙКА BOXRAW LOMA WHITAKER OLIVE/BLACK</a>
            </h1>
          </div>


          <div class="topSliderPrice  w-100 d-flex justify-content-between align-items-center">
            <span>7 333 р.</span>

            <a href="#" class="topSliderPrice__basket">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End topSlider-->

<!--Start sliderBlock-->
<section class="sliderBlock lazy">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">
      бренды <span class="titleH2__hide">спортивной</span> одежды</a>
    </span>
  </h2>

  <div class="single-item swiper-container w-100">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <span class="categorySlider__imgIn">
            <img data-src="images/breand.svg" class="swiper-lazy"/>
          </span>

          <div class="swiper-lazy-preloader"></div>
          <span>Absolute Weapon</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <span class="categorySlider__imgIn">
           <img data-src="images/breand2.svg" class="swiper-lazy"/>
          </span>

          <div class="swiper-lazy-preloader"></div>
          <span>Adidas</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <span class="categorySlider__imgIn">
           <img data-src="images/breand3.svg" class="swiper-lazy"/>
          </span>

          <div class="swiper-lazy-preloader"></div>
          <span>ACB</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <span class="categorySlider__imgIn">
           <img data-src="images/breand2.svg" class="swiper-lazy"/>
          </span>

          <div class="swiper-lazy-preloader"></div>
          <span>Adidas</span>
        </a>
      </div>

      <div class="swiper-slide">
        <a href="#" target="_blank" class="categorySlider__img w-100 d-block text-center">
          <span class="categorySlider__imgIn">
            <img data-src="images/breand4.svg" class="swiper-lazy"/>
          </span>

          <div class="swiper-lazy-preloader"></div>
          <span>Affliction</span>
        </a>
      </div>
    </div>

    <div class="swiper-nav position-absolute">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>
<!--End sliderBlock-->

<!-- Start subscribe -->
<section class="subscribe lazy position-relative descSub">
  <div class="subscribeIn2 m-auto w-100 d-flex justify-content-between align-items-center">
    <form class="subscribeRight w-100 position-relative">
      <div class="subscribeRight__title text-uppercase">Подписка на новости</div>

      <div class="d-flex subscribeRightInput">
        <input placeholder="Введите адрес эл. почты" type="text" class="border-0 w-100">
        <button type="submit"
                class="subscribeRightInput__btn d-flex justify-content-center align-items-center w-100 border-0 trans-all-05">Подписаться
        </button>
      </div>
    </form>

    <div class="subscribe__paragraf text-right">Подпишись чтобы получать рассылку, специальные предложения и подарки
    </div>
  </div>
</section>
<!-- End subscribe -->

<!--Start pay-->
<section class="pay lazy position-relative" data-src="images/fon4.png">
  <div class="payIn position-relative m-auto w-100">
    <h2 class="pay__title">Способы оплаты</h2>

    <ul class="payList d-flex">
      <li>
        <img class="lazy" data-src="images/pay.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay2.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay3.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay4.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay5.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay6.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay7.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay8.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay9.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay10.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay11.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay12.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay13.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay14.svg" alt=""/>
      </li>

      <li>
        <img class="lazy" data-src="images/pay15.svg" alt=""/>
      </li>
    </ul>
  </div>
</section>
<!--End pay-->

<!--Start description-->
<section class="description w-100 m-auto">
  <h3>Спортивная одежда MMA, экипировка для единоборств</h3>

  <div class="descriptionContent">
    <p>За восемь лет работы на рынке бойцовской одежды MMA мы стали лидирующей компанией по продаже спортивной одежды и
      экипировки для бойцов.</p>

    <p>С каждым годом растет спрос на качественную спортивную одежду для тренировок и единоборств. Мы стараемся отвечать
      требованиям всех клиентов, вне зависимости от вида спорта, опыта тренировок
      и территориального положения. Наш интернет магазин спортивной бойцовской одежды ММА доставляет продукцию по всей
      России
      и страны СНГ.</p>

    <p class="description__hide">
      С каждым годом растет спрос на качественную спортивную одежду для тренировок и единоборств. Мы стараемся отвечать
      требованиям всех клиентов, вне зависимости от вида спорта, опыта тренировок
      и территориального положения. Наш интернет магазин спортивной бойцовской одежды ММА доставляет продукцию по всей
      России
      и страны СНГ.
    </p>
  </div>

  <a href="#" class="description__btn" id="more">Развернуть</a>
</section>
<!--End description-->

<!--Start company-->
<section class="company">
  <h2 class="lazy titleH2 position-relative" data-src="images/categoryMobil.png">
    <span class="titleH2In d-block">
      <a href="#" target="_blank"
         class="sliderBlock__title w-100  position-relative text-uppercase trans-all-05">
      Преимущества компании</a>
    </span>
  </h2>

  <div class="companyMobil m-auto">
    <ul class="companyList d-flex justify-content-between align-items-start">
      <li class="col-xl-2 col-md-4 col-sm-3 col-6">
        <img class="lazy" alt="" src="images/icon10.svg" style="">
        <p class="text-center">Самый широкий ассортимент <br> продукции для единоборств в <br> России – более 130
          брендов и
          <br> более 3
          700
          товаров</p>
      </li>

      <li class="col-xl-2 col-md-4 col-sm-3 col-6">
        <img class="lazy" alt="" src="images/icon11.svg" style="">
        <p class="text-center">Весь товар, представленный в <br> интернет-магазине, в наличии на <br> складе в Москве –
          заказ
          не надо
          <br>
          ждать.</p>
      </li>

      <li class="col-xl-2 col-md-4 col-sm-3 col-6">
        <img class="lazy" alt="" src="images/icon12.svg" style="">
        <p class="text-center">Самый большой офлайн-магазин <br> экипировки и одежды для <br> единоборств в Европе.</p>
      </li>

      <li class="col-xl-2 col-md-4 col-sm-3 col-6">
        <img class="lazy" alt="" src="images/icon13.svg" style="">
        <p class="text-center">Fightwear.ru – эксклюзивный <br> дистрибутор и официальный <br> представитель ключевых <a
            href="#">брендов
          </a> <br>
          товаров для единоборств</p>
      </li>

      <li class="col-xl-2 col-md-4 col-sm-3 col-6">
        <img class="lazy" alt="" src="images/icon14.svg" style="">
        <p class="text-center">В магазине только <br> сертифицированный товар.</p>
      </li>

      <li class="col-xl-2 col-md-4 col-sm-3 col-6">
        <img class="lazy" alt="" src="images/icon15.svg" style="">
        <p class="text-center">Весь широкий выбор товаров <br> можно померить и подобрать <br> лучший для себя
          .</p>
      </li>
    </ul>
  </div>
</section>
<!--End company-->

<!-- Start subscribe -->
<section class="subscribe lazy position-relative mobilSub" data-src="images/sub320.png">
  <div class="subscribeIn m-auto">
    <div class="subscribe__title">Подписка на новости</div>
    <div class="subscribe__desc">Подпишись чтобы получать рассылку, специальные предложения и подарки</div>

    <form action="#" class="subscribeForm position-relative">
      <input placeholder="Введите адрес эл. почты" type="text" class="w-100 border-0">
      <a href="#" class="d-flex justify-content-center align-items-center subscribe__btn w-100">Подписаться</a>

      <div class="input-row d-block">
        <input id="checkbox-input-1" type="checkbox" value="myValue 1" checked="">
        <label class="input-helper input-helper--checkbox d-flex" for="checkbox-input-1">
          <span>Принимаю условия <a
              href="#">Политика
          конфиденциальности</a></span>
        </label><br>
      </div>
    </form>
  </div>
</section>
<!-- End subscribe -->

<!--Start metis menu-->
<div class="accordion metismenuMobil d-block w-100 m-auto" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left" type="button" data-toggle="collapse"
                data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
          Помощь
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="metismenu__sub">
          <li>
            <a href="#">Статус заказа</a>
          </li>

          <li>
            <a href="#">Как оформить заказ</a>
          </li>

          <li>
            <a href="#">Таблицы размеров</a>
          </li>

          <li>
            <a href="#">Условия доставки</a>
          </li>

          <li>
            <a href="#">Возврат</a>
          </li>

          <li>
            <a href="#">Оферта</a>
          </li>

          <li>
            <a href="#">Дисконтная карта Fightwear.ru</a>
          </li>

          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
          Мы в соцсетях
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="flex menuSocial ">
          <li>
            <a href="#" class="footerSocial__vk">
              <img loading="lazy" src="images/icon3.svg" alt="">
            </a>
          </li>

          <li>
            <a href="#">
              <img loading="lazy" src="images/icon4.svg" alt="">
            </a>
          </li>

          <li>
            <a href="#">
              <img loading="lazy" src="images/icon5.svg" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
          Способы оплаты
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="metismenu__sub payList d-flex">
          <li>
            <img loading="lazy" src="images/pay.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay2.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay3.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay4.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay5.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay6.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay7.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay8.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay9.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay10.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay11.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay12.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay13.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay14.svg" alt="">
          </li>

          <li>
            <img loading="lazy" src="images/pay15.svg" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseFour"
                aria-expanded="false" aria-controls="headingFour">
          Для мобильных устройств
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="metismenu__sub">
          <li>
            <a href="#">Статус заказа</a>
          </li>

          <li>
            <a href="#">Как оформить заказ</a>
          </li>

          <li>
            <a href="#">Таблицы размеров</a>
          </li>

          <li>
            <a href="#">Условия доставки</a>
          </li>

          <li>
            <a href="#">Возврат</a>
          </li>

          <li>
            <a href="#">Оферта</a>
          </li>

          <li>
            <a href="#">Дисконтная карта Fightwear.ru</a>
          </li>

          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseFive"
                aria-expanded="false" aria-controls="headingFive">О компании
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="metismenu__sub">
          <li>
            <a href="#">Статус заказа</a>
          </li>

          <li>
            <a href="#">Как оформить заказ</a>
          </li>

          <li>
            <a href="#">Таблицы размеров</a>
          </li>

          <li>
            <a href="#">Условия доставки</a>
          </li>

          <li>
            <a href="#">Возврат</a>
          </li>

          <li>
            <a href="#">Оферта</a>
          </li>

          <li>
            <a href="#">Дисконтная карта Fightwear.ru</a>
          </li>

          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseSix"
                aria-expanded="false" aria-controls="collapseThree">
          Преимущества кампании
        </button>
      </h2>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="metismenu__sub">
          <li>
            <a href="#">Статус заказа</a>
          </li>

          <li>
            <a href="#">Как оформить заказ</a>
          </li>

          <li>
            <a href="#">Таблицы размеров</a>
          </li>

          <li>
            <a href="#">Условия доставки</a>
          </li>

          <li>
            <a href="#">Возврат</a>
          </li>

          <li>
            <a href="#">Оферта</a>
          </li>

          <li>
            <a href="#">Дисконтная карта Fightwear.ru</a>
          </li>

          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link text-uppercase w-100 text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseSeven"
                aria-expanded="false" aria-controls="collapseThree">
          Оптовикам
        </button>
      </h2>
    </div>

    <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="metismenu__sub">
          <li>
            <a href="#">Статус заказа</a>
          </li>

          <li>
            <a href="#">Как оформить заказ</a>
          </li>

          <li>
            <a href="#">Таблицы размеров</a>
          </li>

          <li>
            <a href="#">Условия доставки</a>
          </li>

          <li>
            <a href="#">Возврат</a>
          </li>

          <li>
            <a href="#">Оферта</a>
          </li>

          <li>
            <a href="#">Дисконтная карта Fightwear.ru</a>
          </li>

          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--End metis menu-->

<!--Start footer-->
<footer class="footer">
  <div class="footerIn justify-content-between align-items-start m-auto w-100">
    <div class="footerBlock col-xl-3 col-md-3 col-sm-3">
      <div class="footer__title">FIGHTWEAR</div>

      <hr class="footer__hr">

      <ul class="footerList">
        <li>
          <a href="#">О нас</a>
        </li>

        <li>
          <a href="#">Контакты</a>
        </li>

        <li>
          <a href="#">Блог</a>
        </li>

        <li>
          <a href="#">Вакансии</a>
        </li>
      </ul>
    </div>

    <div class="footerBlock col-xl-3 col-md-3 col-sm-3">
      <div class="footer__title">Покупателям</div>

      <hr class="footer__hr">

      <ul class="footerList">
        <li>
          <a href="#">Каталог</a>
        </li>

        <li>
          <a href="#">Бренды</a>
        </li>

        <li>
          <a href="#">Оплата, доставка и возврат</a>
        </li>

        <li>
          <a href="#">Вакансии</a>
        </li>
      </ul>
    </div>

    <div class="footerBlock col-xl-3 col-md-3 col-sm-3">
      <div class="footer__title">Контакты</div>

      <hr class="footer__hr">

      <ul class="footerContacts">
        <li>
          <a href="tel:+7 (499) 499-81-77">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
            </svg>
            <span>+7 (499) 499-81-77</span>
          </a>
        </li>

        <li>
          <a href="tel:+7 (499) 499-81-77">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
            </svg>
            <span>+7 (499) 499-81-77</span>
          </a>

          <div class="footerDesc">Звонок бесплатный</div>
        </li>

        <li>
          <a href="mailto:info@fightwear.ru" class="footerMail">
            <i class="bi bi-envelope"></i>
            <span>info@fightwear.ru</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="footerBlock col-xl-3 col-md-3 col-sm-3">
      <div class="footer__title">Мы в социальных сетях</div>

      <hr class="footer__hr">

      <ul class="footerSocial d-flex justify-content-between align-items-center">
        <li>
          <a href="#" class="footerSocial__vk position-relative">
            <img loading="lazy" src="images/icon3.svg" alt="">
          </a>
        </li>

        <li>
          <a href="#">
            <img loading="lazy" src="images/icon4.svg" alt="">
          </a>
        </li>

        <li>
          <a href="#">
            <img loading="lazy" src="images/icon5.svg" alt="">
          </a>
        </li>
      </ul>

      <a href="#" class="footer__map position-relative">Карта сайта</a>
    </div>
  </div>

  <div class="footerBottomFon lazy" data-src="images/footer.jpg">
    <div class="footerBottom d-flex justify-content-between align-items-end w-100 m-auto">
      <div class="footerBottomBlock w-100">
        <div class="footerBottomBlock__title">© ООО «ФАЙТ АЙЛЭНД» 2020</div>
        <div class="footerBottomBlock__desc">одежда и экипировка для фитнеса и единоборств</div>
      </div>

      <div class="footerBottomBlock w-100">
        <div class="footerBottomBlock__desc">г. Москва, м.Павелецкая,
          ул. Дубининская, д. 80
        </div>
      </div>

      <div class="footerBottomBlock w-100">
        <a href="#">
          <span>Политика обработки персональных данных</span>
        </a>

        <br>

        <a href="#">
          <span>Согласие на обработку персональных данных</span>
        </a>
      </div>
    </div>
  </div>
</footer>
<!--End footer-->

<script rel="preload" as="script" src="js/jquery-3.4.1.min.js"></script>
<script rel="preload" as="script" src="js/jquery.lazy.min.js"></script>
<script rel="preload" as="script" src="js/bootstrap.min.js"></script>
<script rel="preload" as="script" src="js/swiper-bundle.min.js"></script>
<script rel="preload" as="script" src="js/common.js"></script>
<script rel="preload" as="script" src="js/home.js"></script>

<link rel="stylesheet" href="css/swiper.min.css">

</body>
</html>


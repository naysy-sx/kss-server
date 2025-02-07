<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Page\Asset;

define("SITE_TEMPLATE_PATH", "/local/templates/kss-template/");

$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH . '/static/css/reset.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/static/fonts/stylesheet.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/static/vendors/swiper-bundle.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/static/vendors/fancybox.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/static/vendors/aos.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/static/css/main.css');

// Добавление скриптов
$asset->addJs(SITE_TEMPLATE_PATH . '/static/js/vendors/jquery-3.6.0.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/static/vendors/swiper-bundle.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/static/vendors/fancybox.umd.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/static/vendors/aos.js');

?>


<head>

  <?php
  $APPLICATION->ShowPanel();
  ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Метатеги для SEO -->
  <meta name="description" content="Описание сайта КубаньСтройСнаб" />
  <meta
    name="keywords"
    content="строительство, снабжение, Кубань, КубаньСтройСнаб" />
  <meta name="author" content="КубаньСтройСнаб" />
  <meta name="robots" content="index, follow" />

  <!-- Фавиконки -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/favicon-16x16.png">
  <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= SITE_TEMPLATE_PATH ?>/static/images/fav//ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Метатеги для социальных сетей -->
  <meta property="og:title" content="КубаньСтройСнаб" />
  <meta property="og:description" content="Описание сайта КубаньСтройСнаб" />
  <meta property="og:image" content="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/android-icon-192x192.png" />
  <meta property=" og:url" content="URL_TO_SITE" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="КубаньСтройСнаб" />
  <meta name="twitter:description" content="Описание сайта КубаньСтройСнаб" />
  <meta name="twitter:image" content="<?= SITE_TEMPLATE_PATH ?>/static/images/fav/android-icon-192x192.png" />
  <!-- Метатеги для верификации -->

  <!-- Стили -->
  <?php
  $APPLICATION->ShowHead();
  ?>


  <meta
    name="google-site-verification"
    content="YOUR_GOOGLE_SITE_VERIFICATION_CODE" />
  <meta name="yandex-verification" content="YOUR_YANDEX_VERIFICATION_CODE" />
  <script src="https://api-maps.yandex.ru/2.1/?apikey=2ac0f895-95d9-4309-b7a3-1bdbc3d40433&lang=ru_RU"></script>
  <title>
    <?php
    $APPLICATION->ShowTitle()
    ?>
  </title>
</head>

<body>
  <video autoplay muted loop id="intro-video">
    <source src="/static/video/intro.mp4" type="video/mp4" />
  </video>
  <div class="start-block dark" style="padding-top: 126px">
    <!-- HEADER -->
    <div class="header-wrapper">
      <div class="container -large">
        <header class="header">
          <div class="header-row">
            <a href="/" class="logo">
              <img
                src="<?= SITE_TEMPLATE_PATH ?>/static/images/logo.svg"
                alt="" />
            </a>
            <nav class="nav">
              <ul class="nav-list">
                <li class="nav-item">
                  <a href="#company" class="nav-link">
                    <span class="nav-link-text">Компания</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#production" class="nav-link">
                    <span class="nav-link-text">Производство</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#products" class="nav-link">
                    <span class="nav-link-text">Продукция</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#projects" class="nav-link">
                    <span class="nav-link-text">Проекты</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#docs" class="nav-link">
                    <span class="nav-link-text">Документы</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#contacts" class="nav-link">
                    <span class="nav-link-text">Контакты</span>
                  </a>
                </li>
              </ul>
            </nav>
            <ul class="header-contacts bordered">
              <li class="header-contacts-item">
                <a href="tel:8 (000) 000-00-00" class="header-contacts-link">8 (000) 000-00-00</a>
              </li>
              <li class="header-contacts-item">
                <a
                  data-fancybox
                  data-src="#feedback"
                  data-width="800"
                  class="header-contacts-link">
                  <span>Заказать звонок</span></a>
              </li>
            </ul>
            <div class="menu-btn">
              <div class="menu-btn__burger"></div>
            </div>
          </div>
        </header>
      </div>
    </div>
    <!-- HEADER END -->
    <!-- 1. INTRO -->
    <section class="intro-wrapper dark" id="company">
      <div class="container -large">
        <div class="intro bordered">

          <?php
          $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "intro_list",
            array(
              "IBLOCK_TYPE" => "news",
              "IBLOCK_ID" => "intro",
              "NEWS_COUNT" => "10",
              "SORT_BY1" => "ACTIVE_FROM",
              "SORT_ORDER1" => "DESC",
              "SORT_BY2" => "SORT",
              "SORT_ORDER2" => "ASC",
              "FILTER_NAME" => "",
              "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT", "DETAIL_PICTURE"),
              "PROPERTY_CODE" => array("MAIN_TITLE", "FIRST", "TWO", "THIRD", "BUTTON_TEXT"),
              "CHECK_DATES" => "Y",
              "DETAIL_URL" => "",
              "AJAX_MODE" => "N",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "Y",
              "AJAX_OPTION_HISTORY" => "N",
              "CACHE_TYPE" => "A",
              "CACHE_TIME" => "36000000",
              "CACHE_FILTER" => "N",
              "CACHE_GROUPS" => "Y",
              "PREVIEW_TRUNCATE_LEN" => "",
              "ACTIVE_DATE_FORMAT" => "d.m.Y",
              "SET_TITLE" => "N",
              "SET_BROWSER_TITLE" => "N",
              "SET_META_KEYWORDS" => "N",
              "SET_META_DESCRIPTION" => "N",
              "SET_LAST_MODIFIED" => "N",
              "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
              "ADD_SECTIONS_CHAIN" => "N",
              "HIDE_LINK_WHEN_NO_DETAIL" => "N",
              "PARENT_SECTION" => "",
              "PARENT_SECTION_CODE" => "",
              "INCLUDE_SUBSECTIONS" => "Y",
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "PAGER_TEMPLATE" => ".default",
              "DISPLAY_TOP_PAGER" => "N",
              "DISPLAY_BOTTOM_PAGER" => "Y",
              "PAGER_TITLE" => "Новости",
              "PAGER_SHOW_ALWAYS" => "N",
              "PAGER_DESC_NUMBERING" => "N",
              "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
              "PAGER_SHOW_ALL" => "N",
              "PAGER_BASE_LINK_ENABLE" => "N",
              "SET_STATUS_404" => "N",
              "SHOW_404" => "N",
              "MESSAGE_404" => ""
            ),
            false
          );
          ?>

          <ul class="intro-cards bordered">
            <?php
            $APPLICATION->IncludeComponent(
              "bitrix:news.list",
              "services_list",
              array(
                "IBLOCK_TYPE" => "news", // Тип инфоблока
                "IBLOCK_ID" => "services", // ID вашего инфоблока
                "NEWS_COUNT" => "10",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT", "DETAIL_PICTURE"),
                "PROPERTY_CODE" => array("PRICE", "DESCRIPTION"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
              ),
              false
            );
            ?>

          </ul>

          <!--
          <ul class="intro-cards bordered">

            <li
              class="cards-item"
              data-aos="fade"
              data-aos-easing="ease"
              data-aos-delay="300">
              <div class="card">
                <h2 class="card-header">
                  Собственные производственные <br />площади
                </h2>
                <ul class="card-list">
                  <li class="card-item"><a href="">Проектирование</a></li>
                  <li class="card-item"><a href="">Производство</a></li>
                  <li class="card-item"><a href="">Доставка</a></li>
                  <li class="card-item"><a href="">Шеф-монтаж</a></li>
                </ul>
              </div>
            </li>

            <li
              class="cards-item"
              data-aos="fade"
              data-aos-easing="ease"
              data-aos-delay="400">
              <div class="card">
                <h2 class="card-header">Поставка под ключ</h2>
                <ul class="card-list">
                  <li class="card-item">
                    <a href="">600 + объектов укомплектовано</a>
                  </li>
                </ul>
              </div>
            </li>

            <li
              class="cards-item"
              data-aos="fade"
              data-aos-easing="ease"
              data-aos-delay="500">
              <div class="card">
                <h2 class="card-header">Производство</h2>
                <ul class="card-list">
                  <li class="card-item">
                    <a href="">Очистные сооружения</a>
                  </li>
                  <li class="card-item"><a href="">Насосные станции</a></li>
                  <li class="card-item">
                    <a href="">Емкость и резервуары</a>
                  </li>
                  <li class="card-item">
                    <a href="">Хозяйственно-бытовые стоки</a>
                  </li>
                </ul>
              </div>
            </li>

            <li
              class="cards-item"
              data-aos="fade"
              data-aos-easing="ease"
              data-aos-delay="600">
              <div class="card">
                <h2 class="card-header">Дистрибьюция</h2>
                <ul class="card-list">
                  <li class="card-item">
                    <a href="">Насосное оборудование</a>
                  </li>
                  <li class="card-item">
                    <a href="">Трубопроводная арматура</a>
                  </li>
                  <li class="card-item">
                    <a href="">Автоматика для теплоснабжения</a>
                  </li>
                  <li class="card-item">
                    <a href="">Теплообменное оборудование</a>
                  </li>
                  <li class="card-item">
                    <a href="">Радиаторы отопительные</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>-->
        </div>
      </div>
    </section>
    <!-- INTRO END -->
  </div>
  <div class="page">
    <!-- MAIN -->

    <main class="main">
      <!-- /////////// SECTIONS /////////// -->
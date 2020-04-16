<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить силиконовые приманки, спиннинги в интернет-магазине Crazy Fish");
$APPLICATION->SetPageProperty("description", "Интернет-магазин для спиннингистов: силиконовые приманки, спиннинги, офсетные крючки по низким ценам");
$APPLICATION->SetTitle("Силиконовые приманки, спиннинги в интернет-магазине Crazy Fish");?>
    <div class="row mobile-jig">
        <div class="col-xl-12">
            <ul class="jig-block">
                <?foreach ($allurl as $item) {?>
                    <li><a href="<?=mb_strtolower($item['URL'])?>"><?=$item['NAME']?></a></li>
                <?}?>
            </ul>
        </div>
    </div>
    <div class="row main-slider">
        <div class="col-xl-10 col-lg-9 col-md-9">
            <?$APPLICATION->IncludeComponent("bxready.market2:promo.controller", "template2", Array(
                "COMPONENT_TEMPLATE" => ".default",
                "BXR_PROMO_VARIANT" => "v2",
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "BXR_PROMO_PREPARE_ID" => "slider",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "34",
                "PARENT_SECTION_CODE" => "main",
                "INCLUDE_SUBSECTIONS" => "Y",
                "NEWS_COUNT" => "10",
                "FIELD_CODE" => array(
                    0 => "CODE",
                    1 => "XML_ID",
                    2 => "NAME",
                    3 => "PREVIEW_PICTURE",
                    4 => "DETAIL_TEXT",
                    5 => "DETAIL_PICTURE",
                    6 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "PROMO_HIDE_NAME",
                    1 => "PROMO_LINK",
                    2 => "",
                ),
                "PROMO_CONTROLLER_TYPE" => "slider",	// Тип промоконтроллера
                "BXR_PROMO_IBLOCK_TYPE" => "content",
                "BXR_PROMO_IBLOCK_ID" => "31",
                "BXR_SLIDER_PARENT_SECTION_CODE" => "main",	// Код раздела
                "BXR_PROMO_INCLUDE_SUBSECTIONS" => "Y",
                "BXR_PROMO_NEWS_COUNT" => "10",
                "BXR_PROMO_FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_PICTURE",
                    2 => "DETAIL_PICTURE",
                    3 => "",
                ),
                "BXR_PROMO_PROPERTY_CODE" => array(
                    0 => "PROMO_HIDE_NAME",
                    1 => "PROMO_LINK",
                    2 => "PROMO_LINK_OPEN_NEW",
                    3 => "LG_COL_COUNT",
                    4 => "MD_COL_COUNT",
                    5 => "SM_COL_COUNT",
                    6 => "XS_COL_COUNT",
                    7 => "NAME_COLOR",
                    8 => "TEXT_COLOR",
                    9 => "NAME_BACK_COLOR",
                    10 => "TEXT_BACK_COLOR",
                    11 => "PROMO_NO_EFFECT",
                    12 => "EFFECT_ADD_COLOR",
                    13 => "",
                ),
                "BXR_SLIDER_IBLOCK_TYPE" => "content",	// Тип Инфоблока
                "BXR_SLIDER_IBLOCK_ID" => "34",	// Инфоблок
                "BXR_SLIDER_SLIDER_FULL_SCREEN" => "Y",	// На всю ширину экрана
                "BXR_SLIDER_SLIDER_FADE" => "N",	// Эффект затухания
                "BXR_SLIDER_SLIDER_SPEED" => "5",	// Скорость слайдера
                "BXR_SLIDER_SLIDER_AUTOPLAY" => "Y",	// Автопрокрутка слайдера
                "BXR_SLIDER_SLIDER_AUTOPLAY_SPEED" => "300",	// Скорость автопрокрутки слайдера
                "BXR_SLIDER_HIDE_SLIDER_ARROWS_LISTPAGE" => "Y",	// Показать кнопки только при наведении
                "BXR_SLIDER_HIDE_MOBILE_SLIDER_ARROWS_LISTPAGE" => "Y",	// Скрывать кнопки на мобильной версии
                "BXR_SLIDER_LIST_SLIDER_MARKERS_LISTPAGE" => "Y",	// Включить маркеровку слайдера
                "BXR_SLIDER_HEIGHT" => "20vw",	// Высота слайдера
                "BXR_SLIDER_CUSTOM_BREAKPOINT" => "Y",	// Использовать свои ограничения масштабируемости
                "BXR_SLIDER_CUSTOM_BREAKPOINT_LG" => "1200",	// Ограничения для разрешения LG
                "BXR_SLIDER_CUSTOM_HEIGHT_LG" => "20vw",	// Высота слайдера при ограничении LG
                "BXR_SLIDER_CUSTOM_HIDDEN_LG" => "N",	// Скрыть слайдер при ограничении LG
                "BXR_SLIDER_CUSTOM_BREAKPOINT_MD" => "992",	// Ограничения для разрешения MD
                "BXR_SLIDER_CUSTOM_HEIGHT_MD" => "20vw",	// Высота слайдера при ограничении MD
                "BXR_SLIDER_CUSTOM_HIDDEN_MD" => "N",	// Скрыть слайдер при ограничении MD
                "BXR_SLIDER_CUSTOM_BREAKPOINT_SM" => "768",	// Ограничения для разрешения SM
                "BXR_SLIDER_CUSTOM_HEIGHT_SM" => "25vw",	// Высота слайдера при ограничении SM
                "BXR_SLIDER_CUSTOM_HIDDEN_SM" => "N",	// Скрыть слайдер при ограничении SM
                "BXR_SLIDER_CUSTOM_BREAKPOINT_XS" => "0",	// Ограничения для разрешения XS
                "BXR_SLIDER_CUSTOM_HEIGHT_XS" => "32vw",	// Высота слайдера при ограничении XS
                "BXR_SLIDER_CUSTOM_HIDDEN_XS" => "N",	// Скрыть слайдер при ограничении XS
                "BXR_SLIDER_ADAPTIVE_MODE" => "Y",	// Масштабировать слайдер
                "BXR_SLIDER_CUSTOM_BREAKPOINT_XL" => "1920",	// Ограничения для разрешения XL
                "BXR_SLIDER_CUSTOM_HEIGHT_XL" => "20vw",	// Высота слайдера при ограничении XL
                "BXR_SLIDER_CUSTOM_HIDDEN_XL" => "N",	// Скрыть слайдер при ограничении XL
                "BXR_SLIDER_PARENT_SECTION" => "0",	// Раздел
                "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
                "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
            ),
                false
            );?>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 hidden-sm hidden-xs no-padding-left main-right-slider">
            <a href="/catalog/spinningi_crazy_fish/spinning_arion/"><div style="height: 100%; width: 100%;background-image:url(/upload/banners/banner.png);background-position: center;background-size: cover;"></div></a>
        </div>
    </div>

<?$APPLICATION->IncludeFile("/include/bestsellers_main.php", Array(), Array(
    "MODE"      => "php",
    "NAME"      => "Редактирование включаемой области раздела",
    "TEMPLATE"  => "section_include_template.php"
));?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "custom",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "custom",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "CREATED_BY",
            2 => "PROPERTY_CONTACT",
            3 => "PROPERTY_START_DATE",
            4 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "22",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "EXTERNAL_LINK",
            1 => SUPPORT_CONTACT,
            2 => SUPPORT_BUILDING,
            3 => "PREVIEW_PICTURE",
            4 => "DETAIL_PICTURE",
            5 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "TEMPLATE_THEME" => "blue",
        "STRICT_SECTION_CHECK" => "N",
        "MEDIA_PROPERTY" => "",
        "SLIDER_PROPERTY" => "",
        "SEARCH_PAGE" => "/search/",
        "USE_RATING" => "N",
        "USE_SHARE" => "N",
        "COMPOSITE_FRAME_MODE" => "Y",
        "COMPOSITE_FRAME_TYPE" => "DYNAMIC_WITH_STUB"
    ),
    false
); ?>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="delivery-block-bottom">
                <h3>Бесплатная доставка</h3>
                <p>Заказы от 2990<i class="fa fa-rub" aria-hidden="true"></i> отправляем бесплатно «Почтой России» по стране, курьером по Москве, от 6900<i class="fa fa-rub" aria-hidden="true"></i> — СДЭКом.</p>
                <h3>Есть вопросы?</h3>
                <p>С понедельника по пятницу с 10 до 19 часов по Москве отвечаем на них по телефону 8-800-333-50-82, в оранжевом чате в правом нижнем углу и по
                    электронной почте shop@crazy-fish.biz</p>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var $sliderheight = $('.bxr-slider').height();
            $('.main-right-slider').height($sliderheight);
        })
    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
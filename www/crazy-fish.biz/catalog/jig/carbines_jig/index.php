<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Джиговые карабины по СУПЕР цене на официальном сайте производителя Crazy Fish. Готовьтесь к поклевке с первого заброса! Официальный интернет-магазин ✈ Быстрая отгрузка \$ Лучшие цены");
$APPLICATION->SetTitle("Карабины для джига (джиговые) от Crazy Fish | Официальный интернет-магазин России - цены, отзывы");
?><h1>Карабины для джига</h1>
<?
$APPLICATION->IncludeComponent(
    "bxready.market2:main.include",
    "named_area",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => SITE_DIR . "/catalog/jig/filter.php",
        "COMPONENT_TEMPLATE" => "named_area",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO"
    ),
    false
);
?>
<div id="catalog-filter">
	 <?$APPLICATION->IncludeComponent(
	"bxready.market2:catalog.section", 
	"custom", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"BXREADY_ELEMENT_ADDCLASS_BIG" => "",
		"BXREADY_ELEMENT_ADDCLASS_LISTPAGE" => "",
		"BXREADY_ELEMENT_ADDCLASS_SMALL" => "",
		"BXREADY_ELEMENT_ADDCLASS_STANDART" => "",
		"BXREADY_ELEMENT_DRAW_BIG" => "ecommerce.m2.big.v1",
		"BXREADY_ELEMENT_DRAW_LISTPAGE" => "ecommerce.m2.v1",
		"BXREADY_ELEMENT_DRAW_SMALL" => "ecommerce.m2.small.v1",
		"BXREADY_ELEMENT_DRAW_STANDART" => "ecommerce.m2.v1",
		"BXREADY_ELEMENT_EXT_PARAMS_BIG" => "arrExtParams",
		"BXREADY_ELEMENT_EXT_PARAMS_LISTPAGE" => "arrExtParams",
		"BXREADY_ELEMENT_EXT_PARAMS_SMALL" => "arrExtParams",
		"BXREADY_ELEMENT_EXT_PARAMS_STANDART" => "arrExtParams",
		"BXREADY_LIST_LG_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_MARKER_TYPE_BIG" => "circle.horizontal",
		"BXREADY_LIST_MARKER_TYPE_STANDART" => "circle.horizontal",
		"BXREADY_LIST_MD_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_OWN_MARKER_USE_STANDART" => "N",
		"BXREADY_LIST_SLIDER_LISTPAGE" => "N",
		"BXREADY_LIST_SM_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_XLG_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_XS_CNT_LISTPAGE" => "1",
		"BXREADY_USER_TYPES_BIG" => "N",
		"BXREADY_USER_TYPES_LISTPAGE" => "N",
		"BXREADY_USER_TYPES_SMALL" => "N",
		"BXREADY_USER_TYPES_STANDART" => "N",
		"BXREADY_USE_ELEMENTCLASS_BIG" => "Y",
		"BXREADY_USE_ELEMENTCLASS_LISTPAGE" => "Y",
		"BXREADY_USE_ELEMENTCLASS_SMALL" => "Y",
		"BXREADY_USE_ELEMENTCLASS_STANDART" => "Y",
		"BXREADY_VERTICAL_ALIGN_BIG" => "Y",
		"BXREADY_VERTICAL_ALIGN_LISTPAGE" => "Y",
		"BXREADY_VERTICAL_ALIGN_SMALL" => "Y",
		"BXREADY_VERTICAL_ALIGN_STANDART" => "Y",
		"BXR_IMG_MAX_HEIGHT_BIG" => "210",
		"BXR_IMG_MAX_HEIGHT_SMALL" => "90",
		"BXR_IMG_MAX_HEIGHT_STANDART" => "250",
		"BXR_IMG_MAX_WIDTH_BIG" => "210",
		"BXR_IMG_MAX_WIDTH_SMALL" => "90",
		"BXR_IMG_MAX_WIDTH_STANDART" => "250",
		"BXR_SHOW_ACTION_TIMER_BIG" => "N",
		"BXR_SHOW_ACTION_TIMER_STANDART" => "N",
		"BXR_SHOW_ARTICLE_BIG" => "Y",
		"BXR_SHOW_ARTICLE_STANDART" => "Y",
		"BXR_SHOW_MAX_QUANTITY" => "N",
		"BXR_SHOW_PREVIEW_TEXT_BIG" => "Y",
		"BXR_SHOW_RATING_STANDART" => "N",
		"BXR_SHOW_SLIDER_BIG" => "Y",
		"BXR_SHOW_SLIDER_STANDART" => "Y",
		"BXR_SKU_PROPS_SHOW_TYPE_BIG" => "rounded",
		"BXR_SKU_PROPS_SHOW_TYPE_STANDART" => "square",
		"BXR_SLIDER_INTERVAL_BIG" => "3000",
		"BXR_SLIDER_INTERVAL_STANDART" => "0",
		"BXR_TILE_SHOW_PROPERTIES_STANDART" => "N",
		"BXR_USE_FAST_VIEW_BIG" => "N",
		"BXR_USE_FAST_VIEW_SMALL" => "Y",
		"BXR_USE_FAST_VIEW_STANDART" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "custom",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:44:419\",\"DATA\":{\"logic\":\"Equal\",\"value\":369}},{\"CLASS_ID\":\"CondIBProp:44:371\",\"DATA\":{\"logic\":\"Equal\",\"value\":\"Карабины, ретриверы, вертлюги\"}}]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => $arSortGlobal["sort"],
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => $arSortGlobal["sort_order"],
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "44",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LAZY_LOAD" => "Y",
		"LINE_ELEMENT_COUNT" => "4",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_FAST_VIEW_SMALL" => "Быстрый просмотр",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "custom_new",
		"PAGER_TITLE" => "Товары",
		"PAGE_BLOCK_TITLE" => "",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
			0 => "Розница",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
		),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "site",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	),
	false
);?>
</div>
 <br>
 <br>
<p>
	 Для любителей микроджиговой ловли хищной рыбы Crazy Fish подготовил супер уловистые приманки и снасти! Подходящие цвета, баланс веса и размера позволяют создать беспроигрышную игру в глазах хищника. В этом разделе каталога вы сможете найти лучшие снасти для джига от полюбившегося украинского бренда-производителя.&nbsp;<b>Оснастка для джига от Crazy Fish </b>разрабатывалась с участием экспертов и авторитетных рыболовов страны. Приманки и другие снасти, представленные на этой странице, обеспечат:
</p>
<p>
</p>
<ul>
	<li>
	<p>
		 Высокую результативность рыбалки и быструю поклевку;
	</p>
 </li>
	<li>
	<p>
		 Возможность использования на любых водоемах;
	</p>
 </li>
	<li>
	<p>
		 Легкую систему конструкции;
	</p>
 </li>
	<li>
	<p>
		 Доступную цену.
	</p>
 </li>
</ul>
<p>
</p>
<p>
	 Здесь представлены также вольфрамовые головки, леска, крючки, спиннинги и грузила, которые соблазнят даже самую осторожную рыбу и обеспечат увлекательный микроджиг. Отзывы о продукции свидетельствуют о том, что производителю удалось совместить не только качество, уловистость и стильный дизайн, но также сохранить дружественную стоимость продукции.
</p>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Спиннинги НА ФОРЕЛЬ от ТОПового производителя Crazy Fish! ✓ Выгодные цены на официальном сайте! ✓ Доставка по всей России ✓ Всё для хорошей рыбалки ✈ Быстрая отгрузка");
$APPLICATION->SetTitle("Спиннинги для форели");
$APPLICATION->SetPageProperty("title", "Купить спиннинги для ловли форели от Crazy Fish | Официальный интернет-магазин");
?>
<h1>Спиннинги для форели</h1>
<?
$APPLICATION->IncludeComponent(
	"bxready.market2:catalog.section",
	"custom",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"BXREADY_ELEMENT_ADDCLASS_BIG" => "",
		"BXREADY_ELEMENT_ADDCLASS_SMALL" => "",
		"BXREADY_ELEMENT_ADDCLASS_STANDART" => "",
		"BXREADY_ELEMENT_DRAW_BIG" => "ecommerce.m2.big.v1",
		"BXREADY_ELEMENT_DRAW_SMALL" => "ecommerce.m2.small.v1",
		"BXREADY_ELEMENT_DRAW_STANDART" => "ecommerce.m2.v1",
		"BXREADY_ELEMENT_EXT_PARAMS_BIG" => "arrExtParams",
		"BXREADY_ELEMENT_EXT_PARAMS_SMALL" => "arrExtParams",
		"BXREADY_ELEMENT_EXT_PARAMS_STANDART" => "arrExtParams",
		"BXREADY_LIST_MARKER_TYPE_BIG" => "circle.horizontal",
		"BXREADY_LIST_MARKER_TYPE_STANDART" => "circle.horizontal",
		"BXREADY_LIST_OWN_MARKER_USE_STANDART" => "N",
		"BXREADY_USER_TYPES_BIG" => "N",
		"BXREADY_USER_TYPES_SMALL" => "N",
		"BXREADY_USER_TYPES_STANDART" => "N",
		"BXREADY_USE_ELEMENTCLASS_BIG" => "Y",
		"BXREADY_USE_ELEMENTCLASS_SMALL" => "Y",
		"BXREADY_USE_ELEMENTCLASS_STANDART" => "Y",
		"BXREADY_VERTICAL_ALIGN_BIG" => "Y",
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
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"OR\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:44:319\",\"DATA\":{\"logic\":\"Equal\",\"value\":307}}]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => $arSortGlobal["sort"],
		"ELEMENT_SORT_FIELD2" => "rand",
		"ELEMENT_SORT_ORDER" => $arSortGlobal["sort_order"],
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "44",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LAZY_LOAD" => "N",
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
		"PAGE_BLOCK_TITLE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "custom_new",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "20",
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
		"SET_BROWSER_TITLE" => "N",
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
		"USE_PRODUCT_QUANTITY" => "N",
		"BXR_SHOW_MAX_QUANTITY" => "N",
		"BXREADY_LIST_XLG_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_LG_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_MD_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_SM_CNT_LISTPAGE" => "1",
		"BXREADY_LIST_XS_CNT_LISTPAGE" => "1",
		"BXREADY_ELEMENT_ADDCLASS_LISTPAGE" => "",
		"BXREADY_USE_ELEMENTCLASS_LISTPAGE" => "Y",
		"BXREADY_VERTICAL_ALIGN_LISTPAGE" => "Y",
		"BXREADY_ELEMENT_EXT_PARAMS_LISTPAGE" => "arrExtParams",
		"BXREADY_USER_TYPES_LISTPAGE" => "N",
		"BXREADY_ELEMENT_DRAW_LISTPAGE" => "ecommerce.m2.v1",
		"BXREADY_LIST_SLIDER_LISTPAGE" => "N",
		"COMPOSITE_FRAME_MODE" => "Y",
		"COMPOSITE_FRAME_TYPE" => "DYNAMIC_WITH_STUB_LOADING",
		"ENLARGE_PRODUCT" => "STRICT",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"SHOW_SLIDER" => "Y",
		"LABEL_PROP" => "",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"BXR_SHOW_RATING_LISTPAGE" => "avg",
		"BXR_SHOW_ACTION_TIMER_LISTPAGE" => "N",
		"BXR_SKU_PROPS_SHOW_TYPE_LISTPAGE" => "square",
		"BXR_TILE_SHOW_PROPERTIES_LISTPAGE" => "N",
		"BXREADY_LIST_MARKER_TYPE_LISTPAGE" => "not",
		"BXREADY_LIST_OWN_MARKER_USE_LISTPAGE" => "N",
		"BXR_SHOW_ARTICLE_LISTPAGE" => "Y",
		"BXR_SHOW_SLIDER_LISTPAGE" => "Y",
		"BXR_USE_FAST_VIEW_LISTPAGE" => "N",
		"BXR_IMG_MAX_WIDTH_LISTPAGE" => "250",
		"BXR_IMG_MAX_HEIGHT_LISTPAGE" => "250"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
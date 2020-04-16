<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
/*viewed products*/
if (Loader::includeModule("catalog") && Loader::includeModule("sale")) {
	$basketUserId = (int)CSaleBasket::GetBasketUserID(true);
	$siteId = Bitrix\Main\Application::getInstance()->getContext()->getSite();
	$viewedIterator = Bitrix\Catalog\CatalogViewedProductTable::GetList(array(
		'select' => array('PRODUCT_ID', 'ELEMENT_ID'),
		'filter' => array('FUSER_ID' => $basketUserId, 'SITE_ID' => $siteId, '!PRODUCT_ID' => $GLOBALS["CURRENT_ELEMENT_ID"]),
		'order' => array('DATE_VISIT' => 'DESC'),
		'limit' => $arParams["VIEWED_PRODUCTS_CNT"],
	));

	$viewedProductIds = array();
	while ($viewedProduct = $viewedIterator->fetch())
		$viewedProductIds[] = $viewedProduct["PRODUCT_ID"];
};

global $arrViewedFilter;
$arrViewedFilter = array(
	'ACTIVE' => 'Y',
	'ID' => $viewedProductIds
);
?>

<?if (count($arrViewedFilter)>0):?>

	<h3>Вы смотрели</h3>

	<?$APPLICATION->IncludeComponent(
		"bxready.market2:catalog.section",
		"bxready",
		array(
			"COMPONENT_TEMPLATE" => "bxready",
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_ID" => "41",
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_CODE" => "",
			"SECTION_USER_FIELDS" => array(
				0 => "UF_ICO_FONT",
				1 => "UF_SHOW_IN_FOOTER",
				2 => "UF_ICO_LIGHT",
				3 => "UF_ICO_DARK",
				4 => "UF_ICO_COLOR",
				5 => "UF_REQUIRED_BP",
				6 => "UF_OPTIONAL_BP",
				7 => "UF_IB_EL",
				8 => "UF_SHOW_IN",
				9 => "UF_SKU_TYPE",
				10 => "UF_FILES",
				11 => "UF_VIDEO",
				12 => "UF_SCHEMES",
				13 => "",
			),
			"FILTER_NAME" => "arrViewedFilter",
			"INCLUDE_SUBSECTIONS" => "Y",
			"SHOW_ALL_WO_SECTION" => "Y",
			"CUSTOM_FILTER" => "",
			"HIDE_NOT_AVAILABLE" => "N",
			"HIDE_NOT_AVAILABLE_OFFERS" => "N",
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_ORDER" => "asc",
			"ELEMENT_SORT_FIELD2" => "id",
			"ELEMENT_SORT_ORDER2" => "desc",
			"OFFERS_SORT_FIELD" => "sort",
			"OFFERS_SORT_ORDER" => "asc",
			"OFFERS_SORT_FIELD2" => "id",
			"OFFERS_SORT_ORDER2" => "desc",
			"PAGE_ELEMENT_COUNT" => "5",
			"LINE_ELEMENT_COUNT" => "3",
			"PROPERTY_CODE" => array(
				0 => "CLOTH",
				1 => "STYLE",
				2 => "INSULATION",
				3 => "MATERIAL",
				4 => "COLOR",
				5 => "SPECIALOFFER",
				6 => "SUVENIR_NAZNACH",
				7 => "NEWPRODUCT",
				8 => "GLASS_OS",
				9 => "BXR_RELATED",
				10 => "PAL_TYPE",
				11 => "VELO_TYPE",
				12 => "SALELEADER",
				13 => "RECOMMENDED",
				14 => "PLATFORM",
				15 => "COMPLECT",
				16 => "ARB_TIME",
				17 => "GLASS_TYPE",
				18 => "MANUFACTURER",
				19 => "DISPLAY_TYPE",
				20 => "GLASS_ALL",
				21 => "MINIMUM_PRICE",
				22 => "OBJOM_VSTROENNOY_PAMYATI",
				23 => "SIZE_ACCUMUL",
				24 => "FORM_FACTOR",
				25 => "DYSPLAY_CAM",
				26 => "MAXIMUM_PRICE",
				27 => "ACCESSORIES",
				28 => "BXR_VIDEO",
				29 => "CML2_BAR_CODE",
				30 => "CML2_ARTICLE",
				31 => "CML2_ATTRIBUTES",
				32 => "CML2_TRAITS",
				33 => "CML2_BASE_UNIT",
				34 => "CML2_TAXES",
				35 => "vote_count",
				36 => "vote_sum",
				37 => "rating",
				38 => "BLOG_POST_ID",
				39 => "BLOG_COMMENTS_CNT",
				40 => "SKU_TYPE",
				41 => "BXR_DISCOUNT_PERIOD_FROM",
				42 => "BXR_DISCOUNT_PERIOD_TO",
				43 => "BXR_DISCOUNT_TIMER",
				44 => "",
			),
			"OFFERS_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"OFFERS_PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"OFFERS_LIMIT" => "5",
			"BACKGROUND_IMAGE" => "-",
			"PRODUCT_DISPLAY_MODE" => "N",
			"SHOW_OLD_PRICE" => "N",
			"BXR_SHOW_MAX_QUANTITY" => "N",
			"MESS_BTN_BUY" => "Купить",
			"MESS_BTN_ADD_TO_BASKET" => "В корзину",
			"MESS_BTN_SUBSCRIBE" => "Подписаться",
			"MESS_BTN_DETAIL" => "Подробнее",
			"MESS_NOT_AVAILABLE" => "Нет в наличии",
			"BXREADY_LIST_XLG_CNT_LISTPAGE" => "12",
			"BXREADY_LIST_LG_CNT_LISTPAGE" => "12",
			"BXREADY_LIST_MD_CNT_LISTPAGE" => "12",
			"BXREADY_LIST_SM_CNT_LISTPAGE" => "12",
			"BXREADY_LIST_XS_CNT_LISTPAGE" => "12",
			"BXREADY_ELEMENT_ADDCLASS_LISTPAGE" => "",
			"BXREADY_USE_ELEMENTCLASS_LISTPAGE" => "Y",
			"BXREADY_VERTICAL_ALIGN_LISTPAGE" => "Y",
			"BXREADY_ELEMENT_EXT_PARAMS_LISTPAGE" => "arrExtParams",
			"BXREADY_USER_TYPES_LISTPAGE" => "N",
			"BXREADY_ELEMENT_DRAW_LISTPAGE" => "ecommerce.m2.small.v1",
			"BXR_SHOW_RATING_LISTPAGE" => "N",
			"BXR_SHOW_ACTION_TIMER_LISTPAGE" => "N",
			"BXR_SKU_PROPS_SHOW_TYPE_LISTPAGE" => "rounded",
			"BXR_TILE_SHOW_PROPERTIES_LISTPAGE" => "N",
			"BXREADY_LIST_MARKER_TYPE_LISTPAGE" => "not",
			"BXREADY_LIST_OWN_MARKER_USE_LISTPAGE" => "N",
			"BXR_SHOW_ARTICLE_LISTPAGE" => "Y",
			"BXR_SHOW_SLIDER_LISTPAGE" => "Y",
			"BXR_USE_FAST_VIEW_LISTPAGE" => "N",
			"BXREADY_LIST_SLIDER_LISTPAGE" => "N",
			"SECTION_URL" => "",
			"DETAIL_URL" => "",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"SEF_MODE" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"SET_TITLE" => "Y",
			"SET_BROWSER_TITLE" => "Y",
			"BROWSER_TITLE" => "-",
			"SET_META_KEYWORDS" => "Y",
			"META_KEYWORDS" => "-",
			"SET_META_DESCRIPTION" => "Y",
			"META_DESCRIPTION" => "-",
			"SET_LAST_MODIFIED" => "N",
			"USE_MAIN_ELEMENT_SECTION" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_FILTER" => "N",
			"ACTION_VARIABLE" => "action",
			"PRODUCT_ID_VARIABLE" => "id",
			"PRICE_CODE" => array(
				0 => "BASE",
			),
			"USE_PRICE_COUNT" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"PRICE_VAT_INCLUDE" => "Y",
			"CONVERT_CURRENCY" => "N",
			"BASKET_URL" => "/personal/basket.php",
			"USE_PRODUCT_QUANTITY" => "N",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"ADD_PROPERTIES_TO_BASKET" => "Y",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"PARTIAL_PRODUCT_PROPERTIES" => "N",
			"PRODUCT_PROPERTIES" => array(
			),
			"OFFERS_CART_PROPERTIES" => array(
			),
			"ADD_TO_BASKET_ACTION" => "ADD",
			"DISPLAY_COMPARE" => "N",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Товары",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"LAZY_LOAD" => "N",
			"LOAD_ON_SCROLL" => "N",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => "",
			"COMPATIBLE_MODE" => "Y",
			"DISABLE_INIT_JS_IN_COMPONENT" => "N",
			"USE_ENHANCED_ECOMMERCE" => "N"
		),
		false
	);
?>
<?endif;?>


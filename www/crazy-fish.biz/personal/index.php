<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.section", 
	"bxr-market", 
	array(
		"ACCOUNT_PAYMENT_ELIMINATED_PAY_SYSTEMS" => array(
			0 => "0",
		),
		"ACCOUNT_PAYMENT_PERSON_TYPE" => "1",
		"ACCOUNT_PAYMENT_SELL_SHOW_FIXED_VALUES" => "Y",
		"ACCOUNT_PAYMENT_SELL_TOTAL" => array(
			0 => "100",
			1 => "200",
			2 => "500",
			3 => "1000",
			4 => "5000",
			5 => "",
		),
		"ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_RIGHTS_PRIVATE" => "N",
		"COMPATIBLE_LOCATION_MODE_PROFILE" => "N",
		"CUSTOM_PAGES" => "[[\"/personal/bonus\",\"Бонусный счет\",\"fa-money\"]]",
		"CUSTOM_SELECT_PROPS" => array(
		),
		"NAV_TEMPLATE" => "",
		"ORDER_HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"PATH_TO_BASKET" => "/personal/basket",
		"PATH_TO_CATALOG" => "/catalog/",
		"PATH_TO_CONTACT" => "/company/contacts",
		"PATH_TO_PAYMENT" => "/personal/order/payment",
		"PER_PAGE" => "20",
		"PROP_1" => array(
		),
		"PROP_2" => "",
		"SAVE_IN_SESSION" => "Y",
		"SEF_FOLDER" => "/personal/",
		"SEF_MODE" => "Y",
		"SEND_INFO_PRIVATE" => "N",
		"SET_TITLE" => "Y",
		"SHOW_ACCOUNT_COMPONENT" => "Y",
		"SHOW_ACCOUNT_PAGE" => "N",
		"SHOW_ACCOUNT_PAY_COMPONENT" => "Y",
		"SHOW_BASKET_PAGE" => "Y",
		"SHOW_CONTACT_PAGE" => "N",
		"SHOW_ORDER_PAGE" => "Y",
		"SHOW_PRIVATE_PAGE" => "Y",
		"SHOW_PROFILE_PAGE" => "Y",
		"SHOW_SUBSCRIBE_PAGE" => "Y",
		"USER_PROPERTY_PRIVATE" => "",
		"USE_AJAX_LOCATIONS_PROFILE" => "N",
		"COMPONENT_TEMPLATE" => "bxr-market",
		"SHOW_FAVORITES_PAGE" => "Y",
		"ACCOUNT_PAYMENT_SELL_CURRENCY" => "RUB",
		"ORDER_HIDE_USER_INFO" => array(
			0 => "0",
		),
		"ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"ORDER_DEFAULT_SORT" => "STATUS",
		"ALLOW_INNER" => "N",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "20",
		"PROFILES_PER_PAGE" => "20",
		"MAIN_CHAIN_NAME" => "Мой кабинет",
		"BXREADY_LIST_XLG_CNT_FAVORITES" => "3",
		"BXREADY_LIST_LG_CNT_FAVORITES" => "4",
		"BXREADY_LIST_MD_CNT_FAVORITES" => "4",
		"BXREADY_LIST_SM_CNT_FAVORITES" => "6",
		"BXREADY_LIST_XS_CNT_FAVORITES" => "12",
		"BXREADY_ELEMENT_ADDCLASS_FAVORITES" => "",
		"BXREADY_USE_ELEMENTCLASS_FAVORITES" => "Y",
		"BXREADY_VERTICAL_ALIGN_FAVORITES" => "Y",
		"BXREADY_LIST_SLIDER_FAVORITES" => "N",
		"BXREADY_ELEMENT_EXT_PARAMS_FAVORITES" => "arrExtParams",
		"BXREADY_USER_TYPES_FAVORITES" => "N",
		"BXREADY_ELEMENT_DRAW_FAVORITES" => "ecommerce.m2.v1",
		"BXR_PRODUCT_BLOCKS_ORDER_FAVORITES" => "picture,name,rating,avail,article,price,buttons,action_timer,props",
		"BXR_SHOW_RATING_FAVORITES" => "avg",
		"BXR_SHOW_ACTION_TIMER_FAVORITES" => "LIGHT",
		"BXR_SKU_PROPS_SHOW_TYPE_FAVORITES" => "square",
		"BXR_TILE_SHOW_PROPERTIES_FAVORITES" => "N",
		"BXREADY_LIST_MARKER_TYPE_FAVORITES" => "ribbon.vertical",
		"BXREADY_LIST_OWN_MARKER_USE_FAVORITES" => "N",
		"BXR_SHOW_ARTICLE_FAVORITES" => "Y",
		"BXR_SHOW_SLIDER_FAVORITES" => "Y",
		"BXR_SLIDER_INTERVAL_FAVORITES" => "3000",
		"BXR_USE_FAST_VIEW_FAVORITES" => "Y",
		"MESS_BTN_FAST_VIEW_FAVORITES" => "Быстрый просмотр",
		"BXR_IMG_MAX_WIDTH_FAVORITES" => "275",
		"BXR_IMG_MAX_HEIGHT_FAVORITES" => "275",
		"PATH_TO_FAVORITES" => "/personal/favorites/",
		"PROP_4" => array(
		),
		"ORDER_REFRESH_PRICES" => "N",
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"orders" => "orders/",
			"account" => "account/",
			"subscribe" => "subscribe/",
			"profile" => "profiles/",
			"profile_detail" => "profiles/#ID#",
			"private" => "profile/",
			"order_detail" => "orders/#ID#",
			"order_cancel" => "cancel/#ID#",
		)
	),
	false
);?><br>
	<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
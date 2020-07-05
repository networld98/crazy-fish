<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>Text here....<?$APPLICATION->IncludeComponent(
	"bxmaker:geoip.message",
	"",
	Array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"TYPE" => "deliverytoday"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"custom", 
	array(
		"USER_PROPERTY_NAME" => "",
		"SHOW_FIELDS" => array(
			0 => "NAME",
			1 => "PERSONAL_PHONE",
			2 => "PERSONAL_STREET",
			3 => "PERSONAL_NOTES",
			4 => "WORK_NOTES",
		),
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "PERSONAL_PHONE",
		),
		"AUTH" => "Y",
		"USE_BACKURL" => "Y",
		"SUCCESS_PAGE" => "/auth/",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
			0 => "UF_INN",
		),
		"COMPONENT_TEMPLATE" => "custom",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
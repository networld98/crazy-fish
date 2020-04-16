<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результат оплаты");
?>Спасибо, платеж находится в обработке. Мы свяжемся с Вами ближайшее время!
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.payment.receive", 
	"", 
	array(
		"PAY_SYSTEM_ID_NEW" => "17"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
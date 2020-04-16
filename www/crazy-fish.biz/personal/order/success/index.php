<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказ в 1 клик");
?>
<?$APPLICATION->IncludeComponent(
    "bxready.market2:one.click.order.basket.success",
    ".default",
    array(
        "ORDER_ID" => intval($_REQUEST["orderId"]),
        "ERROR_CODE" => htmlspecialchars($_REQUEST["error"])
    ),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


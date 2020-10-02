<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить силиконовые приманки, спиннинги в интернет-магазине Crazy Fish");
$APPLICATION->SetPageProperty("description", "Интернет-магазин для спиннингистов: силиконовые приманки, спиннинги, офсетные крючки по низким ценам");
$APPLICATION->SetTitle("Новинки Crazy Fish");?>
<h1>Новинки</h1>
<div class="novinki-page">
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => "/novinki/ajax.php"
        ),
        false
    ); ?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$cntBasketItems = CSaleBasket::GetList(
    array(),
    array(
        "FUSER_ID" => CSaleBasket::GetBasketUserID(),
        "LID" => s2,
        "ORDER_ID" => "NULL"
    ),
    array()
);?>
 <a class="mini-cart" href="<?=$arParams["BXR_BASKET_LINK"];?>">
    <i class="fa fa-shopping-basket fa-fw"></i>
    <?if ($cntBasketItems) {?>
        <div class="basket-items-cnt bxr-color"><?=$cntBasketItems?></div>
    <?}?>
</a>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");

$total = 0;
$arSelect = Array();
$arFilter = Array("IBLOCK_ID"=>44, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement())
{
    $arProps = $ob->GetProperties();
    $arFields = $ob->GetFields();
    $total++;
    $nav = CIBlockSection::GetNavChain(false,$arFields["IBLOCK_SECTION_ID"]);
    while($arSectionPath = $nav->GetNext()){
        $name_main = $arSectionPath['NAME'];
        break;
    }
    CIBlockElement::SetPropertyValueCode($arFields['ID'], $arProps['SECTION_DEPTH_1']['CODE'], $name_main);
}

print "Обработано: ".$total."<br>";
?>
<?php

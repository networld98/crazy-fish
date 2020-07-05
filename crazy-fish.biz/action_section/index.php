<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");

if(CModule::IncludeModule('iblock')){

    $arSelect = Array();
    $arFilter = Array("IBLOCK_ID"=>44, "ACTIVE"=>"Y", 'GLOBAL_ACTIVE'=>'Y');
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($element = $res->GetNextElement()) {
        $arFields = $element->GetFields();
        $arDiscounts = CCatalogDiscount::GetDiscountByProduct($arFields['ID'], $USER->GetUserGroupArray(), "N", 2, s2);
        if (!empty($arDiscounts)){
            $section_discount[] = $arFields["IBLOCK_SECTION_ID"];
        }

    }
    $arFiltr = array(
            'IBLOCK_ID'=>44,
            'UF_DISCOUNT_SECTI'=>'Y'
    );
    $res = CIBlockSection::GetList($arSort, $arFiltr, false, $arSelect);

    while($ar_result = $res->GetNextElement()) {
        $arFields = $ar_result->GetFields();
        $select_cent[] = $arFields["ID"];
        $bs = new CIBlockSection;
        $arSection = Array(
            "UF_DISCOUNT_SECTI" => '',
        );
        $bs->Update($arFields["ID"], $arSection);
    }
    foreach (array_unique($section_discount) as $sect){
        $bs = new CIBlockSection;
        $arSection = Array(
            "UF_DISCOUNT_SECTI" => 'Y',
        );
        $bs->Update($sect, $arSection);
        $res = CIBlockSection::GetByID($sect);
        while($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $bs->Update($arFields['IBLOCK_SECTION_ID'], $arSection);
            $res2 = CIBlockSection::GetByID($arFields['IBLOCK_SECTION_ID']);
            while($ob = $res2->GetNextElement()) {
                $arFields = $ob->GetFields();
                $bs->Update($arFields['IBLOCK_SECTION_ID'], $arSection);
            }
        }
    }
}
$f = fopen('section.log','a');
fwrite($f, date('d.m.Y H:i:s')." Проставлен флаг скидки в разделах ".count(array_unique($section_discount))." товаров \n");
fclose($f);
print "ЗАВЕРШЕНО".count(array_unique($section_discount));
?>

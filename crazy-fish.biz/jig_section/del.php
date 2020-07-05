<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule('iblock')) {
    $arFilter = Array("IBLOCK_ID" => 44, "IBLOCK_SECTION_ID" => 1615, "ACTIVE" => "Y", 'GLOBAL_ACTIVE' => 'Y');
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($element = $res->GetNextElement()) {
        $arFields = $element->GetFields();
        $arProps = $element->GetProperties();
        CIBlockElement::SetPropertyValuesEx($arFields['ID'], 44, array("PRIZNAK_JIG" => ""));
        echo 'Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак <br/>';
        $f = fopen('jig.log','a');
        fwrite($f, date('d.m.Y H:i:s').' Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак'."\n");
        fclose($f);
    }
}

?>
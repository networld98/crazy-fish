<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bxready.market2:menu.sections",
    "",
    Array(
            "IS_SEF" => "Y",
            "ID" => $_REQUEST["ID"],
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "41",
            "SECTION_URL" => "",
            "DEPTH_LEVEL" => "5",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "360000",
            "SEF_BASE_URL" => "/catalog/",
            "SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
            "DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/"
    ),
    false,
    array("HIDE_ICONS" => "Y")
);

foreach ($aMenuLinksExt as $k => &$val){
    if($k!="PICTURE")
        $val["DEPTH_LEVEL"]++;
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);    

?>
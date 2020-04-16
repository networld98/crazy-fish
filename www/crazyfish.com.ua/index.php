<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->SetTitle("CRAZY FISH - силиконовые приманки для рыбалки");?>
<?$APPLICATION->SetPageProperty("description", "силиконовые приманки для рыбалки");?>

<? \Alexkova\Bxready2\Area::showArea('promo_area', $bxready2::getAreaByCode('promo_area'));?>
<?\Alexkova\Bxready2\Area::showArea('main_page', $bxready2::getAreaByCode('main_page'));?>
    <div class="bxr-template-container bxr-cloud-all bxr-cloud-padding bxr-b20">
<?if ($APPLICATION->GetCurPage(true) != SITE_DIR.'index.php'):?>
    <?if (\Bitrix\Main\Loader::includeModule('alexkova.bxready2')){
        $APPLICATION->IncludeComponent("bxready2:abmanager", 'full-responsive', array(
            "SHOW" => "BXR_CATALOG_TOP",
            "BANTYPE" => "BXR_CATALOG_TOP",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "0",
            "USE_IN_LG_MODE" => "Y",
            "USE_IN_MD_MODE" => "Y",
            "USE_IN_SM_MODE" => "N",
            "USE_IN_XS_MODE" => "N"
        ),
            false,
            array(
                "ACTIVE_COMPONENT" => "Y",
                "HIDE_ICONS"=>"N"
            )
        );

    };?>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
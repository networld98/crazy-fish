<?php
$bxmarket = \Alexkova\Market2\Bxmarket::getInstance();
$isHidden = "isHidden"; 

if (($bxmarket->getCoreData("left_column") == "Y" && $bxmarket->getCoreData("left_menu") == "T") ||
   ($bxmarket->getCoreData("left_column") == "N" && ($bxmarket->getCoreData("left_menu") == "T" || $bxmarket->getCoreData("left_menu") == "Y"))){

}
else {
    $isHidden = "";
}

?>
<div class="bxr-left-column-js bxr-b20 bxr-cloud-all bxr-cloud-all-br1-not bxr-cloud-all-br2-not <?=$isHidden;?>">
    <?$APPLICATION->IncludeComponent(
	"bxready.market2:menu", 
	"left_hover_ukr_1_lev", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left_catalog",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "36000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "left_hover_ukr_1_lev",
		"TITLE_MENU" => "",
		"SHOW_TREE" => "Y",
		"PICTURE_CATEGARIES" => "N",
		"ICO_LEFT_MENU_COLOR_1" => "light",
		"ICO_LEFT_MENU_COLOR_2" => "light",
		"ICO_LEFT_MENU_HOVER_COLOR_1" => "light",
		"ICO_LEFT_MENU_HOVER_COLOR_2" => "light",
		"HOVER_SHOW_LEFT" => "N",
		"HOVER_MODAL_BACKDROP" => "Y",
		"SHOW_TOP" => "N",
		"HOVER_MENU_COL_SM" => "1",
		"HOVER_MENU_COL_XS" => "1",
		"PARAMETERS" => "",
		"STYLE_MENU" => "colored_light_new",
		"PICTURE_SECTION" => "N",
		"HOVER_TEMPLATE" => "classic",
		"STYLE_MENU_HOVER" => "colored_light_new",
		"PICTURE_SECTION_HOVER" => "N",
		"HOVER_MENU_COL_XL" => "",
		"HOVER_MENU_COL_LG" => "",
		"HOVER_MENU_COL_MD" => "",
		"ROOT_MENU_TYPE" => "left2",
		"COLOR_MENU" => "light",
		"FONT_MENU" => "normal",
		"INDENT_ITEMS_MENU" => "normal",
		"STRETCH_MENU" => "Y",
		"IS_FIRST_CATALOG" => "N",
		"ICO_TOP_MENU" => "N",
		"TEMPLATE_MENU_HOVER" => "classic"
	),
	false
);?>
</div>
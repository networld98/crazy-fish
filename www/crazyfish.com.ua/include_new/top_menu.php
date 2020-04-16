<?php
$bxmarket = \Alexkova\Market2\Bxmarket::getInstance();
?>
<div class="hidden-sm hidden-xs">
    <?$APPLICATION->IncludeComponent(
	"bxready.market2:menu", 
	"version_v1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left_catalog",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "36000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "version_v1",
		"TITLE_MENU" => "",
		"SHOW_TREE" => "Y",
		"ICO_TOP_MENU_COLOR_1" => "light",
		"ICO_TOP_MENU_COLOR_2" => "light",
		"ICO_HOVER_MENU_COLOR_1" => "light",
		"ICO_HOVER_MENU_COLOR_2" => "light",
                "STRETCH_MENU" => "Y",
                "ICO_TOP_MENU" => "ICO",
            
		"HOVER_SHOW_LEFT" => "N",
		"HOVER_MODAL_BACKDROP" => "N",
            
		"SHOW_TOP" => "N",
                "IS_FIRST_CATALOG" => "Y",
            
		"HOVER_MENU_COL_SM" => "1",
		"HOVER_MENU_COL_XS" => "1",
            
		"PARAMETERS" => "",

                 'COLOR_MENU' => '',  'FONT_MENU' => '',  'INDENT_ITEMS_MENU' => '',  'TEMPLATE_MENU_HOVER' => '',  'PICTURE_CATEGARIES' => '',  'STYLE_MENU_HOVER' => '',  'PICTURE_SECTION_HOVER' => '',  'HOVER_MENU_COL_XL' => '',  'HOVER_MENU_COL_LG' => '',  'HOVER_MENU_COL_MD' => '', 
	),
	false
);?>
</div>
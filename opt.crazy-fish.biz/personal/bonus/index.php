<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бонусная программа");

if(!$USER->IsAuthorized())
{
	$APPLICATION->AuthForm("");
	return;
}
?>

<?$APPLICATION->IncludeComponent("vbcherepanov:vbcherepanov.bonusaccount",".default",
Array(
"CACHE_TIME" => "3600",
"CACHE_TYPE" => "N",
"COMPONENT_TEMPLATE" => ".default",
"SHOW_BONUS_ACCOUNT" => "Y",
"SHOW_INNER_ACCOUNT" => "N"
)
);?>

<br/>
 <?$APPLICATION->IncludeComponent("vbcherepanov:vbcherepanov.bonusdescription", ".default", 
array(
"CACHE_TIME" => "3600",
"CACHE_TYPE" => "N",
"COMPONENT_TEMPLATE" => ".default",
"NOTACTIVE" => "N",
"ORDER" => "BONUS",
"ORDERDEC" => "ASC",
"SHOW_BONUS_ACCOUNT" => "Y",
"SHOW_INNER_ACCOUNT" => "N"
),
false
);?>
  
<br/>
 <?$APPLICATION->IncludeComponent("vbcherepanov:vbcherepanov.bonusrefcode", "",
Array(
"CACHE_TIME" => "3600",
"CACHE_TYPE" => "N",
"ONLY_MAIN"=>"N",
)
);?>

<br/>

  <?$APPLICATION->IncludeComponent("vbcherepanov:vbcherepanov.userreferal","",
Array(
"CACHE_TIME" => "3600",
"CACHE_TYPE" => "A"
)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
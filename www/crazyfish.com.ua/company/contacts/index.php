<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="tb20-bottom">
</div>
<div class="tb20-bottom row bxr-page-contacts">
	<div class="col-md-12">
		<div class="bxr-border">
            <h2>Интернет магазин:</h2>
            <p>
                +38 (095) 746-40-48; +38 (067) 833-19-58 <strong>с 10:00 до 17:00 понедельник – пятница</strong>
            </p>
            <p>
                <strong style="font-size: 14px">ЗАКАЗ ПО ТЕЛЕФОНУ:</strong> +38 (096) 733-60-83; +38 (063) 824-30-88; +38 (066) 158-73-86<br>
                <strong>консультации по рыбалке</strong>
            </p>
            <p>
                <strong>Наш e-mail:</strong> shop@crazyfish.com.ua — пишите по любому вопросу.
            </p>

            <p>
                <strong>Адрес:</strong> Украина, г. Одесса, ул. Семена Палия,  125-А
            </p>
             <br>
            <h2>Оптовый отдел:</h2>
            <p>
                +38 (099) 384-36-26 <strong>с 10:00 до 17:00 понедельник - пятница</strong>
            </p>
		</div>
	</div>
	<div class="col-md-6">
		<div class="bxr-border">
			<p>
			</p>
		</div>
	</div>
</div>
<div class="clearfix">
</div>
<div id="bxr-contact-map">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"named_area",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"INCLUDE_PTITLE" => GetMessage("GHANGE_MOBILE_CONTACTS"),
		"PATH" => SITE_DIR."include/map.php"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'N'
)
);?>
</div>
 <br>
<h4>Обратная связь</h4>
<div class="tb20-bottom">
	 Данный сервис предназначен для обратной связи. Воспользуйтесь формой, чтобы задать интересующий Вас вопрос, отправить комментарии, замечания или предложения.
</div>
 <br>
 <button class="bxr-color-button" href="javascript:void(0);" data-toggle="modal" data-target="#bxr-feedback-popup"> <span class="fa fa-long-arrow-right"></span>
Задать вопрос </button> <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
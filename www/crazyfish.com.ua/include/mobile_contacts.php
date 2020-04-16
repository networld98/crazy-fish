<div class="bxr-mobile-contact-form bxr-b20">
    <table class="bxr-w100">
        <tbody>
        <tr>
            <td>
                <b>Адрес</b>
            </td>
            <td class="text-right">
                <a href="/company/contacts/">Украина, г. Одесса, ул. Семена Палия,  125-А</a>
            </td>
        </tr>
        <tr>
            <td>
                <b>График работы</b>
            </td>
            <td class="text-right">
                Пн-Пт с 10.00 до 17.00
            </td>
        </tr>
        </tbody>
        </table>
</div>
<div class="bxr-mobile-contact-form bxr-built-in-form">
        <h2>Задать вопрос</h2>
         <?$APPLICATION->IncludeComponent(
                "bxready.market2:form.iblock",
                "built_in",
                Array(
                        "BUTTON_TEXT" => "Открыть форму",
                        "BXR_FORM_SUBMIT_CAPTION" => "Написать сообщение",
                        "BXR_FORM_SUBMIT_ICON" => "fa fa-phone",
                        "COMPONENT_TEMPLATE" => "built_in",
                        "EVENT_CLASS" => "open-form",
                        "GROUPS" => array("2"),
                        "IBLOCK_ID" => "7",
                        "IBLOCK_TYPE" => "forms",
                        "MAX_FILE_SIZE" => "0",
                        "MODE" => "link",
                        "NAME_FROM_PROPERTY" => "10",
                        "POPUP_TITLE" => "Заполните поля",
                        "PROPERTY_CODES" => array(
                            0 => "10",
                            1 => "11",
                            2 => "12",
                            3 => "13",
                        ),
                        "RESIZE_IMAGES" => "N",
                        "SEND_EVENT" => "KZNC_NEW_FORM_RESULT_QUESTION",
                        "STATUS_NEW" => "N",
                        "USER_MESSAGE_ADD" => "Спасибо за сообщение. Наш менеджер перезвонит вам.",
                        "USE_CAPTCHA" => "N"
                ),
        false
        );?>
</div>
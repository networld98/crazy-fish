<div class="bxr-mobile-contact-form bxr-b20">
    <table class="bxr-w100">
        <tbody>
        <tr>
            <td>
                <b>Адрес</b>
            </td>
            <td class="text-right">
                <a href="/company/contacts/">Россия, Московская обл., г.Реутов, ул.Победы, 1</a>
            </td>
        </tr>
        <tr>
            <td>
                <b>График работы</b>
            </td>
            <td class="text-right">
                с 9.00 до 19.00
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
                        "IBLOCK_ID" => "26",
                        "IBLOCK_TYPE" => "forms",
                        "MAX_FILE_SIZE" => "0",
                        "MODE" => "link",
                        "NAME_FROM_PROPERTY" => "150",
                        "POPUP_TITLE" => "Заполните поля",
                        "PROPERTY_CODES" => array(
                            0 => "150",
                            1 => "151",
                            2 => "152",
                            3 => "153",
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
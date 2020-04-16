<div class="bxr-mobile-contact-form bxr-b20">
    <table class="bxr-w100">
        <tbody>
            <tr>
                <td>
                    <b>Vodafone</b>
                </td>
                <td class="text-right">
                    +38(095)7464048
                </td>
            </tr>
            <tr>
                <td>
                    <b>Kyivstar</b>
                </td>
                <td class="text-right">
                    +38(067)8331958
                </td>
            </tr>
                    </tbody>
    </table>
</div>
<div class="bxr-mobile-contact-form bxr-built-in-form">
        <h2>Заявка на звонок</h2>
         <?$APPLICATION->IncludeComponent(
                "bxready.market2:form.iblock",
                "built_in",
                Array(
                        "BUTTON_TEXT" => "Открыть форму",
                        "BXR_FORM_SUBMIT_CAPTION" => "Позвоните мне",
                        "BXR_FORM_SUBMIT_ICON" => "fa fa-phone",
                        "COMPONENT_TEMPLATE" => "built_in",
                        "EVENT_CLASS" => "open-form",
                        "GROUPS" => array("2"),
                        "IBLOCK_ID" => "9",
                        "IBLOCK_TYPE" => "forms",
                        "MAX_FILE_SIZE" => "0",
                        "MODE" => "link",
                        "NAME_FROM_PROPERTY" => "23",
                        "POPUP_TITLE" => "Заполните поля",
                        "PROPERTY_CODES" => array(
                            0 => "23",
                            1 => "24",
                            2 => "25",
                        ),
                        "RESIZE_IMAGES" => "N",
                        "SEND_EVENT" => "KZNC_NEW_FORM_RESULT_PHONE",
                        "STATUS_NEW" => "N",
                        "USER_MESSAGE_ADD" => "Спасибо за сообщение. Наш менеджер перезвонит вам.",
                        "USE_CAPTCHA" => "N"
                ),
        false
        );?>
</div>
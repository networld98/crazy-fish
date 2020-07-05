<div class="bxr-mobile-contact-form bxr-b20">
    <table class="bxr-w100">
        <tbody>
            <tr>
                <td>
                    <b>Телефон</b>
                </td>
                <td class="text-right">
                    8 800 333-50-82
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td class="text-right">
                    бесплатно по России
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
                        "IBLOCK_ID" => "28",
                        "IBLOCK_TYPE" => "forms",
                        "MAX_FILE_SIZE" => "0",
                        "MODE" => "link",
                        "NAME_FROM_PROPERTY" => "163",
                        "POPUP_TITLE" => "Заполните поля",
                        "PROPERTY_CODES" => array(
                            0 => "163",
                            1 => "164",
                            2 => "165",
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
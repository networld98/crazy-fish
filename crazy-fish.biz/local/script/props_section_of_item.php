<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$iblock = 44;
function sectionProp($iblock, $row, $in, $out){
    if ($row[$in]!=NULL){
        $arFilter = Array("IBLOCK_ID" => $iblock, "SECTION_ID" => $row['ID'], "INCLUDE_SUBSECTIONS" => "Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array());
        while( $obElement = $res->GetNextElement() ) {
            $Element = $obElement->GetFields();
            $Prop = $obElement->GetProperties();
            if($Prop[$out]['VALUE']==NULL){
                CIBlockElement::SetPropertyValuesEx($Element['ID'], $iblock, array($out => $row[$in]));
                $f = fopen('props_section_of_item.log','a');
                fwrite($f, date('d.m.Y H:i:s').' Элементу ' . $Element['ID'] . ' ' . $Element['NAME'] . ' присвоено свойство '.$Prop[$out]['NAME']. ' '.$row[$in]."\n");
                fclose($f);
            }
        }
    }
}
if(CModule::IncludeModule('iblock')) {
    $sect = CIBlockSection::GetList(Array(), Array('IBLOCK_ID' => $iblock),false, Array("UF_BRAND","UF_DLINA","UF_INPACK","UF_VES","UF_ATTRAKTANT","UF_KOLVO_NITEY","UF_RAZMOTKA_M","UF_BUOYANCY_TYPE","UF_DEEPENING","UF_VIDY_RYB","UF_TIP_PRIMANKI"));
    while ($row = $sect->GetNext()) {
        sectionProp($iblock, $row, 'UF_BRAND', 'BRAND');
        sectionProp($iblock, $row, 'UF_DLINA', 'dlina');
        sectionProp($iblock, $row, 'UF_INPACK', 'INPACK');
        sectionProp($iblock, $row, 'UF_VES', 'ves');
        sectionProp($iblock, $row, 'UF_RAZMOTKA_M', 'razmotka_m');
        sectionProp($iblock, $row, 'UF_KOLVO_NITEY', 'kolvo_nitey');
        sectionProp($iblock, $row, 'UF_DEEPENING', 'DEEPENING');
        if ($row['UF_VIDY_RYB']!=NULL){
            $arFilter = Array("IBLOCK_ID" => $iblock, "SECTION_ID" => $row['ID']);
            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array());
            while( $obElement = $res->GetNextElement() ) {
                $Element = $obElement->GetFields();
                $Prop = $obElement->GetProperties();
                if($Prop['vidy_ryb']['VALUE']==NULL) {
                    $arVidItem = [];
                    foreach ($row['UF_VIDY_RYB'] as $arVid) {
                        if ($arVid == 36 && !in_array($arVid, $arVidItem)) {
                            $arVidItem[] = 426;
                        }
                        if ($arVid == 37 && !in_array($arVid, $arVidItem)) {
                            $arVidItem[] = 427;
                        }
                        if ($arVid == 38 && !in_array($arVid, $arVidItem)) {
                            $arVidItem[] = 428;
                        }
                        if ($arVid == 39 && !in_array($arVid, $arVidItem)) {
                            $arVidItem[] = 429;
                        }
                        if ($arVid == 40 && !in_array($arVid, $arVidItem)) {
                            $arVidItem[] = 430;
                        }
                        if ($arVid == 41 && !in_array($arVid, $arVidItem)) {
                            $arVidItem[] = 431;
                        }
                    }
                    CIBlockElement::SetPropertyValuesEx($Element['ID'], $iblock, array('vidy_ryb' => $arVidItem));
                    $f = fopen('props_section_of_item.log', 'a');
                    fwrite($f, date('d.m.Y H:i:s') . ' Элементу ' . $Element['ID'] . ' ' . $Element['NAME'] . ' присвоен вид рыб ' . $arVidItem . "\n");
                    fclose($f);
                }
            }
        }
        if ($row['UF_TIP_PRIMANKI']!=NULL){
            $arFilter = Array("IBLOCK_ID" => $iblock, "SECTION_ID" => $row['ID']);
            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array());
            while( $obElement = $res->GetNextElement() ) {
                $Element = $obElement->GetFields();
                $Prop = $obElement->GetProperties();
                if($Prop['tip_primanki']['VALUE']==NULL) {
                    if ($row['UF_TIP_PRIMANKI'] == 42) {
                        $arTipItem = 288;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 43) {
                        $arTipItem = 290;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 44) {
                        $arTipItem = 310;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 45) {
                        $arTipItem = 311;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 46) {
                        $arTipItem = 312;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 47) {
                        $arTipItem = 315;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 48) {
                        $arTipItem = 393;
                    }
                    if ($row['UF_TIP_PRIMANKI'] == 49) {
                        $arTipItem =402;
                    }

                    CIBlockElement::SetPropertyValuesEx($Element['ID'], $iblock, array('tip_primanki' => $arTipItem));
                    $f = fopen('props_section_of_item.log', 'a');
                    fwrite($f, date('d.m.Y H:i:s') . ' Элементу ' . $Element['ID'] . ' ' . $Element['NAME'] . ' присвоен тип приманки ' . $arTipItem . "\n");
                    fclose($f);
                }
            }
        }
        if ($row['UF_BUOYANCY_TYPE']!=NULL){
            $arFilter = Array("IBLOCK_ID" => $iblock, "SECTION_ID" => $row['ID']);
            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array());
            while( $obElement = $res->GetNextElement() ) {
                $Element = $obElement->GetFields();
                $Prop = $obElement->GetProperties();
                if($Prop['BUOYANCY_TYPE']['VALUE']==NULL) {
                    if ($row['UF_BUOYANCY_TYPE'] == 33) {
                        $arTypeItem = 411;
                    }
                    if ($row['UF_BUOYANCY_TYPE'] == 34) {
                        $arTypeItem = 412;
                    }
                    if ($row['UF_BUOYANCY_TYPE'] == 35) {
                        $arTypeItem = 413;
                    }
                    CIBlockElement::SetPropertyValuesEx($Element['ID'], $iblock, array('BUOYANCY_TYPE' => $arTypeItem));
                    $f = fopen('props_section_of_item.log', 'a');
                    fwrite($f, date('d.m.Y H:i:s') . ' Элементу ' . $Element['ID'] . ' ' . $Element['NAME'] . ' присвоен тип плавучести ' . $arTypeItem . "\n");
                    fclose($f);
                }
            }
        }
        if ($row['UF_ATTRAKTANT']!=NULL){
            $arFilter = Array("IBLOCK_ID" => $iblock, "SECTION_ID" => $row['ID']);
            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array());
            while( $obElement = $res->GetNextElement() ) {
                $Element = $obElement->GetFields();
                $Prop = $obElement->GetProperties();
                if($Prop['attraktant']['VALUE']==NULL) {
                    $arAttrItem = [];
                    foreach ($row['UF_ATTRAKTANT'] as $arAttr) {

                        if ($arAttr == 22 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 291;
                        }
                        if ($arAttr == 23 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 292;
                        }
                        if ($arAttr == 24 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 293;
                        }
                        if ($arAttr == 25 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 294;
                        }
                        if ($arAttr == 26 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 314;
                        }
                        if ($arAttr == 27 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 358;
                        }
                        if ($arAttr == 28 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 434;
                        }
                        if ($arAttr == 29 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 506;
                        }
                        if ($arAttr == 30 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 507;
                        }
                        if ($arAttr == 31 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 289;
                        }
                        if ($arAttr == 82 && !in_array($arAttr, $arAttrItem)) {
                            $arAttrItem[] = 286;
                        }
                    }
                    CIBlockElement::SetPropertyValuesEx($Element['ID'], $iblock, array('attraktant' => $arAttrItem));
                    $f = fopen('props_section_of_item.log', 'a');
                    fwrite($f, date('d.m.Y H:i:s') . ' Элементу ' . $Element['ID'] . ' ' . $Element['NAME'] . ' присвоен тип плавучести ' . $arAttrItem . "\n");
                    fclose($f);
                }
            }
        }
    }
}
print "Отработал";
?>
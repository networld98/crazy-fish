<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule('iblock')) {
    $sect = CIBlockSection::GetList(Array(), Array('IBLOCK_ID' => 44),false, Array("UF_JIG"));
    while ($row = $sect->GetNext()) {
            $arFilter = Array("IBLOCK_ID" => 44, "IBLOCK_SECTION_ID" => $row['ID'], "ACTIVE" => "Y", 'GLOBAL_ACTIVE' => 'Y');
            $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
            while ($element = $res->GetNextElement()) {
                $arFields = $element->GetFields();
                    $arJigItem = [];
                    foreach ($arFields['JIG'] as $arJig) {
                        if($arJig == 16 && !in_array($arJig,$arJigItem)) {$arJigItem[] = 365;}
                        if($arJig == 17 && !in_array($arJig,$arJigItem)) {$arJigItem[] = 366;}
                        if($arJig == 18 && !in_array($arJig,$arJigItem)) {$arJigItem[] = 367;}
                        if($arJig == 19 && !in_array($arJig,$arJigItem)) {$arJigItem[] = 368;}
                        if($arJig == 20 && !in_array($arJig,$arJigItem)) {$arJigItem[] = 369;}
                        if($arJig == 21 && !in_array($arJig,$arJigItem)) {$arJigItem[] = 370;}
                    }
                    CIBlockElement::SetPropertyValuesEx($arFields['ID'], 44, array("PRIZNAK_JIG" => $arJigItem));
                    echo 'Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак <br/>';
                    $f = fopen('jig.log','a');
                    fwrite($f, date('d.m.Y H:i:s').' Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак'."\n");
                    fclose($f);
            }
        $rsParentSection = CIBlockSection::GetByID($row['ID']);
        $arSectId = [];
        if ($arParentSection = $rsParentSection->GetNext()) {
            $arFilter = array('IBLOCK_ID' => $arParentSection['IBLOCK_ID'], '>LEFT_MARGIN' => $arParentSection['LEFT_MARGIN'], '<RIGHT_MARGIN' => $arParentSection['RIGHT_MARGIN'], '>DEPTH_LEVEL' => $arParentSection['DEPTH_LEVEL']); // выберет потомков без учета активности
            $rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'), $arFilter, false, Array("UF_JIG"));
            while ($arSect = $rsSect->GetNext()) {
                if ($arSect['UF_JIG'] != NULL && !in_array($arSect['ID'],$arSectId)) {
                    $arSectId[$arSect['ID']] = array($arSect['ID'], $arSect['UF_JIG']);
                }
            }
            foreach ($arSectId as $key => $idItem) {
                $arFilter = Array("IBLOCK_ID" => 44, "IBLOCK_SECTION_ID" => $idItem[0], "ACTIVE" => "Y", 'GLOBAL_ACTIVE' => 'Y');
                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
                while ($element = $res->GetNextElement()) {
                    $arFields = $element->GetFields();
                        $arJigItem = [];
                        foreach ($arSectId[$key][1] as $arJig) {
                            if ($arJig == 16 && !in_array($arJig, $arJigItem)) {
                                $arJigItem[] = 365;
                            }
                            if ($arJig == 17 && !in_array($arJig, $arJigItem)) {
                                $arJigItem[] = 366;
                            }
                            if ($arJig == 18 && !in_array($arJig, $arJigItem)) {
                                $arJigItem[] = 367;
                            }
                            if ($arJig == 19 && !in_array($arJig, $arJigItem)) {
                                $arJigItem[] = 368;
                            }
                            if ($arJig == 20 && !in_array($arJig, $arJigItem)) {
                                $arJigItem[] = 369;
                            }
                            if ($arJig == 21 && !in_array($arJig, $arJigItem)) {
                                $arJigItem[] = 370;
                            }
                        }
                    CIBlockElement::SetPropertyValuesEx($arFields['ID'], 44, array("PRIZNAK_JIG" => $arJigItem));
                    echo 'Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак <br/>';
                    $f = fopen('jig.log','a');
                    fwrite($f, date('d.m.Y H:i:s').' Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак'."\n");
                    fclose($f);
                }
            }
        }
    }
}

?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule('iblock')) {

    $res = CIBlockSection::GetList(
        Array('name' => 'asc'),
        Array('IBLOCK_ID' => '44', 'ACTIVE' => 'Y')
    );

    $VarPropId = [];
    $res = CIBlockSection::GetList($arSort, Array('IBLOCK_ID' => 44), false, Array("UF_JIG"));
    while ($row = $res->GetNext()) {
        if ($row['UF_JIG'] != NULL) {
            foreach ($row['UF_JIG'] as $jig) {
                Cmodule::IncludeModule('iblock');
                $rsEnum = CUserFieldEnum::GetList(array(), array("ID" => $jig));
                $arEnum = $rsEnum->GetNext();
                $db_enum_list = CIBlockProperty::GetPropertyEnum("PRIZNAK_JIG", Array(), Array("IBLOCK_ID" => 44));
                while ($ar_enum_list = $db_enum_list->GetNext()) {
                    if ($ar_enum_list['EXTERNAL_ID'] == $arEnum['XML_ID']) {
                        $VarPropId[] = array('VALUE' => $ar_enum_list['ID'], 'DESCRIPTION' => $ar_enum_list['VALUE']);;
                    }
                }
            }
            $arFilter = Array("IBLOCK_ID" => 44, "IBLOCK_SECTION_ID" => $row['ID'], "ACTIVE" => "Y", 'GLOBAL_ACTIVE' => 'Y');
            $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
            while ($element = $res->GetNextElement()) {
                $arFields = $element->GetFields();
                $arProps = $element->GetProperties();
//                CIBlockElement::SetPropertyValuesEx($arFields['ID'], 44, array("PRIZNAK_JIG" => $VarPropId));
//                echo 'Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак <br/>';
//                $f = fopen('jig.log','a');
//                fwrite($f, date('d.m.Y H:i:s').' Элементу ' . $arFields['ID'] . ' ' . $arFields['NAME'] . ' присвоен признак'."\n");
//                fclose($f);
            }
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

                foreach ($arSectId as $idItem) {
                    $arFilter = Array("IBLOCK_ID" => 44, "IBLOCK_SECTION_ID" => $idItem[0], "ACTIVE" => "Y", 'GLOBAL_ACTIVE' => 'Y');
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
                    echo"<pre>";
                    print_r($idItem[0]);
                    echo"</pre>";
                    foreach ($idItem[1] as $jig) {
                        $VarPropId = [];
                        Cmodule::IncludeModule('iblock');
                        $rsEnum = CUserFieldEnum::GetList(array(), array("ID" => $jig));
                        $arEnum = $rsEnum->GetNext();
                        $db_enum_list = CIBlockProperty::GetPropertyEnum("PRIZNAK_JIG", Array(), Array("IBLOCK_ID" => 44));
                        while ($ar_enum_list = $db_enum_list->GetNext()) {
                            if ($ar_enum_list['EXTERNAL_ID'] == $arEnum['XML_ID'] && !in_array($ar_enum_list['ID'],$VarPropId)) {
                                $VarPropId[] = array('VALUE' => $ar_enum_list['ID'], 'DESCRIPTION' => $ar_enum_list['VALUE']);;
                            }
                        }
                    }
                    while ($element = $res->GetNextElement()) {
                        $arFields = $element->GetFields();
                            CIBlockElement::SetPropertyValuesEx($arFields['ID'], 44, array("PRIZNAK_JIG" => $VarPropId));
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
<?
$curPagePath = $APPLICATION->GetCurDir();
$curPagePath = explode("/", $curPagePath);
?>
<div class="col-sm-12 col-md-12 col-xs-12 smart-filter-parameters-box bx-active jig_block_filter">
    <div class="smart-filter-block" data-role="bx_filter_block">
        <div class="smart-filter-parameters-box-container">
            <div class="col">
                <a href="/catalog/forel/" class="radio <?if($curPagePath[3]==NULL){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Все</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/forel/spinning_forel/" class="radio <?if($curPagePath[3]=="spinning_forel"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Спиннинги</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/forel/coils_forel/" class="radio <?if($curPagePath[3]=="coils_forel"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Катушки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/forel/carbines_forel/" class="radio <?if($curPagePath[3]=="carbines_forel"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Карабины</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/forel/cargo_forel/" class="radio <?if($curPagePath[3]=="cargo_forel"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Грузы</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/forel/spinners_forel/" class="radio <?if($curPagePath[3]=="spinners_forel"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Блесны</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/forel/lures_forel/" class="radio <?if($curPagePath[3]=="lures_forel"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Приманки</span>
                            </span>
                    </label>
                </a>
            </div>
        </div>
    </div>
</div>
<p></p>
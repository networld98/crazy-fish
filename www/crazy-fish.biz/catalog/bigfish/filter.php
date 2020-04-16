<?
$curPagePath = $APPLICATION->GetCurDir();
$curPagePath = explode("/", $curPagePath);
?>
<div class="col-sm-12 col-md-12 col-xs-12 smart-filter-parameters-box bx-active jig_block_filter">
    <div class="smart-filter-block" data-role="bx_filter_block">
        <div class="smart-filter-parameters-box-container">
            <div class="col">
                <a href="/catalog/bigfish/" class="radio <?if($curPagePath[3]==NULL){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Все</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/bigfish/spinning_bigfish/" class="radio <?if($curPagePath[3]=="spinning_bigfish"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Спиннинги</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/bigfish/hooks_bigfish/" class="radio <?if($curPagePath[3]=="hooks_bigfish"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Крючки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/bigfish/coils_bigfish/" class="radio <?if($curPagePath[3]=="coils_bigfish"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Катушки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/bigfish/carbines_bigfish/" class="radio <?if($curPagePath[3]=="carbines_bigfish"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Карабины</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/bigfish/lures_bigfish/" class="radio <?if($curPagePath[3]=="lures_bigfish"){?>first-radio<?}?>">
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
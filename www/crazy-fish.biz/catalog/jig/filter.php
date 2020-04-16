<?
$curPagePath = $APPLICATION->GetCurDir();
$curPagePath = explode("/", $curPagePath);
?>
<div class="col-sm-12 col-md-12 col-xs-12 smart-filter-parameters-box bx-active jig_block_filter">
    <div class="smart-filter-block" data-role="bx_filter_block">
        <div class="smart-filter-parameters-box-container">
            <div class="col">
                <a href="/catalog/jig/" class="radio <?if($curPagePath[3]==NULL){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Все</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/jig/spinning_jig/" class="radio <?if($curPagePath[3]=="spinning_jig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Спиннинги</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/jig/hooks_jig/" class="radio <?if($curPagePath[3]=="hooks_jig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Крючки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/jig/coils_jig/" class="radio <?if($curPagePath[3]=="coils_jig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Катушки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/jig/carbines_jig/" class="radio <?if($curPagePath[3]=="carbines_jig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Карабины</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/jig/cargo_jig/" class="radio <?if($curPagePath[3]=="cargo_jig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Грузы</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/jig/lures_jig/" class="radio <?if($curPagePath[3]=="lures_jig"){?>first-radio<?}?>">
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
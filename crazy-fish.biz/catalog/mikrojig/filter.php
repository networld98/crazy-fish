<?
$curPagePath = $APPLICATION->GetCurDir();
$curPagePath = explode("/", $curPagePath);
?>
<div class="col-sm-12 col-md-12 col-xs-12 smart-filter-parameters-box bx-active jig_block_filter">
    <div class="smart-filter-block" data-role="bx_filter_block">
        <div class="smart-filter-parameters-box-container">
            <div class="col">
                <a href="/catalog/mikrojig/" class="radio <?if($curPagePath[3]==NULL){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Все</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/mikrojig/spinning_mikrojig/" class="radio <?if($curPagePath[3]=="spinning_mikrojig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Спиннинги</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/mikrojig/hooks_mikrojig/" class="radio <?if($curPagePath[3]=="hooks_mikrojig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Крючки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/mikrojig/coils_mikrojig/" class="radio <?if($curPagePath[3]=="coils_mikrojig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Катушки</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/mikrojig/carbines_mikrojig/" class="radio <?if($curPagePath[3]=="carbines_mikrojig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Карабины</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/mikrojig/cargo_mikrojig/" class="radio <?if($curPagePath[3]=="cargo_mikrojig"){?>first-radio<?}?>">
                    <label class="smart-filter-param-label">
                            <span class="smart-filter-input-checkbox">
                                <span class="smart-filter-param-text">Грузы</span>
                            </span>
                    </label>
                </a>
                <a href="/catalog/mikrojig/lures_mikrojig/" class="radio <?if($curPagePath[3]=="lures_mikrojig"){?>first-radio<?}?>">
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
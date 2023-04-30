{extends file="indexView.tpl"}

{block name=main}
<div class="wrapper style1">
    <div class="container">
        <div class="row gtr-uniform gtr-50">  
            <div class="col-3">
                <h4>Opcje wyszukiwania</h4>
                <form id="search-form" class="searchForm" onsubmit="ajaxPostForm('search-form','{$conf->action_root}personListPart','table'); return false;">
                    <label for="nazwisko"><input type="text" name="sf_nazwisko" id="nazwisko" value="{$searchForm->nazwisko}"></label>
                    <label for="button"><button type="submit" class="button small">Filtruj</button></label>
                </form>
            </div>
            <div class="col-12">
                <div id="table">
                    {include file="PersonListTable.tpl"}  
                </div>
            </div>
        </div>
    </div>
</div>
{/block}

{block name=content}
{/block}

{extends file="indexView.tpl"}

{block name=main}
<div class="wrapper style1">
    <div class="container">
        <form id="search-form" class="searchForm">
        <div class="row gtr-uniform gtr-50">  
            <div class="col-3">
                <h4>Opcje wyszukiwania</h4>
                <input type="text" name="sf_nazwisko" id="nazwisko" value="{$searchForm->nazwisko}" value placeholder="Nazwisko">
            </div>
            <div class="col-12">
            <button type="submit" class="button small">Filtruj</button>
            </div>
            <div class="col-12">
        {include file="PersonListTable.tpl"}  
            </div>
        </div>
        </form>
    </div>
</div>
{/block}

{block name=content}
{/block}

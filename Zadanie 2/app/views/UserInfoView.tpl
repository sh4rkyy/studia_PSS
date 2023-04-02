{extends file="indexView.tpl"}

{block name=main}
<section class="wrapper style1 special fade-up">
<div class="container">
<table class="table-wrapper">
<thead>
	<tr>
		<th>Imie</th>
		<th>Nazwisko</th>
		<th>Numer telefonu</th>
		<th>Pesel</th>
		<th>Karnet</th>
		<th>Opcje</th>
	</tr>
</thead>
<tbody>
{foreach $uzytkownicy as $p}
{strip}
	<tr>
	{if $p["aktywny"] == 1}
		<td>{$p["imie"]}</td>
		<td>{$p["nazwisko"]}</td>
		<td>{$p["nr_tel"]}</td>
		<td>{$p["pesel"]}</td>
		<td>
		{if $p["Nazwa_karnetu"] != ""}
		{$p["Nazwa_karnetu"]}
		</br>
		Od: {$p["Data_rozpoczecia"]}
		</br>
		Do: {$p["Data_zakonczenia"]}
		{else}
		<a href="{$conf->action_root}karnet" class="button small">Kup karnet</a>		
		{/if}
		</td>
		<td>
			<a href="{$conf->action_url}personEdit/{$p['id_uzytkownika']}" class="button small">Edytuj</a>
			&nbsp;
		</td>
	{/if}
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{if {$rola} == "pracownik"}
    <h4>PANEL PRACOWNIKA:</h4>
    <a href="{$conf->action_url}personList" class="button primary">Lista uzytkowników</a>
{/if}
</div>
</section>
{/block}

{block name=content}
{/block}
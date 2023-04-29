<table class="table-wrapper">
<thead>
	<tr>
		<th>Imie</th>
		<th>Nazwisko</th>
		<th>Numer telefonu</th>
		<th>Pesel</th>
		<th>Karnet</th>
                <th>Aktywny</th>
		<th>Opcje</th>
	</tr>
</thead>
<tbody>
{foreach $uzytkownicy as $p}
{strip}
	<tr>
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
		<p>Karnet nieaktywny</p>	
		{/if}
		</td>
		{if {$p["aktywny"]} == 1}
			<td>Tak</td>
		{else}
			<td>Nie</td>
		{/if}
		<td>
			<a class="button small" href="{$conf->action_url}personEdit/{$p['id_uzytkownika']}">Edytuj</a>
			&nbsp;
			{if {$p["aktywny"]} == 1}
			<a class="button primary small" href="{$conf->action_url}personDeactive/{$p['id_uzytkownika']}">Dezaktywuj</a>
			{else}
			<a class="button primary small" href="{$conf->action_url}personActivate/{$p['id_uzytkownika']}">Aktywuj</a>
			{/if}
		</td>
	</tr>
{/strip}
{/foreach} 
</tbody>
</table>
<form action="{$conf->action_root}personList" method="post">
{if {$numberOfRecords} <= 5}
<a class="button small" href="#">Poprzednia</a>
<a class="button small" href="#">Następna</a>
{else if {$page} == '' || {$page} == 0}
<a class="button small" href="{$conf->action_url}personList?page={$page+1}">Następna</a>
{else if {$lastPage-1} == {$page}}
<a class="button small" href="{$conf->action_url}personList?page={$page-1}">Poprzednia</a>
<a class="button small" href="">Następna</a>
{else}
<a class="button small" href="{$conf->action_url}personList?page={$page-1}">Poprzednia</a>
<a class="button small" href="{$conf->action_url}personList?page={$page+1}">Następna</a>
{/if}
</form>

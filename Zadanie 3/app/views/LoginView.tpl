{extends file="indexView.tpl"}

{block name=main}
    <div class="wrapper style1">
	<div class="container">
            <header class="major">
		<h2>Logowanie</h2>
		<p>Zaloguj się, lub zarejestruj nowe konto.</p>
            </header>
            <form action="{$conf->action_root}login" method="post" class="loginForm">
            <div class="row gtr-uniform gtr-50">
                <div class="col-12">
                    <label for="id_login" class="form-label">Login: </label>
                    <input type="text" class="form-control" id="id_login" name="login" value="{$form->login}">
                </div>
                <div class="col-12">
                    <label for="id_pass" class="form-label">Hasło: </label>
                    <input type="password" class="form-control" id="id_pass" name="pass">
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="button primary"/></button></li>
                        <li><a href="{$conf->action_root}register" class="button">Rejestracja</a></li>
                    </ul>
                </div>
            </div>
            </form> 
        </div>
    </div>
{/block}
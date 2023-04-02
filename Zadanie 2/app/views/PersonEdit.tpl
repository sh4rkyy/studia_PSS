{extends file="indexView.tpl"}

{block name=main}
    <div class="wrapper style1">
	<div class="container">
        <form action="{$conf->action_root}personSave" method="post">
            <div class="row gtr-uniform gtr-50">   
                
                <div class="col-6">
                    Imie:
                    <input type="text" id="imie" name="imie" value="{$form->imie}">
                </div>
                
                <div class="col-6 col-12-xsmall">
                    Nazwisko:
                    <input type="text" id="nazwisko" name="nazwisko" value="{$form->nazwisko}">
                </div>
                
                <div class="col-6 col-12-xsmall">
                    Numer telefonu:
                    <input type="text" id="nrtel" name="nrtel" value="{$form->nrtel}">
                </div>

                <div class="col-6 col-12-xsmall">
                    PESEL:
                    <input type="text" id="pesel" name="pesel" value="{$form->pesel}">
                </div>
                
                <div class="col-12">
                    Login:
                    <input type="text" id="login" name="login" value="{$form->login}">
                </div>
                
                <div class="col-6 col-12-xsmall">
                    Hasło:
                    <input type="password" id="id_pass" name="pass" value="{$form->pass}">
                </div>
                
                <div class="col-6 col-12-xsmall">
                    Powtórz Hasło:
                    <input type="password" id="id_pass" name="pass_repeat" value="{$form->pass_repeat}">
                </div>
                
                <div class="col-12">
                    <ul class="actions">
                    <li><input type="submit" value="Zapisz zmiany" class="button primary"/></button></li>
                    <input type="hidden" name="id" value="{$form->id}">
                    {if $rola == "pracownik"}
                        <li><a href="{$conf->action_root}personList" class="button" >Powrót</a></li>
{else}
<li><a href="{$conf->action_root}userInfo" class="button" >Powrót</a></li>
{/if}
                    </ul>
                </div> 
            </div> 
        </form>
        </div>
    </div>
{/block}

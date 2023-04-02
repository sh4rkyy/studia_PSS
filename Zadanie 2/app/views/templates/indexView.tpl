<!DOCTYPE html>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">
    <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="author" content="Dawid Chowaniec">
	<meta name="description" content="Siłownia Sharks">
	<title>Silownia - Sharks</title>
	<link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" /></noscript>
    </head>
    <body class ='landing'>
        <div id='page-wrapper'>
            <header id ='header'>
                <h1 id='logo'>
                    <a href='{$conf->app_url}'>Sharks</a>
                </h1> 
                <nav id='nav'>
                <ul>
                    <li style='white-space: nowrap;'><a href="{$conf->app_url}">Strona główna</a></li>
                    <li style='white-space: nowrap;'><a href="{$conf->app_url}#onas">O nas</a></li>
                    <li style='white-space: nowrap;'><a href="{$conf->app_url}#cennik">Cennik</a></li>
                    <li style='white-space: nowrap;'><a href="{$conf->app_url}#kontakt">Kontakt</a></li>
                    
                    {if count($conf->roles)>0}
                    <li><a href="{$conf->action_root}userInfo">Profil</a></li>
                    <li><a href="{$conf->action_root}logout" class="button primary">Wyloguj</a></li>
                    {else}	
                    <li><a href="{$conf->action_root}login" class="button primary">Zaloguj</a></li>
                    {/if}
                </ul>
		</nav>
            </header>
            
            {block name=main} {/block}
        </div>
        
        {block name=messages}
        {if $msgs->isMessage()}
        <div>
            <ul>
            {foreach $msgs->getMessages() as $msg}
            {strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
            {/strip}
            {/foreach}
            </ul>
        </div>
    {/if}
    {/block}

    {block name=content} {/block}
	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.scrolly.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.dropotron.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.scrollex.min.js"></script>
	<script src="{$conf->app_url}/js/browser.min.js"></script>
	<script src="{$conf->app_url}/js/breakpoints.min.js"></script>
	<script src="{$conf->app_url}/js/util.js"></script>
	<script src="{$conf->app_url}/js/main.js"></script>
    </body>
</html>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		{*<link rel="shortcut icon" href="{$smarty.const.IMG_PATH}favicon.ico" type="image/x-icon">*}
		<meta name="description" content="Respect - Base v:1.0" />

		<title>Respect - Base v:1.0</title>

		{block name="css"}{/block}

		<link rel="stylesheet" type="text/css" href="{$smarty.const.CSS_PATH}style.css" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,500' rel='stylesheet' type='text/css'>
		<!--[if IE 8]><link rel="stylesheet" type="text/css" href="{$smarty.const.CSS_PATH}ie8.css" /><![endif]-->
		{*<link rel="canonical" href="" />*}
	</head>
	<body>

		<header>
			{block name="header"}
				{include "../template/header.tpl"}
			{/block}
		</header>

		<section>
			{block name="content"}{/block}
		</section>

		<footer>
			{block name="footer"}
				{include "../template/footer.tpl"}
			{/block}
		</footer>

		{*<script type="text/javascript" src="{$smarty.const.JS_PATH}jquery/jquery-1.11.1.min.js" defer></script>
		<script type="text/javascript" src="{$smarty.const.JS_PATH}main.min.js" defer></script>*}

		{block name="js"}{/block}

	</body>

</html>
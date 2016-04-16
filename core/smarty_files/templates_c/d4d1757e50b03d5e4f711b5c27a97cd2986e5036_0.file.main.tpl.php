<?php
/* Smarty version 3.1.29, created on 2016-04-16 18:57:55
  from "/var/www/html/apis3/api-blizzard/application/view/template/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57128b330fb509_67202687',
  'file_dependency' => 
  array (
    'd4d1757e50b03d5e4f711b5c27a97cd2986e5036' => 
    array (
      0 => '/var/www/html/apis3/api-blizzard/application/view/template/main.tpl',
      1 => 1460827679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_57128b330fb509_67202687 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		
		<meta name="description" content="Respect - Base v:1.0" />

		<title>Respect - Base v:1.0</title>

		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_35219129057128b330dcab3_72011912',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


		<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_PATH');?>
style.css" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,500' rel='stylesheet' type='text/css'>
		<!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_PATH');?>
ie8.css" /><![endif]-->
		
	</head>
	<body>

		<header>
			<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_138331005457128b330effd9_49438601',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</header>

		<section>
			<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_51892660857128b330f3c09_84922934',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</section>

		<footer>
			<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_83014435057128b330f5847_94900517',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</footer>

		

		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_44747261457128b330f8de3_15273889',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


	</body>

</html><?php }
/* {block 'css'}  file:../main.tpl */
function block_35219129057128b330dcab3_72011912($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'css'} */
/* {block 'header'}  file:../main.tpl */
function block_138331005457128b330effd9_49438601($_smarty_tpl, $_blockParentStack) {
?>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php
}
/* {/block 'header'} */
/* {block 'content'}  file:../main.tpl */
function block_51892660857128b330f3c09_84922934($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:../main.tpl */
function block_83014435057128b330f5847_94900517($_smarty_tpl, $_blockParentStack) {
?>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php
}
/* {/block 'footer'} */
/* {block 'js'}  file:../main.tpl */
function block_44747261457128b330f8de3_15273889($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'js'} */
}

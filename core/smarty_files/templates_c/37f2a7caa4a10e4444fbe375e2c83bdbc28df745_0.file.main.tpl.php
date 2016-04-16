<?php
/* Smarty version 3.1.29, created on 2016-04-08 23:14:51
  from "C:\xampp\htdocs\respect-base\application\view\template\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57081f4b2f8760_26823282',
  'file_dependency' => 
  array (
    '37f2a7caa4a10e4444fbe375e2c83bdbc28df745' => 
    array (
      0 => 'C:\\xampp\\htdocs\\respect-base\\application\\view\\template\\main.tpl',
      1 => 1460150061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_57081f4b2f8760_26823282 ($_smarty_tpl) {
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
  0 => 'block_2321957081f4b1f7a43_15663309',
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
  0 => 'block_2264057081f4b24ec40_59230204',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</header>

		<section>
			<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_3069757081f4b289027_29368550',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</section>

		<footer>
			<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_1547057081f4b2a8608_46848280',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</footer>

		

		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_2843157081f4b2e1502_74910942',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


	</body>

</html><?php }
/* {block 'css'}  file:../../template/main.tpl */
function block_2321957081f4b1f7a43_15663309($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'css'} */
/* {block 'header'}  file:../../template/main.tpl */
function block_2264057081f4b24ec40_59230204($_smarty_tpl, $_blockParentStack) {
?>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php
}
/* {/block 'header'} */
/* {block 'content'}  file:../../template/main.tpl */
function block_3069757081f4b289027_29368550($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:../../template/main.tpl */
function block_1547057081f4b2a8608_46848280($_smarty_tpl, $_blockParentStack) {
?>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php
}
/* {/block 'footer'} */
/* {block 'js'}  file:../../template/main.tpl */
function block_2843157081f4b2e1502_74910942($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'js'} */
}

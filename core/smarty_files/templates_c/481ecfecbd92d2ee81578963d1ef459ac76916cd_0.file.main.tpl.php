<?php
/* Smarty version 3.1.29, created on 2016-04-11 20:16:18
  from "C:\xampp\htdocs\respect-base\application\view\template\default\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570be9f2109a19_85506088',
  'file_dependency' => 
  array (
    '481ecfecbd92d2ee81578963d1ef459ac76916cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\respect-base\\application\\view\\template\\default\\main.tpl',
      1 => 1460398567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../main.tpl' => 1,
  ),
),false)) {
function content_570be9f2109a19_85506088 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_16983570be9f20b2f77_39606918',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:default/main.tpl */
function block_16983570be9f20b2f77_39606918($_smarty_tpl, $_blockParentStack) {
?>

	<label for="id">
		<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>

	</label>
	<br>
	<label for="nome">
		<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nome'];?>

	</label>
	<br>
	<label for="idade">
		<?php echo $_smarty_tpl->tpl_vars['usuario']->value['idade'];?>

	</label>
<?php
}
/* {/block 'content'} */
}

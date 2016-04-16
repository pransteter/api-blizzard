<?php
/* Smarty version 3.1.29, created on 2016-04-08 22:50:38
  from "C:\xampp\htdocs\respect-base\application\view\modules\default\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5708199e918988_45177208',
  'file_dependency' => 
  array (
    '69e965e94a5c2e5668551d02c0831c9a94916e2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\respect-base\\application\\view\\modules\\default\\main.tpl',
      1 => 1460148627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../template/main.tpl' => 1,
  ),
),false)) {
function content_5708199e918988_45177208 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_54895708199e8bdcf7_32533151',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../template/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:default/main.tpl */
function block_54895708199e8bdcf7_32533151($_smarty_tpl, $_blockParentStack) {
?>

	<label for="id">
		ID: <?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>

	</label>
	<br>
	<label for="nome">
		Nome: <?php echo $_smarty_tpl->tpl_vars['usuario']->value->name;?>

	</label>
	<br>
	<label for="idade">
		Idade: <?php echo $_smarty_tpl->tpl_vars['usuario']->value->age;?>

	</label>
<?php
}
/* {/block 'content'} */
}

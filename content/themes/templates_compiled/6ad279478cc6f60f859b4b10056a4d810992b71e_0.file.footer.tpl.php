<?php
/* Smarty version 3.1.38, created on 2021-02-22 21:11:37
  from 'D:\xampp\htdocs\since.cl\public\content\themes\templates\header_footer\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60341e09ee65f8_22695931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad279478cc6f60f859b4b10056a4d810992b71e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since.cl\\public\\content\\themes\\templates\\header_footer\\footer.tpl',
      1 => 1614028294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_footer/_templates.tpl' => 1,
  ),
),false)) {
function content_60341e09ee65f8_22695931 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['compilado'];?>
tsubit.min.js?v=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
"><?php echo '</script'; ?>
><?php $_smarty_tpl->_subTemplateRender("file:header_footer/_templates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

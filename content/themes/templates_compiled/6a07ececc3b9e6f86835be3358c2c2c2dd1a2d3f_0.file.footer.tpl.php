<?php
/* Smarty version 3.1.38, created on 2021-03-02 20:43:58
  from 'D:\xampp\htdocs\since\public\content\themes\templates\header_footer\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603ea38e6c5d67_84704038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a07ececc3b9e6f86835be3358c2c2c2dd1a2d3f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since\\public\\content\\themes\\templates\\header_footer\\footer.tpl',
      1 => 1614717796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_footer/_templates.tpl' => 1,
  ),
),false)) {
function content_603ea38e6c5d67_84704038 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['compilado'];?>
tsubit.min.js?v=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
"><?php echo '</script'; ?>
><?php $_smarty_tpl->_subTemplateRender("file:header_footer/_templates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

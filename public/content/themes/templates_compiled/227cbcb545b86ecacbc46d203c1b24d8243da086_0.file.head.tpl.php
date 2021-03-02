<?php
/* Smarty version 3.1.38, created on 2021-02-22 22:31:38
  from 'D:\xampp\htdocs\since.cl\public\content\themes\templates\header_footer\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603430ca6476e7_37326682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227cbcb545b86ecacbc46d203c1b24d8243da086' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since.cl\\public\\content\\themes\\templates\\header_footer\\head.tpl',
      1 => 1614032887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603430ca6476e7_37326682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\since.cl\\public\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
">
    
<head>

    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
    <meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

    <!-- Title -->
    <title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
">
    <!-- Meta -->

    <?php echo '<script'; ?>
>var site_title = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
";var site_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
";var ajax_path = site_path+"/includes/ajax/";var secret = "<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
";var api = [];<?php echo '</script'; ?>
><?php echo '<script'; ?>
>/* i18n for JS */var __ = [];__['Cargando'] = "<?php echo __('Cargando');?>
";__['Error'] = "<?php echo __('Error');?>
";__['¡Hay algo que salió mal!'] = "<?php echo __('¡Hay algo que salió mal!');?>
";<?php echo '</script'; ?>
>

</head><?php }
}

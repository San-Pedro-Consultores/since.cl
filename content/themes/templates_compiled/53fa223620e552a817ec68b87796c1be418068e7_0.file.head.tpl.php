<?php
/* Smarty version 3.1.38, created on 2021-03-02 20:44:57
  from 'D:\xampp\htdocs\since\public\content\themes\templates\header_footer\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603ea3c9a85023_84067404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53fa223620e552a817ec68b87796c1be418068e7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since\\public\\content\\themes\\templates\\header_footer\\head.tpl',
      1 => 1614717895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603ea3c9a85023_84067404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\since\\public\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['compilado'];?>
tsubit.min.css?v=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

</head>
<div id="tsubit" class="containMain"><?php }
}

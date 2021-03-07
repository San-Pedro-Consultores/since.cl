<?php
/* Smarty version 3.1.38, created on 2021-03-07 01:56:34
  from 'D:\xampp\htdocs\since\public\content\themes\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604432d2927025_15147271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd027f96c61c4aaacf725311586d757199d9ae86' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since\\public\\content\\themes\\templates\\index.tpl',
      1 => 1615082131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_footer/head.tpl' => 1,
    'file:componenetes/header.tpl' => 1,
    'file:componenetes/bloque_tipo_usuario.tpl' => 1,
    'file:componenetes/bloque_resultado_since.tpl' => 1,
    'file:componenetes/pie_pagina.tpl' => 1,
    'file:header_footer/footer.tpl' => 1,
    'file:script_vuejs/index.tpl' => 1,
  ),
),false)) {
function content_604432d2927025_15147271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_footer/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:componenetes/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section v-if="errored">
    <p>Lo sentimos, no es posible obtener la información en este momento, por favor intente nuevamente mas tarde</p>
</section>

<div class="container-fluid" v-else><!-- Panel Cuerpo-->
    <div v-if="loading">Cargando...</div>
    <!--Información interna de la vista-->
    <div class="container"v-else><!--Contenedor Interno-->

        <?php $_smarty_tpl->_subTemplateRender("file:componenetes/bloque_tipo_usuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:componenetes/bloque_resultado_since.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div><!--Contenedor Interno-->
    <!--Información interna de la vista-->
</div><!-- Panel Cuerpo-->

<?php $_smarty_tpl->_subTemplateRender('file:componenetes/pie_pagina.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:header_footer/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:script_vuejs/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

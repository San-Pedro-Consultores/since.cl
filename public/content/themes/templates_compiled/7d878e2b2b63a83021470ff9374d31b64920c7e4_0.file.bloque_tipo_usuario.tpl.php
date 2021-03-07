<?php
/* Smarty version 3.1.38, created on 2021-03-07 01:54:13
  from 'D:\xampp\htdocs\since\public\content\themes\templates\componenetes\bloque_tipo_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60443245abe481_85524261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d878e2b2b63a83021470ff9374d31b64920c7e4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since\\public\\content\\themes\\templates\\componenetes\\bloque_tipo_usuario.tpl',
      1 => 1615082028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60443245abe481_85524261 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="usertype row"><!--Bloque Tipo de Usuario-->
    <div class="col-sm-2 offset-sm-1">
        <a href="">
            <span class="icon-profile"></span>
            <span>DIRECTORES</span>
        </a>
    </div>
    <div class="col-sm-9">
        <div class="row">
            <h3>Resultados Educativos 2019</h3>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <span class="label1">Establecimiento</span>
                <span class="label1">Dependencia</span>
                <span class="label1">Director</span>
                <span class="label1">Comuna</span>
                <span class="label1">Región</span>
            </div>
            <div class="col-sm-9">
                <span class="label1">{{ info.dl_nombre }}</span>
                <span class="label1">{{ info.dl_comuna }}</span>
                <span class="label1">{{ info.dl_comuna }}</span>
                <span class="label1">{{ info.dl_comuna }}</span>
                <span class="label1">{{ info.dl_region }}</span>
            </div>
        </div>
    </div>
</div><!--Bloque Tipo de Usuario--><?php }
}

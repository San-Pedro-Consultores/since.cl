<?php
/* Smarty version 3.1.38, created on 2021-02-22 21:13:03
  from 'D:\xampp\htdocs\since.cl\public\content\themes\templates\header_footer\_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60341e5f10b385_58236282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead6551748a2c51dab9d9d43fd1795a6dc7d5468' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since.cl\\public\\content\\themes\\templates\\header_footer\\_templates.tpl',
      1 => 1614028332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60341e5f10b385_58236282 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modals -->
<div id="modal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="loader pt10 pb10"></div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 id="modal-message" type="text/template">
    <div class="modal-body">
        <p>{{message}}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo __("Cerrar");?>
</button>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-success" type="text/template">
    <div class="modal-body text-center">
        <h4>{{title}}</h4>
        <p class="mt20">{{message}}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo __("Cerrar");?>
</button>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-error" type="text/template">
    <div class="modal-body text-center">
        <h4>{{title}}</h4>
        <p class="mt20">{{message}}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo __("Cerrar");?>
</button>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-loading" type="text/template">
    <div class="modal-body text-center">
        <div class="spinner-border text-primary"></div>
    </div>
<?php echo '</script'; ?>
>
<!-- Modals --><?php }
}

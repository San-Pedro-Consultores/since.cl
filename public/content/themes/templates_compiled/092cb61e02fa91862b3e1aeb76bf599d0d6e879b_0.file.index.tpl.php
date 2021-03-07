<?php
/* Smarty version 3.1.38, created on 2021-03-07 23:09:06
  from 'D:\xampp\htdocs\since\public\content\themes\templates\script_vuejs\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60455d12791a01_49532933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092cb61e02fa91862b3e1aeb76bf599d0d6e879b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\since\\public\\content\\themes\\templates\\script_vuejs\\index.tpl',
      1 => 1615158345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60455d12791a01_49532933 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

var fecha = "<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
";
var archivo = "<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
";

var vm = new Vue({
    el: '#tsubit',
    data () {
        return {
            info: null,
            loading: true,
            errored: false
        }
    },
    mounted () {
        axios
        .get('https://www.simce.cl/ficha2019/jsonSimce/ficha-521_fc45d51fd1e7d6711e0c45e552e2a0e2.json')
        //.get('https://www.simce.cl/ficha'+ fecha +'/' + archivo)
        .then(response => {
            this.info = response.data.valores
        })
        .catch(error => {
            console.log(error)
            this.errored = true
        })
        .finally(() => this.loading = false)
    }
});    

<?php echo '</script'; ?>
><?php }
}

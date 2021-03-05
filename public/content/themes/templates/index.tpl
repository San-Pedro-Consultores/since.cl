{include file='header_footer/head.tpl'}
{include file='componenetes/header.tpl'}

<ul v-for="puntaje of puntajes">
    <li>{{puntajes.nombre}}</li>
    <li>{{puntajes.dato}}</li>
    <li>{{informe_visita.nombre}}</li>
    <li>{{informe_visita.dato}}</li>
</ul>

{include file='componenetes/pie_pagina.tpl'}
{include file='header_footer/footer.tpl'}
{include file='script_vuejs/index.tpl'}
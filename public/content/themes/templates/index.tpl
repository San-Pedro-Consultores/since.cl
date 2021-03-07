{include file='header_footer/head.tpl'}
{include file='componenetes/header.tpl'}

<section v-if="errored">
    <p>Lo sentimos, no es posible obtener la información en este momento, por favor intente nuevamente mas tarde</p>
</section>

<div class="container-fluid" v-else><!-- Panel Cuerpo-->
    <div v-if="loading">Cargando...</div>
    <!--Información interna de la vista-->
    <div class="container"v-else><!--Contenedor Interno-->

        {include file="componenetes/bloque_tipo_usuario.tpl"}
        {include file="componenetes/bloque_resultado_since.tpl"}

    </div><!--Contenedor Interno-->
    <!--Información interna de la vista-->
</div><!-- Panel Cuerpo-->

{include file='componenetes/pie_pagina.tpl'}
{include file='header_footer/footer.tpl'}
{include file='script_vuejs/index.tpl'}
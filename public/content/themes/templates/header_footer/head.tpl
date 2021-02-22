<!doctype html>
<html lang="{$system['language']['code']}">
    
<head>

    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="{$system['system_title']}">
    <meta name="version" content="{$system['system_version']}">

    <!-- Title -->
    <title>{$page_title|truncate:70}</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="{$page_description|truncate:300}">
    <meta name="keywords" content="{$system['system_keywords']}">
    <!-- Meta -->

    {strip}

    <script>
        var site_title = "{$system['system_title']}";
        var site_path = "{$system['system_url']}";
        var ajax_path = site_path+"/includes/ajax/";
        var secret = "{$secret}";
        var api = [];
    </script>

    <script>
    /* i18n for JS */
    var __ = [];
    __['Cargando'] = "{__('Cargando')}";
    __['Error'] = "{__('Error')}";
    __['¡Hay algo que salió mal!'] = "{__('¡Hay algo que salió mal!')}";
    </script>
    
    {/strip}

</head>
<?php

function w_head($title, $description)
{
    echo "<!DOCTYPE html>
    <html lang='pl' class='layout__full'>

    <head>
    <meta charset='utf-8'/>

    <title>" . $title . "</title>
    <meta name='description'
          content=\"" . $description . "\"/>

    <meta name='format-detection' content='telephone=no'/>
    <meta name='viewport' content='width=device-width,user-scalable=no,initial-scale = 1.0'/>
    <meta name='apple-mobile-web-app-capable' content='yes'/>

    <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'/>

    <link href='css/vendor/normalize-2.1.3.css' rel='stylesheet' media='all'/>
    <link href='css/app.css' rel='stylesheet' media='all'/>

    <!--[if lt IE 9]>
    <script type='text/javascript' src='js/ie8/html5.js'></script>
    <![endif]-->

    <script type='text/javascript' src='js/vendor/lithium-0.0.3.js'></script>

</head>";
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bedrock Analytics helps CPG manufacturers leverage the power of data-driven analytics to deliver convincing stories to big retailers">
    <meta name="keywords" content="Data Analytics and Visualization Platform for the CPG Industry, Cloud Software for CPG Analytics, Bedrock Analytics, Bedrock Analytics Corporation, Consumer Product Goods, bedrockanalytics">
    <title><?php bloginfo('name') ?></title>

   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/bedrock.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

    <!-- 041917 START -->
        <!-- Stylesheet start -->
        <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php bloginfo('template_directory'); ?>/css/landing.css" type="text/css" rel="stylesheet" />   
        <link href="<?php bloginfo('template_directory'); ?>/css/landing-media.css" type="text/css" rel="stylesheet" /> 
        <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-datetimepicker.css" type="text/css" rel="stylesheet" />
        <!-- Stylesheet end --> 

        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="<?php bloginfo('template_directory'); ?>/js/moment-with-locales.js" type="text/javascript"></script>  
        <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/landing-custom.js" type="text/javascript"></script>
    <!-- 041917 START -->
    <?php wp_head(); ?>

</head>


<body class="front"> 
<!--        
< xx ? php print_r($_REQUEST);      
echo 'is_ssl: '.is_ssl()."\n";      
foreach ($_SERVER as $key => $value) {      
    if (strpos($key, 'HTTP_') === 0) {      
        $chunks = explode('_', $key);       
        $header = '';       
        for ($i = 1; $y = sizeof($chunks) - 1, $i < $y; $i++) {     
            $header .= ucfirst(strtolower($chunks[$i])).'-';        
        }       
        $header .= ucfirst(strtolower($chunks[$i])).': '.$value;        
        echo $header."\n";      
    }       
}       
 ? xx >     
-->

<!-- <div id="main"> -->
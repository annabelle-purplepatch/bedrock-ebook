<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name') ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/bedrock.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/ebook-style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/sticky-ebook.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
    

    <script>
        var wow = new WOW(
            {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       0,          // distance to the element when triggering the animation (default is 0)
                mobile:       false       // trigger animations on mobile devices (true is default)
            }
        );
        wow.init();
    </script>

    <?php wp_head(); ?>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/bedrock-logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <?php wp_nav_menu( array('menu_class' => 'nav navbar-nav pull-right', 'theme_location' => 'primary', 'container' => false )); ?>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>

<!-- <div id="main"> -->
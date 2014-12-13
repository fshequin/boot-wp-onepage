<!DOCTYPE html>
<html>
<?php wp_head(); ?>
  <head>
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicons -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>> 
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><i class="fa fa-wordpress"></i> <?php bloginfo('name'); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <?php
              
                         $menu_1_args = array(
                              'theme_location'  => 'main_menu',
                              'menu'            => 'main_menu',
                              'container'       => '',
                              'container_class' => '',
                              'container_id'    => '',
                              'menu_class'      => 'nav navbar-nav navbar-right',
                              'menu_id'         => '',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'before'          => '',
                              'after'           => '',
                              'link_before'     => '',
                              'link_after'      => '<span class="vertical-divider hidden-xs"></span>',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s" style="list-style-type: none;">%3$s</ul>',
                              'depth'           => 0,
                              'walker'          => new wp_bootstrap_navwalker()
                         );
                        
                         wp_nav_menu( $menu_1_args );
              
               ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
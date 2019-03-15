<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>The Barking Lot - Auto Dealership</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$carshop_classes = array( 'carshop-class','my-class' );
    else:
			$carshop_classes = array( 'no-carshop-class' );
		endif;
	?>

	<body <?php body_class( $carshop_classes ); ?>>

    <div class="container">

    <div class="row">

      <div class="col-xs-12">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<!-- failed attempt at a nav logo -->
							<!--	<a class="navbar-brand" href="#"><img alt="#" src="img/Transport-Car-icon.png"></a> -->
								<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://localhost:8888/">The Barking Lot</a>
            </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right'
                )
              );
            ?>
          </div>
          </div><!-- /.container-fluid -->
        </nav>

      </div>

    </div>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

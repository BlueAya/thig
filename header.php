<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <!-- Source Sans Pro Google Font - Replace Playfair -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Open Sans Google Font - Use for everything else -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Playfair Display Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="
	        <?php bloginfo('stylesheet_url'); ?>
	    " />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="pushobj" class="container-fluid"> <!-- Begin Fluid Container Div -->
      <div id="menu">
        <nav id="multilevelpushmenu">
          <h2><i class="fa fa-reorder"></i>Tower Hill Insurance</h2>
          <ul>
              <li>
                  <a href="#"><i class="fa fa-laptop"></i>Our Company</a>
                  <h2><i class="fa fa-laptop"></i>Our Company</h2>
                  <ul>
                      <li>
                          <a href="#"><i class="fa fa-phone"></i>History</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-phone"></i>Companies</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-phone"></i>Careers</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-phone"></i>Recent News</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-phone"></i>Media</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-phone"></i>Reviews</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#"><i class="fa fa-book"></i>Products</a>
                  <h2><i class="fa fa-book"></i>Products</h2>
                  <ul>
                      <li>
                          <a href="#">Personal Coverage</a>
                      </li>
                      <li>
                          <a href="#">Commercial Coverage</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#"><i class="fa fa-shopping-cart"></i>Resources</a>
                  <h2><i class="fa fa-shopping-cart"></i>Resources</h2>
                  <ul>
                      <li>
                          <a href="#">Claims</a>
                      </li>
                      <li>
                          <a href="#">Learning Center</a>
                      </li>
                      <li>
                          <a href="#">Storm Center</a>
                      </li>
                      <li>
                          <a href="#">FAQs</a>
                      </li>
                      <li>
                          <a href="#">Find an Agent</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="http://www.rebeccaschoenrock.com/thig/contact/">Contact Us</a>
              </li>
              <li>
                  <a href="#">Customer Login</a>
              </li>
              <li>
                  <a href="#">Agent Login</a>
              </li>
          </ul>
        </nav>
      </div>
        <header class="row">
            <div class="col-md-12 globalmenu"> <!-- Global Nav -->
                <!--h1><a href="<!?php $url = home_url('/'); echo $url; ?>"><!?php bloginfo('name'); ?></a></h1-->
			          <div class="header-search"><?php get_search_form(); ?>
					      <?php wp_nav_menu( array( 'theme_location' => 'global-menu' ) ); ?>
				    </div>
            </div>

			<div class="col-md-7 pull-right">
			  <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
			</div>
    			  <div class="col-md-5 topmenu">


                <a href="http://www.rebeccaschoenrock.com/thig/">
                    <img class="main-logo" src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/TH-Horiz-4c-Stacked.png" width="260px" alt="Tower Hill Insurance Group" />
                </a>
    			  </div>
				  <!-- Breadcrumbs Code -->

				  <?php if(!is_front_page()){ ?>
					    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					        <?php if(function_exists('bcn_display'))
					        {
					            bcn_display();
					        }?>
					    </div>
				  <?php } ?>
		    </header>

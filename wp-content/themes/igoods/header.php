<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">


		<div class="col-full">
			<!--
			<a class="skip-link screen-reader-text" href="#site-navigation"><?php esc_attr_e( 'Skip to navigation', 'igoods' ); ?></a>
			<a class="skip-link screen-reader-text" href="#content"><?php esc_attr_e( 'Skip to content', 'igoods' ); ?></a>
			<div class="site-branding">
				<?php igoods_site_title_or_logo(); ?>
			</div>

			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>	

			<?php storefront_header_cart() ?>
			-->
			<div class="col-25">
				<?php igoods_site_title_or_logo(); ?>
			</div>
			<div class="col-50">
				<div class="box">
					<form>
						<input type="text" name="" placeholder="" size="35">
						<button type="submit" name="">Search</button>
					</form>
				</div>
				<!--
			  <div class="search-container">
			    <form action="/action_page.php">
			      <input type="text" placeholder="Search.." size="35" name="search">
			      <button type="submit"><i class="fa fa-search"></i></button>
			    </form>
			  </div>
			-->
			</div>	
			<div class="col-25">
				<div class="cart-account">
					<div class="cart-wrapper">
					    <i class="fa" style="font-size:24px">&#xf07a;</i>
						<span class="step">1</span>
	    			</div>
	    			<div class="my-account">
	    			<a href="#">
	    			My Acccount
	    			</a>
	    			</div>
    			</div>
    <!--			
				<?php storefront_header_cart() ?>
	-->
			</div>					
		</div>

		<div class="storefront-primary-navigation"><div class="col-full">

<!--
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
			<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'primary-navigation',
					)
				);


				?>
			</nav>
-->
<?php
//$items = wp_get_nav_menu_items('Primary Menu');
//echo json_encode($items);

?>

 <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 

<script>
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 
</script>
			

		</div></div>
		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		//do_action( 'igoods_header' );
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );

<?php
/**
* Include IAMSocial Slider 
*
* @package WordPress
* @subpackage IAMSocial 1.1.2
* @since IAMSocial 1.0.0
*/
?>
<div id="carousel-home" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-home" data-slide-to="0" class="active"></li>

	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
						<a href="<?php echo esc_url( get_theme_mod( 'slide1_link', 'www.isabellegarcia.me/iamsocial' ) ) ?>"> 
								<img src="<?php echo ( get_theme_mod( 'slide1_img' ) ? esc_url( get_theme_mod( 'slide1_img' ) ) : get_template_directory_uri().'/img/slider/slide-1.png' ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'slide1_caption' ) ); ?>" class="img-responsive">
						</a>
				<div class="carousel-caption">
						<h2 id="caption-1"><a href="<?php echo esc_url( get_theme_mod( 'slide1_link', 'www.isabellegarcia.com/iamsocial' ) ) ?>"><?php echo wp_kses_post(get_theme_mod( 'slide1_caption', __( 'change your caption in the admin', 'iamsocial' ) ) ); ?></a></h2>
				</div>
		</div>
		<div class="item">
						<a href="<?php echo esc_url( get_theme_mod( 'slide2_link', 'www.isabellegarcia.me/iamsocial' ) ) ?>"> 
								<img src="<?php echo ( get_theme_mod('slide2_img') ? esc_url( get_theme_mod( 'slide2_img' ) ) :  get_template_directory_uri().'/img/slider/slide-2.png' ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'slide2_caption' ) ); ?>" class="img-responsive">
						</a>
				<div class="carousel-caption">

				</div>
		</div>
	</div>



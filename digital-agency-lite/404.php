<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Digital Agency Lite
 */

get_header(); ?>

<div class="container">
	<main id="maincontent" role="main">
		<div class="page-content">
	    	<h1><?php echo esc_html(get_theme_mod('digital_agency_lite_404_page_title',__('404 Not Found','digital-agency-lite')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('digital_agency_lite_404_page_content',__('Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.','digital-agency-lite')));?></p>
			<?php if( get_theme_mod('digital_agency_lite_404_page_button_text','GO BACK') != ''){ ?>
				<div class="more-btn">
				    <a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(get_theme_mod('digital_agency_lite_404_page_button_text',__('GO BACK','digital-agency-lite')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('digital_agency_lite_404_page_button_text',__('GO BACK','digital-agency-lite')));?></span></a>
				</div>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
	</main>
</div>

<?php get_footer(); ?>
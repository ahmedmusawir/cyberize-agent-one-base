<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize
 */

get_header();
?>

<style type="text/css">
	#general-blog-page-header {
		width: 100vw;
		height: 450px;
		background-image: url('<?php echo get_field('blog_page_header_image', 'option')['url'] ?>');
		background-size: cover;
		background-position: top center;
		padding: 13rem 15px 0px;
		margin-bottom: 60px;
	}

</style>

	<!-- Page Header with image -->
	<section id="general-blog-page-header">
		<div class="container-fluid">
			<h1 class="text-center pt-5"><?php wp_title(''); ?></h1>
		</div>
	</section>
	
	<div id="primary" class="content-area wp-react-app">
		<main id="main" class="site-main">

			<div id="root"></div>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();


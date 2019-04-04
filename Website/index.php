<?php
	define('SITE_ROOT', __DIR__);
	include './assets/php/functions.php';

	load_page();
  get_header();
?>
	<script>
		var options = {
			'website': {
				'title': '<?php echo get_title_site(); ?>',
				'url': '<?php echo get_URL_base(); ?>',
			}
		}
		set_menu_active('<?php echo get_slug(); ?>');
	</script>
	<section class="content-area">
<?php get_categorynav(); ?>
		<main class="page">
<?php get_page(); ?>
		</main>
	</section>
<?php get_footer(); ?>


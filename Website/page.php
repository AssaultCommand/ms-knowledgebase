<?php
	/* - Template Meta - */
	$GLOBALS['page'] = array(
		'title' => 'Index',
	);

	/* - Template Content - */
	ob_start();
?>


<div id="wrapper">
</div>


<script>
		options.website.page_slug = '<?php echo $_GET['slug']; ?>';

    load_data_template('page-content', '#wrapper', options.website.url + 'assets/php/data.php', {'data': 'page', 'slug': options.website.page_slug});
</script>

<?php
	$html = ob_get_clean();
	$GLOBALS['page']['content'] = $html;
?>

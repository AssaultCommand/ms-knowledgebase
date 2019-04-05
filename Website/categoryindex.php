<?php
	/* - Template Meta - */
	$GLOBALS['page'] = array(
		'title' => 'Index',
	);

	/* - Template Content - */
	ob_start();
?>

<section class="page-title">
	<section class="title-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>
						Sharing
					</h1>
					<div class="breadcrumbs">
						<span>Front end</span> > <span>Social Media</span> > <span>Sharing</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<aside class="button-area text-right">
		<div class="btn btn-primary editBtn"><i class="fas fa-edit"></i> Edit</div>
		<div class="btn btn-primary plusBtn"><i class="fas fa-plus"></i> Add new</div>
	</aside>
</section>

<section class="page-content">
	<section class="page-main">
		<div class="container">
			<div id="category-items" class="row">

			</div>
		</div>
	</section>

		<section class="page-sidebar">
			<aside class="metaInfo">
				<h4 class="sidePanelTitle">Authors</h4>
				<div class="sideBarAuthors">

					<form autocomplete="off" action="">
						<div class="autocomplete">
							<input id="searchAuthor" type="text" name="myCountry" placeholder="Zoek op auteur">
						</div>
					</form>

				</div>
			</aside>
			<script>
				autocomplete(document.getElementById("searchAuthor"), authors);
			</script>
		<section class="page-sidebar">
			<aside class="metaInfo">
				<h4 class="sidePanelTitle">Languages</h4>
				<div id="sideBarLanguages"></div>
			</aside>
			<aside class="metaInfo">
				<h4 class="sidePanelTitle">Framework</h4>
				<div id="sideBarFrameworks"></div>
			</aside>
		</section>
</section>





<script>
	options.website.category_id = '<?php echo $_GET['id']; ?>';

	var query = {
  	'data': 'category_items',
		'category_id': options.website.category_id ,
  	'languages': [],
  	'frameworks': []
  };

	var authors = [];
	$.ajax({
		url: window.options.website.url + 'assets/php/data.php?data=users',
		type: 'get',
		dataType: 'json',
		async: false
	})
	.done(function(data) {
		authors = data.data;
	});

  load_data_template('category-item', '#category-items', options.website.url + 'assets/php/data.php', query);
  load_data_template('filter-language', '#sideBarLanguages', options.website.url + 'assets/php/data.php', {'data': 'languages'});
  load_data_template('filter-framework', '#sideBarFrameworks', options.website.url + 'assets/php/data.php', {'data': 'frameworks'});

  $( "body" ).on( "change", "input[type='checkbox']", function() {
	$('input[name^="languages[]"]:checked').toArray().forEach(function(language_checkbox) {
		query['languages'] = [];
		query['languages'].push(language_checkbox.value);
	});

	$('input[name^="frameworks[]"]:checked').toArray().forEach(function(framework_checkbox) {
		query['frameworks'] = [];
		query['frameworks'].push(framework_checkbox.value);
	});

  	load_data_template('category-item', '#category-items', options.website.url + 'assets/php/data.php', query);
	});
</script>


<?php
	$html = ob_get_clean();
	$GLOBALS['page']['content'] = $html;
?>

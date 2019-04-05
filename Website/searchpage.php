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
						Search: <span class="searchSubject">Facebook</span>
					</h1>
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


    load_data_template('category-item', '#category-items', options.website.url + 'assets/php/data.php', {'data': 'category_items'}, 'append');

    load_data_template('filter-language', '#sideBarLanguages', options.website.url + 'assets/php/data.php', {'data': 'languages'}, 'append');

    load_data_template('filter-framework', '#sideBarFrameworks', options.website.url + 'assets/php/data.php', {'data': 'frameworks'}, 'append');
</script>

<?php
	$html = ob_get_clean();
	$GLOBALS['page']['content'] = $html;
?>

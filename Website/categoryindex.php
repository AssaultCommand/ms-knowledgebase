<?php
	/* - Template Meta - */
	$GLOBALS['page'] = array(
		'title' => 'Index',
	);

	/* - Template Content - */
	ob_start();
?>

<!-- <section class="page-title">
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
			<div class="row">
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Google Plus Button
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
					
					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Facebook Sharing Button
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
					
					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Twitter Sharing Button
					</h3>

					<div class="languageDescriptor">HTML-JS</div>

					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Snapchat Share Post BUtton
					</h3>

					<div class="languageDescriptor">HTML-JS</div>

					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Share To Whatsapp / Skype / Discord / Etc.
					</h3>

					<div class="languageDescriptor">HTML-JS</div>

					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
			</div>
		</div>
	</section>

		<section class="page-sidebar">
			<aside class="metaInfo">
				<h4 class="sidePanelTitle">Languages</h4>
				<div class="sideBarLanguages">
					<div>
					<input type="checkbox" id="phpcheckbox">
						<label for="phpcheckbox">
							<div class="checkbox"></div>
							<span>PHP</span>
						</label>
					<input type="checkbox" id="htmlcheckbox">
						<label for="htmlcheckbox">
							<div class="checkbox"></div>
							<span>HTML</span>
						</label>
					<input type="checkbox" id="javascriptcheckbox">
						<label for="javascriptcheckbox">
							<div class="checkbox"></div>
							<span>Javascript</span>
						</label>
					<input type="checkbox" id="csscheckbox">
						<label for="csscheckbox">
							<div class="checkbox"></div>
							<span>CSS</span>
						</label>
					</div>		
				</div>
			</aside>
			<aside class="metaInfo">
				<h4 class="sidePanelTitle">Framework</h4>
				<div class="sideBarLanguages">
					<div>
					<input type="checkbox" id="laravelcheckbox">
						<label for="laravelcheckbox">
							<div class="checkbox"></div>
							<span>Laravel</span>
						</label>
					<input type="checkbox" id="composercheckbox">
						<label for="composercheckbox">
							<div class="checkbox"></div>
							<span>Composer</span>
						</label>
					<input type="checkbox" id="jquerycheckbox">
						<label for="jquerycheckbox">
							<div class="checkbox"></div>
							<span>jQuery</span>
						</label>
					<input type="checkbox" id="angularcheckbox">
						<label for="angularcheckbox">
							<div class="checkbox"></div>
							<span>Angular</span>
						</label>
					</div>		
				</div>
			</aside>
		</section>
</section> -->


<div id="wrapper">	
</div>


<script>
    load_data_template('category-index', '#wrapper', options.website.url + 'assets/php/data.php', {'data': 'page', 'slug':'facebook-like-button'}, 'append');
</script>


<?php
	$html = ob_get_clean();
	$GLOBALS['page']['content'] = $html;
?>

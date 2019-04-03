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
						Google Plus Button
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
					
					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Google Plus Button
					</h3>

					<div class="languageDescriptor">HTML-JS</div>

					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				</div>
			</div>
		</section>
</section>

<section class="page-sidebar">
	<aside class="metaInfo">
		<h4 class="sidePanelTitle">Meta info</h4>
		<div class="metaInfoText">Posted by Christian 12/11/18</div>
			<div class="btn btn-primary metaInfoBtn"><i class="fas fa-arrow-up"></i> Like</div>
			<div class="metaInfoLikeCount">5 Likes</div>
		<div class="metaInfoLikes">
		<div class="metaInfoTitle">
			<div>Languages:</div>
			<div>HTML, JS</div>
		</div>
		<div class="metaInfoTitle">
			<div>Frameworks:</div>
			<div>N/A</div>
		</div>
		<div class="metaInfoTitle">
			<div>Platforms:</div>
		</div>
		<div class="sideExtended">
			<div>Show More</div>
			<div><i class="fas fa-arrow-down"></i></div>
		</div>
		</div>
	</aside>
	<aside class="relatedPages">
		<h4 class="sidePanelTitle">Related Pages</h4>
		<div class="relatedPage">Facebook Sharing Button</div>
		<div class="relatedPage">Facebook Sharing Button</div>
		<div class="relatedPage">Facebook Sharing Button</div>
		<div class="relatedPage">Facebook Sharing Button</div>
		<div class="relatedPage">Facebook Sharing Button</div>
		<div class="sideExtended">
			<div>Show More</div>
			<div><i class="fas fa-arrow-down"></i></div>
		</div>
	</aside>
</section>

<?php
	$html = ob_get_clean();
	$GLOBALS['page']['content'] = $html;
?>

<section class="page-title">
	<section class="title-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>
						Search: <span class="searchSubject">{{:page.title}}</span>
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
			<div class="row">
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						{{:page.title}}
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
						{{:page.description}}
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Facebook Sharing Button
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
					
					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
<!-- 				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Like/Follow Facebook Links
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
					
					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="col-sm-12 categoryItem">
					<h3 class="indexResultName">
						Combining Social Media Feeds
					</h3>

					<div class="languageDescriptor">HTML-JS</div>
					
					'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div> -->
			</div>
		</div>
	</section>

		<section class="page-sidebar">
			<aside class="metaInfo">
				<h4 class="sidePanelTitle">Authors</h4>
				<div class="sideBarAuthors">

					<form autocomplete="off" action="">
						<div class="autocomplete">
							<input id="searchAuthor" type="text" name="nameAuthor" placeholder="Zoek op auteur">
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
				<div id="sideBarFrameworks">
					<div>
					<input type="checkbox" id="checkbox5">
						<label for="checkbox5">
							<div class="checkbox"></div>
							<span>Laravel</span>
						</label>
					<input type="checkbox" id="checkbox6">
						<label for="checkbox6">
							<div class="checkbox"></div>
							<span>Composer</span>
						</label>
					<input type="checkbox" id="checkbox7">
						<label for="checkbox7">
							<div class="checkbox"></div>
							<span>jQuery</span>
						</label>
					<input type="checkbox" id="checkbox8">
						<label for="checkbox8">
							<div class="checkbox"></div>
							<span>Angular</span>
						</label>
					</div>		
				</div>
			</aside>
		</section>
</section>
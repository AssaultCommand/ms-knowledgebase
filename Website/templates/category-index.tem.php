<section class="page-title">
	<section class="title-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>
						Sharing
					</h1>
					<div class="breadcrumbs">
						{{breadcrumb_parse page.breadcrumbs /}}

						<!-- <div class="allPaths">Show all paths</div> -->
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
				<div class="sideBarLanguages">
					<div>
					<input type="checkbox" id="checkbox1">
						<label for="checkbox1">
							<div class="checkbox"></div>
							<span>PHP</span>
						</label>
					<input type="checkbox" id="checkbox2">
						<label for="checkbox2">
							<div class="checkbox"></div>
							<span>HTML</span>
						</label>
					<input type="checkbox" id="checkbox3">
						<label for="checkbox3">
							<div class="checkbox"></div>
							<span>Javascript</span>
						</label>
					<input type="checkbox" id="checkbox4">
						<label for="checkbox4">
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
<section class="page-title">
	<section class="title-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="pageTitle">
						{{:page.title}}
					</h1>
					<div class="breadcrumbs">
						{{breadcrumb_parse page.breadcrumbs /}}
						<!-- <span>Front end</span> > <span>Social Media</span> > <span>Sharing</span> > <span>Buttons</span> > <span>Scripted</span> -->
						<!-- <div class="allPaths">Show all paths</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<aside class="button-area text-right">
		<a href="#"><div class="btn btn-primary editBtn"><i class="fas fa-edit"></i> Edit</div></a>
        <a href="#"><div class="btn btn-primary plusBtn"><i class="fas fa-plus"></i> Add new</div></a>
	</aside>
</section>

<section class="page-content">
	<section class="page-main">



		<div class="container">
			<div class="row">
				<div class="col-sm-12">
   {{:page.content}}

				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="attachmentsTitle">Attachment</h2>
					<div class="btn btn-primary uploadBtn"><i class="fas fa-upload"></i> Upload</div>
				</div>
			</div>
			<div class="row">
		{{for attachments}}
				<div class="col-sm-12">`
					<div class="attachmentDiv">
						<div class="attachmentIcn"><i class="fas fa-file"></i></div>
						<div class="attachmentFileName">{{:filename}}</div>
						<div class="attachmentReleaseDate">Uploaded {{:timestamp}} by <span>Pim</span></div>
					</div>	
				</div>
		{{/for}}
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="commentsTitle">
						Comments
					</h2>
					<div class="btn btn-primary commentBtn"><i class="far fa-comments"></i> New comment</div>
				</div>
			</div>
			<div class="row">
		{{for comments}}
				<div class="col-sm-12">
					<div class="comment">
						<div class="commentPoster">
							<div class="commentIcn"><i class="fas fa-user"></i></div>
							<div class="commentFileName">{{:author}}</div>
							<div class="commentReleaseDate">Posted at <span>{{:timestamp}}</span></div>
						</div>
						<div class="commentContent">
							{{:comment}}
						</div>
						<div class="commentBtns">
							<div class="btn btn-primary replyBtn"><i class="far fa-comment"></i>Reply</div>
							<div class="btn btn-primary commentEditBtn"><i class="fas fa-edit"></i>Edit</div>
						</div>
					</div>
		{{/for}}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<form id="form4">
						<textarea name="editor1" id="editor1" rows="10" cols="80">
							</textarea>
						<script>
							CKEDITOR.replace( 'editor1' );
							</script>
					<div class="btn btn-primary postCommentBtn"><i class="fas fa-plus"></i>Post</div>
					</form>

				</div>
			</div>
		</div>
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
			<div class="relatedPage">Twitter Sharing Button</div>
			<div class="relatedPage">Snapchat Share Post Button</div>
			<div class="relatedPage">Share to Whatsapp / Skype ...</div>
			<div class="relatedPage">YouTube Subscribe Button</div>
			<div class="sideExtended">
				<div>Show More</div>
				<div><i class="fas fa-arrow-down"></i></div>
			</div>
		</aside>
	</section>
</section>
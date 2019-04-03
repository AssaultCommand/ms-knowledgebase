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
			<h1 class="pageTitle">
				Google Plus Button
			</h1>
			<div class="breadcrumbs">
				<span>Front end</span> > <span>Social Media</span> > <span>Sharing</span> > <span>Buttons</span> > <span>Scripted</span>
				<div class="allPaths">Show all paths</div>
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
			<div class="contentPage">

				'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

				<div class='contentHighlight'>
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
					quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</div>

				Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem
				eum fugiat quo voluptas nulla pariatur?'

				<div class='contentHighlight'>
					< script src='https://apis.google.com/js/platform.js' async defer></ script>
					< g:follow href='https://plus.google.com/pageId' rel='relationshipTyype'></ g:follow>
				</div>

				Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="attachments">
				<h2 class="attachmentsTitle">Attachment</h2>
				<div class="btn btn-primary uploadBtn"><i class="fas fa-upload"></i> Upload</div>
			</div>

			<div class="attachmentsContent">
				<div class="attachment">
					<div class="attachmentIcn"><i class="fas fa-file"></i></div>
					<div class="attachmentFileName">Code_Sample_v1.zip</div>
					<div class="attachmentReleaseDate">Uploaded 2 weeks ago by <span>Pim</span></div>
				</div>

				<div class="attachment">
					<div class="attachmentIcn"><i class="fas fa-file"></i></div>
					<div class="attachmentFileName">Code_Sample_v1.zip</div>
					<div class="attachmentReleaseDate">Uploaded 2 weeks ago by <span>Pim</span></div>
				</div>

			</div>
			<hr>
		</div>

		<div class="container">
			<div class="comments">
				<h2 class="commentsTitle">
					Comments
				</h2>

			<div class="btn btn-primary commentBtn"><i class="far fa-comments"></i> New comment</div>

			<div class="commentsContent">
			<div class="comment">
				<div class="commentPoster">
				<div class="commentIcn"><i class="fas fa-user"></i></div>
				<div class="commentFileName">Richard</div>
				<div class="commentReleaseDate">Poster <span>2</span> days ago</div>
				</div> 
				<div class="commentContent">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</div>
				<div class="commentBtns">
					<div class="btn btn-primary replyBtn"><i class="far fa-comment"></i>Reply</div>
					<div class="btn btn-primary commentEditBtn"><i class="fas fa-edit"></i>Edit</div>
				</div> 
			</div>
			</div>

				<div class="commentSection">
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
</section>

<?php
	$html = ob_get_clean();
	$GLOBALS['page']['content'] = $html;
?>

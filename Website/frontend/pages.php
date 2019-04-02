<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Maerschalk Kennisbank</title>

    <script src="assets/plugins/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/plugins/popper-1.14.7.min.js"></script>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="assets/plugins/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="assets/plugins/fontawesome-free-5.8.1/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <!-- development version, includes helpful console warnings -->
    <script src="assets/plugins/vue.js/vue-development.js"></script>

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="mainz.css">
</head>

<body>
    <header id="menubar">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
          <img src="assets/img/Maerschalk_logo.svg" width="30" height="30" alt="">
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-default btn-outline-light" href="#">Code Snippets <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-default btn-outline-light" href="#">Kennisbank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-default btn-outline-light" href="#" tabindex="-1" aria-disabled="true">Tutorials</a>
                    </li>
                </ul>
                <div class="nav-right my-2 my-lg-0">
                    <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search">-->
                    <div class="input-group" id="adv-search">
                        <input type="text" class="form-control" placeholder="Search for snippets" />
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <div class="dropdown dropdown-lg">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="filter">Filter by</label>
                                                <select class="form-control">
                            <option value="0" selected>All Snippets</option>
                            <option value="1">Featured</option>
                            <option value="2">Most popular</option>
                            <option value="3">Top rated</option>
                            <option value="4">Most commented</option>
                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="contain">Author</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <label for="contain">Contains the words</label>
                                                <input class="form-control" type="text" />
                                            </div>
                                            <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="nav-user nav-link btn btn-default" href="#"><i class="fas fa-user"></i></a>
            </div>
        </nav>
    </header>

    <nav id="categorymenu">
        <ul>
            <li>
                <a href="{{category.link}}">
            {{category.name}}
          </a>
            </li>
        </ul>
    </nav>

    <div class="containers">
        <div class="nav">Nav</div>
        <main id="content">
            <div class="container">
                <div class="pageTitle">
                    Google Plus Button
                </div>
                <div class="breadCrumbs">
                    <span>Front end</span> > <span>Social Media</span> > <span>Sharing</span> > <span>Buttons</span> > <span>Scripted</span>
                    <div class="allPaths">Show all paths</div>
                </div>

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
                    <div class="attachmentsTitle">Attachment</div>
                    <div class="uploadBtn"><i class="fas fa-upload"></i>Upload</div>
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
                    <div class="commentsTitle">
                        Comments
                    </div>

                <div class="commentBtn"><i class="far fa-comments"></i>New comment</div>

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
                        <div class="replyBtn"><i class="far fa-comment"></i>Reply</div>
                        <div class="commentEditBtn"><i class="fas fa-edit"></i>Edit</div>
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
                        <div class="postCommentBtn"><i class="fas fa-plus"></i>Post</div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
                <div class="pageBtnsC">
            <div class="pageBtns">
                <div class="plusBtn"><i class="fas fa-plus"></i>Add new</div>
                <div class="editBtn"><i class="fas fa-edit"></i>Edit</div>
            </div>
        </div>
        <div class="sidePanels">
            <div class="metaInfo">
                <div class="sidePanelTitle">Meta info</div>
                <div class="metaInfoText">Posted by Christian 12/11/18</div>
                    <div class="metaInfoBtn"><i class="fas fa-arrow-up"></i>Like</div>
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
            </div>        
            <div class="relatedPages">
                <div class="sidePanelTitle">Related Pages</div>
                <div class="relatedPage">Facebook Sharing Button</div>
                <div class="relatedPage">Facebook Sharing Button</div>
                <div class="relatedPage">Facebook Sharing Button</div>
                <div class="relatedPage">Facebook Sharing Button</div>
                <div class="relatedPage">Facebook Sharing Button</div>
                <div class="sideExtended">
                    <div>Show More</div>
                    <div><i class="fas fa-arrow-down"></i></div>
                </div>     
            </div>
        </div>
    </div>

</body>

</html>
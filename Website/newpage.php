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
                        Add New Page
                    </h1>
                                    <div class="breadCrumbs">
                    <div class="breadCrumbCategory">
                        <i class="fas fa-times"></i>
                        <span>Front end</span> > <span>Social Media</span> > <span>Sharing</span>
                    </div>
                    <div class="breadCrumbCategory">
                        <i class="fas fa-times"></i>
                        <span>Front end</span> > <span>Button</span> > <span>Scripted</span>
                    </div>
                    <div class="newBreadCrumbCategory">
                        <i class="fas fa-plus"></i>
                        <span>Add another Category</span>
                    </div>
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
                    <h4 class="indexResultName">
                        Page Title
                    </h4>
                        <form id="form">
                            <textarea name="pagetitle" id="pagetitle" rows="1" cols="100">Page title goes here
                             </textarea>
                        </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 categoryItem">
                    <h4 class="indexResultName">
                        Description
                    </h4>
                        <form id="form">
                            <textarea name="pagetitle" id="pagetitle" rows="3" cols="100">Describe the page
                             </textarea>
                        </form>
                </div>
            </div>
<!--                 <div class="row">
                    <div class="editableIcns">
                      <i class="fas fa-arrow-up"></i>
                      <i class="fas fa-arrow-down"></i>
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-times"></i>
                    </div>
                </div> -->
            <div class="row">
                <div class="col-sm-12 categoryItem">
                        <form id="form1">
                            <textarea name="editor1" id="editor1" rows="8" cols="80">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                             </textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                             </script>
                        </form>
                </div>
            </div>
<!--             <div class="row">
                <div class="editableIcns">
                  <i class="fas fa-arrow-up"></i>
                  <i class="fas fa-arrow-down"></i>
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-times"></i>
                </div>
            </div>            
            <div class="row">
                <div class="col-sm-12 categoryItem">
                        <form id="form2">
                            <textarea name="editor2" id="editor2" rows="8" cols="80">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                             </textarea>
                            <script>
                                CKEDITOR.replace( 'editor2' );
                             </script>
                        </form>
                </div>
            </div> -->
        </div>
    </section>

        <section class="page-sidebar">
<!--             <aside class="metaInfo">
                <h4 class="sidePanelTitle">Add Elements</h4>
                <div class="sideBarLanguages">
                    <div>
                        <div class="addedElement">
                            <div><i class="fas fa-plus"></i></div>
                                <div>Text Block</div>
                        </div>
                    </div> 
                    <div>
                        <div class="addedElement">
                            <div><i class="fas fa-plus"></i></div>
                                <div>Header Block</div>
                        </div>
                    </div> 
                    <div>
                        <div class="addedElement">
                            <div><i class="fas fa-plus"></i></div>
                                <div>Code Block</div>
                        </div>
                    </div>    
                    <div>
                        <div class="addedElement">
                            <div><i class="fas fa-plus"></i></div>
                                <div>Embed Media</div>
                        </div>
                    </div>    
                    <div>
                        <div class="addedElement">
                            <div><i class="fas fa-plus"></i></div>
                                <div>Files</div>
                        </div>
                    </div>      
                </div>
            </aside> -->
            <aside class="metaInfo">
                <h4 class="sidePanelTitle">Meta info</h4>
                <div class="metaInfoText">Posted by Christian 12/11/18</div>
                    <div class="btn btn-primary metaInfoBtn"><i class="fas fa-edit"></i> Edit</div>
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
        </section>
</section>


<?php
    $html = ob_get_clean();
    $GLOBALS['page']['content'] = $html;
?>
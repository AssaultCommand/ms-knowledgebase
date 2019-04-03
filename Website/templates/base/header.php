<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Maerschalk Kennisbank</title>

    <script src="assets/plugins/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/plugins/popper-1.14.7.min.js"></script>

    <link rel="stylesheet" href="assets/plugins/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="assets/plugins/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="assets/js/authors.js"></script>

    <link href="assets/plugins/fontawesome-free-5.8.1/css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- development version, includes helpful console warnings -->
    <script src="assets/plugins/vue.js/vue-development.js"></script>

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">

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
          <!-- <a class="nav-user nav-link btn btn-default" href="#"></a> -->
          <div class="dropdown">
            <button class="nav-user btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Login</button>
              <button class="dropdown-item" type="button">Register</button>
            </div>
          </div>
        </div>
      </nav>
    </header>
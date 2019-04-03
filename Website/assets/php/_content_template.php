<?php
/* - Page Functions - */

	/* get_slug()
	*  return the slug of the current page.
	*/
	function get_slug() {
		$slug = strtolower($_GET['page']);

		return $slug;
	}

	/* load_page()
	*  Loads the specified page, which in turn loads itself into memory.
	*/
	function load_page() {
		$current_page = './' . get_slug() . '.php';

		if((@include $current_page) === false) {
			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
			include './404.php';
		}
	}

	/* get_header()
	*  Loads the header into the current page. Used once at the start of the index page.
	*/
	function get_header() {
		include './templates/base/header.php';
	}

	/* get_categorynav()
	*  Loads the category navigator into the current page. Used once at the start of the index page.
	*/
	function get_categorynav() {
		include './templates/base/nav-category.php';
	}

	/* get_footer()
	*  Loads the footer into the current page. Used once at the end of the index page.
	*/
	function get_footer() {
		include './templates/base/footer.php';
	}

	/* get_page()
	*  Prints the content of the page in the index page after the page has been loaded using the load_page() function.
	*/
	function get_page() {
		echo $GLOBALS['page']['content'];
	}

	/* get_admin_page()
	*  Retrieve and display the admin panel pages from the template files.
	*
	*  Parameters:
	*  page = (optional) the name of the page template to display. The template name minus the 'page_' prefix.
	*    -  Defaults to home.
	*/
	function get_admin_page($page = 'home') {
		include './templates/admin/page_' . $page . '.php';
	}


/* - Site Variable Getters - */

	/* get_title_page()
	*  return the title of the current page.
	*
	*  Parameters:
	*  case = (optional) whether to return the title as lowercase or uppercase.
	*    - 'lower': return the title in lowercase.
	*    - 'upper': return the title in uppercase.
	*    - default: do not modify the casing of the title.
	*/
	function get_title_page($case = false) {
		switch($case) {
			case 'upper':
				$title = strtoupper($GLOBALS['page']['title']);
				break;
			case 'lower':
				$title = strtolower($GLOBALS['page']['title']);
				break;
			default:
				$title = $GLOBALS['page']['title'];
		}

		return $title;
	}

	/* get_title_site()
	*  Return the title of the website.
	*
	*  Parameters:
	*  case = (optional) whether to return the title as lowercase or uppercase.
	*    - 'lower': return the title in lowercase.
	*    - 'upper': return the title in uppercase.
	*    - default: do not modify the casing of the title.
	*/
	function get_title_site($case = false) {
		switch($case) {
			case 'upper':
				$title = strtoupper($GLOBALS['website']['title']);
				break;
			case 'lower':
				$title = strtolower($GLOBALS['website']['title']);
				break;
			default:
				$title = $GLOBALS['website']['title'];
		}

		return $title;
	}

	/* get_title_full()
	*  Return the page title with the website title.
	*/
	function get_title_full() {
		return get_title_page() . ' - ' . get_title_site();
	}

	/* get_URL_base()
	*  Return the website base url as set in options.php
	*/
	function get_URL_base() {
		return 'https://' . $GLOBALS['website']['url'];
	}

	/* get_URL_full($part)
	*  Return the full URL from a partial URL.
	*
	*  Parameters:
	*  part = The partial URL to append to the base URL.
	*/
	function get_URL_full($part) {
		return get_URL_base() . $part;
	}

	/* get_URL_current()
	*  Return the full current URL.
	*/
	function get_URL_current() {
		return 'https://' . $GLOBALS['website']['domain'] . $_SERVER[REQUEST_URI];
	}



?>

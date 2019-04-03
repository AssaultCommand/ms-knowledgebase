<?php
	include './functions.php';

    if(!isset($_GET['data'])) {exit();}

	header('Content-Type: application/json; charset=utf-8');
	database_connect();
	switch($_GET['data']) {

		case 'categories':
			// Clean the variables
			$parent = '';
			if(isset($_GET['parent']) && (int) $_GET['parent'] != null){
				$parent = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $_GET['parent']);
				$parent = ' WHERE parent = ' . $parent;
			}
			// The SQL Query
			$query = 'SELECT *, (SELECT COUNT(*) FROM categories WHERE parent = C.id) as children FROM categories C' . $parent . ' ORDER BY name';
			echo SQL_array_to_JSON($query);
			break;

		case 'category_items':
			$category_id = '';
			if(isset($_GET['category_id']) && (int) $_GET['category_id'] != null){
				$category_id = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $_GET['category_id']);
			}

			// The SQL Query
			$query = 'SELECT * FROM pages WHERE JSON_CONTAINS(breadcrumbs, "' . $category_id . '")';
			echo $query;
			echo SQL_array_to_JSON($query);
			break;

		case 'page':
			if(isset($_GET['slug']) && preg_match('/^[\w-]+$/', $_GET['slug'])){
				// Clean the variables
				$slug = mysqli_real_escape_string($GLOBALS['database']['connection'], $_GET['slug']);

				// The SQL Query
				$query = 'SELECT * FROM pages WHERE slug = "' . $slug . '"';
				echo SQL_to_JSON($query);
			}
			break;
	}

	database_disconnect();
?>

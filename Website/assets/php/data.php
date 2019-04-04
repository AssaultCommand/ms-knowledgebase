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
			echo SQL_rows_to_JSON($query);
			break;

		case 'category_items':
			$filter_array = [];

			/* Category Filter */
			if(isset($_GET['category_id']) && (int) $_GET['category_id'] != null){
				$category_id = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $_GET['category_id']);
				array_push($filter_array, 'JSON_CONTAINS(breadcrumbs, "' . $category_id . '")');
			}

			/* Category Filter */
			if(isset($_GET['author']) && (int) $_GET['author'] != null){
				$author = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $_GET['author']);
				array_push($filter_array, 'author = ' . $author);
			}

			/* Language Filters */
			if(isset($_GET['languages']) && is_array($_GET['languages'])){
				$languages = [];
				foreach($_GET['languages'] as $language) {
					if ((int) $language != null){
						$language = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $language);
						array_push($languages, 'JSON_CONTAINS(metainfo, "' . $language . '", "$.languages")');
					}
				}
				$languages = implode(' AND ', $languages);

				array_push($filter_array, $languages);
			}

			/* Framework Filters */
			if(isset($_GET['frameworks']) && is_array($_GET['frameworks'])){
				$frameworks = [];
				foreach($_GET['frameworks'] as $framework) {
					if ((int) $framework != null){
						$framework = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $framework);
						array_push($frameworks, 'JSON_CONTAINS(metainfo, "' . $framework . '", "$.frameworks")');
					}
				}
				$frameworks = implode(' AND ', $frameworks);

				array_push($filter_array, $frameworks);
			}

			/* Platform Filters */
			if(isset($_GET['platforms']) && is_array($_GET['platforms'])){
				$platforms = [];
				foreach($_GET['platforms'] as $platform) {
					if ((int) $platform != null){
						$platform = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $platform);
						array_push($platforms, 'JSON_CONTAINS(metainfo, "' . $platform . '", "$.platforms")');
					}
				}
				$platforms = implode(' AND ', $platforms);

				array_push($filter_array, $platforms);
			}

			$filter_array = (!empty($filter_array) ? ' WHERE ' . implode(' AND ', $filter_array) : '');

			// The SQL Query
			$query = 'SELECT title, slug, description, metainfo, author FROM pages' . $filter_array;
			echo SQL_rows_to_JSON($query);
			break;

		case 'page':
			if(isset($_GET['slug']) && preg_match('/^[\w-]+$/', $_GET['slug'])){
				// Clean the variables
				$slug = mysqli_real_escape_string($GLOBALS['database']['connection'], $_GET['slug']);

				// The SQL Query
				$query_page = 'SELECT * FROM pages WHERE slug = "' . $slug . '"';
				$query_pageattachments = 'SELECT * FROM page_attachments WHERE page = (SELECT id FROM pages WHERE slug = "' . $slug . '")';
				$query_pagecomments = 'SELECT * FROM page_comments WHERE page = (SELECT id FROM pages WHERE slug = "' . $slug . '")';
				// echo SQL_row_to_JSON($query_page);
				echo JSON_combine(
					["page", SQL_row_to_JSON($query_page)],
					["attachments", SQL_rows_to_JSON($query_pageattachments)],
					["comments", SQL_rows_to_JSON($query_pagecomments)]
				);
			}
			break;

		case 'languages':
			// The SQL Query
			$query = 'SELECT * FROM languages';
			echo SQL_rows_to_JSON($query);
			break;

		case 'frameworks':
			// The SQL Query
			$query = 'SELECT * FROM frameworks';
			echo SQL_rows_to_JSON($query);
			break;

		case 'users':
			$user_id = '';
			if(isset($_GET['user_id']) && (int) $_GET['user_id'] != null){
				$user_id = mysqli_real_escape_string($GLOBALS['database']['connection'], (int) $_GET['user_id']);
				// The SQL Query
				$query = 'SELECT id, rank, username, joindate FROM users WHERE id = ' . $user_id;;
				echo SQL_rows_to_JSON($query);
			} else {
				// The SQL Query
				$query = 'SELECT id, rank, username FROM users';
				echo SQL_rows_to_JSON($query);
			}
			break;
	}

	database_disconnect();
?>

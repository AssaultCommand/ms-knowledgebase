/* - Custom Template Tags - */

	/* custom_tag_breadcrumbs()
	*  Returns the formatted breadcrumbs based on a breadcrumbs array array.
	*/
	function custom_tag_breadcrumbs(value) {
		var breadcrumbs_list = JSON.parse(value);
		var breadcrumbs_output = '';
		categories = {};

		$.ajax({
			url: options.website.url + 'assets/php/data.php?data=categories',
			type: 'get',
			dataType: 'json',
			async: false
		})
		.done(function(data) {
			categories = data;
		});

		breadcrumbs_list.forEach(function(breadcrumbs) {
			var breadcrumbs_string = [];
			breadcrumbs.forEach(function(breadcrumb) {
				var breadcrumb_category = $.grep(categories.data, function(breadcrumb_category){return breadcrumb_category.id === breadcrumb.toString();})[0];
				breadcrumbs_string.push('<a href="#' + breadcrumb_category['slug'] + '">' + breadcrumb_category['name'] + '</a>');
			});
			breadcrumbs_output += breadcrumbs_string.join(' &#x3E; ') + '<br>';
		});

		return breadcrumbs_output;
	}

		/* custom_tag_languages()
		*  Returns the formatted breadcrumbs based on a breadcrumbs array array.
		*/
		function custom_tag_languages(value) {
			var language_list = JSON.parse(value);
			language_list = language_list['languages'];
			var language_output = [];
			languages = {};

			$.ajax({
				url: options.website.url + 'assets/php/data.php?data=languages',
				type: 'get',
				dataType: 'json',
				async: false
			})
			.done(function(data) {
				languages = data;
			});

			language_list.forEach(function(language) {
				var language_find = $.grep(languages.data, function(language_id){return language_id.id === language.toString();})[0];
				language_output.push('<b>' + language_find['language'] + '</b>');
			});

			language_output = language_output.join(' - ');
			return language_output;
		}

	/* custom_tag_date_iso()
	*  Returns an ISO timestamp from a MySQL timestamp.
	*/
	function custom_tag_date_iso(value) {
		var t = value.split(/[- :]/);
		var d = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);

		return d.toISOString();
	}

	/* custom_tag_date_text()
	*  Returns a readable text timestamp from a MySQL timestamp.
	*/
	function custom_tag_date_text(value) {
		var t = value.split(/[- :]/);
		var d = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);

		return d.getDate() + ' ' + d.getShortMonthName() + ' ' + d.getFullYear();
	}

	/* custom_tag_user_id_name()
	*  Returns a username based on a user id.
	*/
	function custom_tag_user_id_name(value) {
		var username = 'Anonymous';

		$.ajax({
			url: options.website.url + 'assets/php/data.php?data=users&user_id=' + value,
			type: 'get',
			dataType: 'json',
			async: false,
			success: function(data) {
			}
		})
		.done(function(data) {
			username = data.data[0].username;
		});

		return username;
	}

	/* custom_tag_console_log()
	*  Console output the current value.
	*/
	function custom_tag_console_log(value) {
		console.log(value);
		return value;
	}

	/* Register the custom template tags */

		/* {{breadcrumb_parse value /}} */
		$.views.tags("breadcrumb_parse", custom_tag_breadcrumbs);

		/* {{language_parse value /}} */
		$.views.tags("language_parse", custom_tag_languages);

		/* {{date_iso value /}} */
		$.views.tags("date_iso", custom_tag_date_iso);

		/* {{date_text value /}} */
		$.views.tags("date_text", custom_tag_date_text);

		/* {{user_id_name value /}} */
		$.views.tags("user_id_name", custom_tag_user_id_name);

		/* {{console value /}} */
		$.views.tags("console", custom_tag_console_log);


/* - Template Functions - */

	/* get_template()
	*  If the named remote template is not yet loaded and compiled as a named template, fetch it.
	*  In either case, return a promise (already resolved, if the template has already been loaded).
	*
	*  Parameters:
	*  name = name of the template file located in the directory /templates/
	*/
	function get_template(name) {
	  var deferred = $.Deferred();
	  if ($.templates[name]) {
	    deferred.resolve();
	  } else {
			$.ajax({
		    url: options.website.url + 'templates/' + name + '.tem.php',
		    type: 'get',
		    async: true,
		    success: function(html) {
		    	$.templates(name, String(html));
		    }
			})
	    .then(function() {
	      if ($.templates[name]) {
	        deferred.resolve();
	      } else {
	        alert("Script: \"" + name + ".js\" failed to load");
	        deferred.reject();
	      }
	    });
	  }
	  return deferred.promise();
	}

	/* load_template()
	*  Load the template into the page.
	*
	*  Parameters:
	*  name = name of the template file located in the directory /templates/
	*  parent = specify the parent element that the template will be placed in.
	*  data = the data used to fill in the template.
	*  insert_mode = (optional) method of inserting the template in the parent element.
	*    - 'append': append the template at the end of the parent's content
	*    - 'prepend': prepend the template at the start of the parent's content
	*    - 'replace'/default: replace the parent's content with the template
	*/
	function load_template(name, parent, data, insert_mode, callback) {
		$.when(
			get_template(name)
		).done(function() {
			var html = $.templates[name].render(data);
			switch(insert_mode) {
				case 'append':
					$(parent).html(html);
					break;
				case 'prepend':
					$(parent).prepend(html);
					break;
				case 'replace':
				default:
					$(parent).html(html);
					break;
			}
			typeof callback === 'function' && callback();
		});
	}

	/* load_data_template()
	*  Get remote JSON data and load the template into the page.
	*
	*  Parameters:
	*  name = name of the template file located in the directory /templates/
	*  parent = specify the parent element that the template will be placed in.
	*  data_url = the url from which to load the data json used to fill in the template.
	*  insert_mode = (optional) method of inserting the template in the parent element.
	*    - 'append': append the template at the end of the parent's content
	*    - 'prepend': prepend the template at the start of the parent's content
	*    - 'replace'/default: replace the parent's content with the template
	*/
	function load_data_template(name, parent, data_url, insert_mode, callback) {
	    setTimeout(function(){
	        $.getJSON(data_url, function( data ) {
    			load_template(name, parent, data.data, insert_mode, callback);
    		});
        }, 5);
	}

	/* load_data_template()
	*  Get remote JSON data and load the template into the page.
	*
	*  Parameters:
	*  name = name of the template file located in the directory /templates/
	*  parent = specify the parent element that the template will be placed in.
	*  data_url = the url from which to load the data json used to fill in the template.
	*  data_query = the get variables to pass on through the request.
	*  insert_mode = (optional) method of inserting the template in the parent element.
	*    - 'append': append the template at the end of the parent's content
	*    - 'prepend': prepend the template at the start of the parent's content
	*    - 'replace'/default: replace the parent's content with the template
	*/
	function load_data_template(name, parent, data_url, data_query, insert_mode, callback) {
        $.getJSON(data_url, data_query, function( data ) {
			load_template(name, parent, data.data, insert_mode, callback);
		});
	}

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

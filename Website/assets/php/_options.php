<?php
/* - Error Handling - */

    ini_set("error_prepend_string", '<div class="alert alert-danger alert-dismissible" role="alert"><b>PHP ERROR:</b>');
    ini_set("error_append_string", '<br />Please report this error to the site administrator!</p><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');


/* - Website - */

$GLOBALS['website'] = array(
    'title' => 'Maerschalk Kennisbank',
    'domain' => 'kennisbank.maerschalk.test',
    'url' => 'kennisbank.maerschalk.test/',
    'http' => 'http',
    'description' => '',
);


/* - Database - */

$GLOBALS['database'] = array(
    'ip' => '192.99.219.32',
    'database' => 'armorwat_maerschalk_kb',
    'user' => 'armorwat_mrschlk',
    'password' => 'YkwieQ_ld6{d'
);
?>

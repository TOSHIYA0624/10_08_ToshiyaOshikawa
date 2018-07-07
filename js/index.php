<?php echo file_get_contents('index.html'); ?>

<?php
	http_response_code( 301 ) ;

	header( "Location: lessons/lessons.html" ) ;
	exit ;
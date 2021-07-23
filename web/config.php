<?php
$gl=(isset($_COOKIE['gl']) && $_COOKIE['gl'])?$_COOKIE['gl']:'US';
// define('ROOT_PART', Root_part());
// define('APIKEY', 'AIzaSyBmYQPhWRuVcFG8XNO-WDBFLZpZtIkKlbY');
// define('GJ_CODE', $gl);
// define('SITE_NAME', 'Hello World!');
// define('TITLENAME', 'Hello World!');
// define('EN2DEKEY', 'AnQUP1XDEF87ewemhuYG35e67CtzDSh4');
// define('EMAIL', 'None@gmail.com');

define('APIKEY', getenv("APIKEY"));
define('GJ_CODE', getenv("GJ_CODE"));
define('SITE_NAME',getenv("SITE_NAME"));
define('TITLENAME', getenv("TITLENAME"));
define('EN2DEKEY',getenv("EN2DEKEY"));
define('EMAIL', getenv("EMAIL"));
?>

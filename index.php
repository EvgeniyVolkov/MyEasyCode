<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = '';
if (isset($a)) {
	echo '$a не пустая';
}

// echo ((true ? 'true' : false) ? 't' : 'f');

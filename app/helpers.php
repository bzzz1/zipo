<?php 
	
function log_sql($switch="on") {
	if ('off' == $switch) {
		DB::listen(function($sql) { return null; });
		return 'Sql logging is OFF. BUT CURRENTLY NOT WORKING!';
	} else {
		DB::listen(function($sql) { var_dump($sql); });
		return 'Sql logging is ON.';
	}
}
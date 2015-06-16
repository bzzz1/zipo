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

function minutes_left() {
	$now = Carbon::now();
	$tomorrow = Carbon::tomorrow();
	$minutes_left = $tomorrow->diffInMinutes($now);
	return $minutes_left;
}

function get_EUR_rate() {
	$left = minutes_left();

	$rate = Cache::remember('EUR_rate', $left, function() {
	    $xml = file_get_contents('http://www.cbr.ru/scripts/XML_daily.asp');
	    $xml = simplexml_load_string($xml);
	    $json = json_encode($xml);
	    $array = json_decode($json,TRUE);
	    $collection = new Illuminate\Support\Collection($array['Valute']);
	    $EUR = $collection->filter(function($item) {return 'EUR'==$item['CharCode'];})->fetch('Value')['0'];
	    return $EUR;
	});

	return $rate;
}

function dir_path($path='root') {
	if ('prices' == $path) {
		return public_path().DIRECTORY_SEPARATOR.'prices';
	} elseif ('excel' == $path) {
		return public_path().DIRECTORY_SEPARATOR.'excel';
	} elseif ('icons' == $path) {
		return public_path().DIRECTORY_SEPARATOR.'icons';
	} elseif ('pdf' == $path) {
		return public_path().DIRECTORY_SEPARATOR.'pdf';
	} elseif ('photos' == $path) {
		return public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos';
	} else {
		return public_path();
	}
}

function dir_sep() {
	return DIRECTORY_SEPARATOR;
}

function read_dir($dir='D:\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\zipo\\public\\img') { 
	$result = []; 

	if (!file_exists($dir)) {
		echo "<span style='color: red'>ERROR: no \"$dir\" directory found!</span></br>";
		return;
	}

	$files = scandir($dir); 
	foreach ($files as $key => $value) { 
		if (!in_array($value, array(".",".."))) { 
			if (is_dir($dir.DIRECTORY_SEPARATOR.$value)) { 
				$result[$value] = read_dir($dir.DIRECTORY_SEPARATOR.$value); 
			} else {
				$result[] = iconv('Windows-1251', "UTF-8", $value);
			} 
		} 
	}

	return $result; 
}
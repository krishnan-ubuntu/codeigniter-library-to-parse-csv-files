<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Parsecsv {

	function parse_csv_file($file_url) {

		$csv = array_map('str_getcsv', file($file_url));
    	array_walk($csv, function(&$a) use ($csv) {
      	$a = array_combine($csv[0], $a);
    	});
    	array_shift($csv);
    	return $csv;
	}

}
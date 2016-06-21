<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->library('parsecsv');

    }


    public function process_csv_files() {

    	$file_url = 'http://example.com/files/example.csv';

		$bulk_array = $this->parsecsv->parse_csv_file($file_url);

    }

}
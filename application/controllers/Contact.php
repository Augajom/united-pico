<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function index() {
        redirect(site_root_url('#contact'));
    }
}

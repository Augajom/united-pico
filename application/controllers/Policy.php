<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function index($tab = '') {
        if ($tab == 'privacy') {
            redirect(site_root_url('#policy-privacy'));
        } elseif ($tab == 'terms') {
            redirect(site_root_url('#policy-terms'));
        } elseif ($tab == 'agreement') {
            redirect(site_root_url('#policy-agreement'));
        } elseif ($tab == 'gov') {
            redirect(site_root_url('#policy-gov'));
        } else {
            redirect(site_root_url('#policy'));
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('common_helper');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('home/index');
        $this->load->view('footer');
    }

    public function policy() {
        redirect(site_root_url('policy'));
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $site_lang = $this->session->userdata('site_lang');

        if (empty($site_lang)) {
            $site_lang = 'thai';
            $this->session->set_userdata('site_lang', $site_lang);
        }

        $this->lang->load('site_lang', $site_lang);
    }
}
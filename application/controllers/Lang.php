<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lang extends CI_Controller {

    public function switch($language = "")
    {
        if ($language == 'th') {
            $language = 'thai';
        } elseif ($language == 'en') {
            $language = 'english';
        }

        $language = ($language != "") ? $language : "thai";

        $this->session->set_userdata('site_lang', $language);

        $referer = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url();
        redirect($referer);
    }
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {

        $this->load->helper('url');

        $data = array();
        $data['base_url'] = base_url();
        $this->load->view('main', $data);
    }

}


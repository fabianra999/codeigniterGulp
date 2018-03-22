<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateController extends CI_Controller {

    /**
     * Template
     * @date 22/03/2018
     */
    public function index() {   
        $this->load->view('template/index');
    }

    public function index2() {
        $this->load->view('template/index2');
    }
}

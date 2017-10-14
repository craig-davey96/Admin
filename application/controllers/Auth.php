<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 03/10/2017
 * Time: 20:44
 */

class Auth extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library(array('migration'));
        if ($this->migration->current() === FALSE){
            show_error($this->migration->error_string());
        }

    }

    /* ============================== ** AUTH ** ============================== */

    public function login(){

        $this->_render_auth_view('login_view');

    }

    public function _render_auth_view($view , $data = array()){

        $viewhtml = $this->load->view('partials/Header_view');
        $viewhtml = $this->load->view('admin/Auth/'.$view , $data);
        $viewhtml = $this->load->view('partials/Footer_view');

        return $viewhtml;

    }

}
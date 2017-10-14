<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 09/09/2017
 * Time: 18:11
 */

class Admin extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('migration');
        if ($this->migration->current() === FALSE){
            show_error($this->migration->error_string());
        }

    }


    /* ============================== ** DASHBOARD ** ============================== */

    public function index(){
       $this->dashboard();
    }

    public function dashboard(){
        $this->_render_view('admin/Dashboard/Dashboard_view');
    }

    /**
     * ------------------------- NEWS ACTIONS -------------------------
     */

    public function addNews(){
        $this->_render_view('admin/News/Add_view');
    }

    public function manageNews(){
        $this->_render_view('admin/News/Manage_view');
    }

    /**
     * ------------------------- PRODUCT ACTIONS -------------------------
     */

    public function addProduct(){
        $this->_render_view('admin/Products/Add_view');
    }

    public function manageProducts(){
        $this->_render_view('admin/Products/Manage_view');
    }

    /* ===============================
              RETURN VIEW
    ================================== */

    /**
     * @param $view
     * @param array $data
     * @return mixed
     */

    public function _render_view($view , $data = array()){

        $viewhtml = $this->load->view('admin/partials/Header_view');
        $viewhtml = $this->load->view('admin/partials/Menu_view');
        $viewhtml = $this->load->view($view , $data);
        $viewhtml = $this->load->view('admin/partials/Footer_view');

        return $viewhtml;

    }


}
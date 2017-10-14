<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 12/09/2017
 * Time: 21:16
 */

    class Admin_widgets extends CI_Controller
    {

        public function __construct(){
            parent::__construct();
        }

        /* *** --- Activity Log --- *** */

        public function activity_log(){
            $this->_render_widget('Activity_log');
        }

        /* *** --- TASKS --- *** */

        public function tasks(){
            $this->_render_widget('Tasks');
        }

        /* ===============================
              RENDER WIDGET
         ================================== */

        public function _render_widget($view , $data = array()){

            $viewhtml = $this->load->view('admin/Widgets/'.$view , $data);
            return $viewhtml;

        }

    }

?>
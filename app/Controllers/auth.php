<?php

use App\Controllers\BaseController;

defined('BASEPATH') or exit ('no direct sript acces allowed');

class auth extends BaseController{
   
    public function register2(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        if($this->form_validation->run() ==false){
            $this->load->view('/pages/ppaket');
        }else{
            echo 'data ';
        }
    }
}

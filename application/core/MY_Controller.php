<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
     // making temlate and send data to view.
     $this->template['header']   = $this->load->view('layout/header', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
     $this->load->view('layout/index', $this->template);
   }
   
   public function layout_shop() {
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->load->view('layout_shop/index', $this->template);
   }
   
   public function layout_blank() {
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->load->view('layout_blank/index', $this->template);
   }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends MY_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    public function index(){
        $this->middle = 'shop';
        $this->layout_shop();
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    /**
     * Index page for Dashboard controller.
     */
    public function index() {
        
        $this->middle = 'order';
        $this->layout();
    }
    
    /**
     * Index page for Dashboard controller.
     */
    public function view($id = 0) {
        
        $this->middle = 'order_view';
        $this->layout();
    }
}

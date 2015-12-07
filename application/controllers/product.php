<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    /**
     * View for Product controller.
     */
    public function view($id = 0) {
        
        $this->middle = 'product_view';
        $this->layout();
    }
    
    /**
     * New for Product controller.
     */
    public function product_new(){
        header('location:/ci-2.2.6/product/view/123');
        //redirect('/product/view/123', 'refresh');
    }
    
    /**
     * Update for Product controller.
     */
    public function update() {
        
        $this->middle = 'product_view';
        $this->layout();
    }
    
    /**
     * Form for Product controller.
     */
    public function product_form() {
        
        $this->middle = 'product_form';
        $this->layout();
    }
}
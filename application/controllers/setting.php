<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MY_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    /**
     * Index page for Setting controller.
     */
    public function index() {
        
        $this->middle = 'setting';
        $this->layout();
    }
    
    public function bank() {
        
        $this->middle = 'setting_bank';
        $this->layout();
    }
}

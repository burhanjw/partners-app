<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model');
    }
    
    public function index()
    {
        $this->global['pageTitle'] = 'Dashboard';
		
		$data['searchBody'] = 'Yes';
		$data['api_requests'] = $this->common_model->get_all_requests();
        
        $this->load->view('back_end/includes/header', $this->global);
        $this->load->view("back_end/dashboard", $data);
        $this->load->view('back_end/includes/footer');
    }
    
 }
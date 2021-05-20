<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/core/MYREST_Controller.php';

class Api extends MYREST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
    }

    public function partner_api_hit_get($partner_id) {
        
        $partner = $this->common_model->get_row("tbl_partners", ['id' => $partner_id]);            
        if($partner) {
            $inserted = $this->common_model->insert('tbl_api_requests', array(
                'partner_id' => $partner->id,
                'datetime' => date('Y-m-d H:i:s')
            ));
            if($inserted) {
                $this->api_response_arry['message'] = 'Partner hit recorded successfully!';
            } else {
                $this->api_response_arry['global_error'] = 'An error occured while adding the request. Please try again.';
            }
        } else {
            $this->api_response_arry['global_error']  = 'Partner not found!';
        }

        $this->api_response();
    }

}
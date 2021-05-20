<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class MYREST_Controller extends REST_Controller 
{

	public $api_response_arry = array(
		"response_code" => rest_controller::HTTP_OK,
		"message"       => '',
        "global_error"  => '',
		"error"         => array(),
		"data"          => array()
	);

	function __construct()
	{
		parent::__construct();
		$_POST = $this->post();
	}

    /**
     * return service api response data
     * @return json array
     */
    public function api_response() {
        $output = array();
      
        $output['message']      = $this->api_response_arry['message'];
        $output['global_error'] = $this->api_response_arry['global_error'];
        $output['error']        = $this->api_response_arry['error'];
        $output['data']         = $this->api_response_arry['data'];
        $output['response_code'] = $this->api_response_arry['response_code'];

        //for query log hook added in log folder
        $hook = & load_class('Hooks', 'core');
        $hook->call_hook('post_controller');

        if (method_exists($this, 'response')) {
            $this->response($output, $this->api_response_arry['response_code']);
        } else {
            http_response_code($this->api_response_arry['response_code']);
        }
    }


}
/* End of file MYREST_Controller.php */
/* Location: ./application/controllers/core/MYREST_Controller.php */
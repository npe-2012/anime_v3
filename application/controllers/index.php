<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct() {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');

    }
	public function index()
	{
		$this->load->view('anime');
	}

    public function anime() {
//        $this->grocery_crud->set_table('anime');
        $output = $this->grocery_crud->render();

        $this->_grid_output($output);
    }

    function _grid_output($output) {
        $this->load->view('crud.php', $output);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

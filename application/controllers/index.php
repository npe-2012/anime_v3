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
        $this->load->library('firephp');
        //$this->firephp->log('orz');

    }
	public function index()
	{
        redirect(site_url('index/anime'));
	}

    public function anime() {
//        $this->grocery_crud->set_table('anime');
        $crud = new grocery_CRUD();
        $crud->columns('title', 'title_jp', 'official_url', 'first_bc', 'current_progress', 'total_eps');
        $crud->display_as('title', '作品');
        $crud->display_as('title_jp', '日文');
        $crud->display_as('official_url', '官網');
        $crud->display_as('first_bc', '首播');
        $crud->display_as('current_progress', '進度');
        $crud->display_as('total_eps', '總話數');
        $output = $crud->render();

        $this->_grid_output($output);
    }

    public function character() {
//        $this->grocery_crud->set_table('anime');
        $crud = new grocery_CRUD();
//        $crud->columns('title', 'title_jp', 'official_url', 'first_bc', 'current_progress', 'total_eps');
        $crud->display_as('character', '角色');
        $crud->display_as('title', '作品');
        $crud->display_as('seiyuu', '聲優');
        $crud->display_as('comment', '備註');
        $crud->set_relation('title', 'title', 'title');
        $crud->set_relation('seiyuu', 'seiyuu', 'seiyuu');
        $output = $crud->render();

        $this->_grid_output($output);
    }

    public function seiyuu() {
//        $this->grocery_crud->set_table('anime');
        $crud = new grocery_CRUD();
//        $crud->columns('title', 'title_jp', 'official_url', 'first_bc', 'current_progress', 'total_eps');
        $crud->display_as('seiyuu', '聲優');
        $output = $crud->render();

        $this->_grid_output($output);
    }

    public function title() {
//        $this->grocery_crud->set_table('anime');
        $crud = new grocery_CRUD();
//        $crud->columns('title', 'title_jp', 'official_url', 'first_bc', 'current_progress', 'total_eps');
        $crud->display_as('title', '聲優');
        $output = $crud->render();

        $this->_grid_output($output);
    }

    function _grid_output($output) {
        $this->load->view('crud.php', $output);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

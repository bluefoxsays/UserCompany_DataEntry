<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('InsertData_model');
        $this->load->view('user/header');
        $this->load->library('upload');
        $this->load->library('session');

    }
	public function index()
	{
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		//$this->load->view('welcome_message');
        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('user/header');
            $this->load->view('user/usersform');
            $this->load->view('user/footer');
            //$this->load->view('myform');

        }
        else
        {
            $this->load->view('user/success');
        }

	}
   /* public function view($page = 'usersform')
    {
        if ( !file_exists(APPPATH.'views/user/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = 'Insert user and company information';

        $this->load->view('views/user/header');
        $this->load->view('views/user/'.$page);
        $this->load->view('views/user/footer');
    }*/
   //Edit this
    private function set_upload(){
        //  upload an image options
        $config = array();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf';
       // $config['max_size']      = '0';
        $config['overwrite']     = FALSE;


        return $config;
    }
    public function InsertForm()
    {
        $this->load->helper('form');
        //loads the form validation
        $this->load->library('form_validation');

      //  $config['upload_path']          = './uploads/';
        //$config['allowed_types']        = 'pdf';



        $data['title'] = 'Insert user and company information';
        //Validates the form input
        //Validates the user information
        $this->form_validation->set_rules('firstN', 'First Name', 'required');
        $this->form_validation->set_rules('lastN', 'Last Name', 'required');
        $this->form_validation->set_rules('userAdd1', 'User Address', 'required');
        $this->form_validation->set_rules('userCity', 'User City', 'required');
        $this->form_validation->set_rules('userState', 'User State', 'required');
        $this->form_validation->set_rules('userZip', 'User Zip Code', 'required');
        $this->form_validation->set_rules('userPhone', 'User Phone', 'required');
        $this->form_validation->set_rules('userEmail', 'User Email', 'required|valid_email');


        //Validates the company information
        $this->form_validation->set_rules('compN', 'Company Name', 'required');
        $this->form_validation->set_rules('compAdd', 'Company Address', 'required');
        $this->form_validation->set_rules('compCity', 'Company City', 'required');
        $this->form_validation->set_rules('compState', 'Company State', 'required');
        $this->form_validation->set_rules('compZip', 'Company Code', 'required');
        $this->form_validation->set_rules('compPhone', 'Company Phone', 'required');


//if the form does not validate refresh the page
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header', $data);
            $this->load->view('user/usersform');
            $this->load->view('footer');

        }
        //if the form validates send users to the entered page confirming their success
        else{
            $this->InsertData_model->set_user();
            $this->InsertData_model->set_comp();
            $this->load->view('user/entered');
        }

    }
//validate the login page
    public function loginData(){
        $this->session



        // $passW= 'MarcoPoles';
        $this->form_validation->set_rules('username', 'Username', 'required|matches[]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[]');


    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        $this->load->helper(array('form', 'url'));
    }

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

	//No use


	public function index()
	{
		$this->load->view('welcome_message');
	}


    //directing to admin sign in ,validating



	public function signIn()
    {
        $this->form_validation->set_rules('userEmail','userEmail','required');
        $this->form_validation->set_rules('userPassword','userPassword','required');

        if ($this->form_validation->run())
        {
            $this->load->model('admin_m');
            $email = $this->input->post('userEmail');
            $password = $this->input->post('userPassword');
            $user = $this->admin_m->logIn($email, $password);


            if ($user)
            {


                $sessionData = array(
                    'userId' => $user->userId,
                    'email' => $user->userEmail,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sessionData);



                $data['jobs'] = $this->admin_m->getRecords();
                $data['content'] = 'admin/adminJobs';
                $this->load->view('components/template', $data);


            }
            else
            {
                $this->session->set_flashdata('response','Wrong credentials !');
                $this->load->view('login');
            }
        }
        else
        {
            $this->load->view('login');
        }
    }
}

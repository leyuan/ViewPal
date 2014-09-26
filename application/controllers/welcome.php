<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    
	public function index()
	{
        $username = $this->session->userdata('username');
        $wmname = $this->session->userdata('wmname');
        $data['username'] = $username;
        $data['wmname'] = $wmname;
        
        
        $this->load->view('templates/viewpal_header');
		$this->load->view('welcome',$data);
        $this->load->view('templates/footer');
	}
    
    public function features()
    {
        $this->load->view('static/header');
        $this->load->view('static/body/features');
        $this->load->view('static/footer');
    }
    
    public function pricing()
    {
        $this->load->view('static/header');
        $this->load->view('static/body/pricing');
        $this->load->view('static/footer');
    }
    
    public function whyviewpal()
    {
        $this->load->view('static/header');
        $this->load->view('static/body/whyviewpal');
        $this->load->view('static/footer');
    }
    
    public function hiring()
    {
        $this->load->view('static/header');
        $this->load->view('static/body/hiring');
        $this->load->view('static/footer');
    }
    
    public function contact()
    {
        $this->load->view('static/header');
        $this->load->view('static/body/contact');
        $this->load->view('static/footer');
    }
    
    public function blog()
    {
        $this->load->view('static/header');
        $this->load->view('static/body/blog');
        $this->load->view('static/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
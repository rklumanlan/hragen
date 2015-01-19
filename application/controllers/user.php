<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{
			$this->welcome();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view", $data);
			$this->load->view('footer_view',$data);
		}
	}
	public function welcome()
	{
		$data['lang']=$this->user_model->pop_lang();
		$data['os']=$this->user_model->pop_os();
		$data['fwork']=$this->user_model->pop_fwork();
		$data['title']= 'Welcome';
        $this->load->view('header_view') ;
		$this->load->view('welcome_view', $data);
		$this->load->view('footer_view');
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result)
		{
			$result2=$this->user_model->check_data();
				if($result2)
				{
					
					$data['pinfo']=$this->user_model->pop_pinfo();
					$data['tskills']=$this->user_model->pop_tskills();
					$data['educ']=$this->user_model->pop_educ();
					$data['comp']=$this->user_model->pop_comp();
					$data['pref']=$this->user_model->pop_pref();
					
					$this->load->view('header_view');
					$this->load->view('welcomenew_view',  $data);
					$this->load->view('footer_view');
					
					
				}
				else
				{
					if($this->session->userdata('uname')=='admin'){
						$data['language']=$this->user_model->pop_lang();
						$data['os']=$this->user_model->pop_os();
						$data['fwork']=$this->user_model->pop_fwork();
						
						$this->load->view('header_view');
						$this->load->view('admin_view', $data);
						$this->load->view('footer_view');
					}
					else{
					$this->welcome();
					}
				}
		}
		else        {$this->index(); }
	}
	public function thank()
	{
		$data['title']= 'Thank You';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php', $data);
		$this->load->view('footer_view',$data);
	}
	public function search()
	{
		if($this->session->userdata('logged_in')=='FALSE' || $this->session->userdata('logged_in')=='')
		{
			$this->index();
		}
		else{
			$data['title']= 'Search';
			$data['search']=$this->user_model->search();
			$data['language']=$this->user_model->pop_lang();
			$data['os']=$this->user_model->pop_os();
			$data['fwork']=$this->user_model->pop_fwork();
			
			$this->load->view('header_view');
			$this->load->view('admin_view.php', $data);
			$this->load->view('footer_view');
		}
	}
	public function view()
	{
		if($this->session->userdata('logged_in')=='FALSE' || $this->session->userdata('logged_in')=='')
		{
			$this->index();
		}
		else{
			$data['title']= 'View Applicant';
			
			$data['pinfo']=$this->user_model->pop_pinfo();
			$data['tskills']=$this->user_model->pop_tskills();
			$data['educ']=$this->user_model->pop_educ();
			$data['comp']=$this->user_model->pop_comp();
			$data['pref']=$this->user_model->pop_pref();
			
			$this->load->view('header_view');
			$this->load->view('viewapp_view.php', $data);
			$this->load->view('footer_view');
		}
	}
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->user_model->add_user();
			$this->thank();
		}
	}
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
		
		$newdata = array(
		'uname'   =>'',
		'name'  =>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
	public function preview()
	{	
		if($this->session->userdata('logged_in')=='FALSE' || $this->session->userdata('logged_in')=='')
		{
			$this->index();
		}
		else{
			
	
	
			$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "192",
			'max_width' => "192"
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$upload_data = $this->upload->data(); 
				$file_name =   $upload_data['file_name'];
				
				
				
				$this->user_model->add_pinfo($file_name);
				
				$data['language']=$this->user_model->pop_lang();
				$data['os']=$this->user_model->pop_os();
				$data['fwork']=$this->user_model->pop_fwork();
				
				//$data['numrows']=$this->user_model->numrows();
				
				$data['educ']=$this->user_model->pop_educ();
				
				
				
				$data['title']= 'Welcome';
				
				$this->load->view('header_view') ;
				$this->load->view('preview_view', $data);
				$this->load->view('footer_view');
				
			}
			else
			{
				
				$this->load->view('header_view');
				$this->load->view('welcome_view.php');
				$this->load->view('footer_view');
			}
		}
	
						
      

	
	
		
		
	}
	public function update_info()
	{	
		
	
		
		$data['language']=$this->user_model->pop_lang();
		$data['os']=$this->user_model->pop_os();
		$data['fwork']=$this->user_model->pop_fwork();

		
		
		
		if ($this->input->post('UpdatetpinfoCTR') == "Updatepinfo")
		{
			$this->user_model->update_pinfo();
		}
		switch ($this->input->post('case_update')) {
			case "Updatecomp":
				$this->user_model->update_comp();
				break;
			case "Updateeduc":
				$this->user_model->update_educ();
				break;
			case "Updatepref":
				$this->user_model->update_pref();
				break;
				
			case "inserteduc":
				$this->user_model->insert_educ();
				$data['educ']=$this->user_model->pop_educ();
				break;
		}
		if ($this->input->post('UpdatetpinfoCTR') == "Updatepinfo")
		{
			$this->user_model->update_pinfo();
		}
		
			
	
			
		if ($this->input->post('UpdatetskillsCTR') == "Updatetskills")
		{
			$this->user_model->update_tskills();
		}
		
		
		
		$this->load->view('header_view');
		$this->load->view('preview_view.php',$data);
		$this->load->view('footer_view');

		
	}
	public function edt()
	{	
		$data['pinfo']=$this->user_model->pop_pinfo();
		$data['tskills']=$this->user_model->pop_tskills();
		$data['educ']=$this->user_model->pop_educ();
		$data['comp']=$this->user_model->pop_comp();
		$data['pref']=$this->user_model->pop_pref();
	
		$this->load->view('header_view');
		$this->load->view('edit_view.php',$data);
		$this->load->view('footer_view');	
		

		
	}
	
	
}
?>
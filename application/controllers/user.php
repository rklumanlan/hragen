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
		$data['language']=$this->user_model->pop_lang();
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
					$data['language']=$this->user_model->pop_lang();
					$data['os']=$this->user_model->pop_os();
					$data['fwork']=$this->user_model->pop_fwork();
					
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
	public function welcomenew()
	{
		$data['language']=$this->user_model->pop_lang();
		$data['os']=$this->user_model->pop_os();
		$data['fwork']=$this->user_model->pop_fwork();
		
		$data['pinfo']=$this->user_model->pop_pinfo();
		$data['tskills']=$this->user_model->pop_tskills();
		$data['educ']=$this->user_model->pop_educ();
		$data['comp']=$this->user_model->pop_comp();
		$data['pref']=$this->user_model->pop_pref();
		
		$this->load->view('header_view');
		$this->load->view('welcomenew_view',  $data);
		$this->load->view('footer_view');
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
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
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
				
				$data['pinfo']=$this->user_model->pop_pinfo();
				$data['educ']=$this->user_model->pop_educ();
				$data['comp']=$this->user_model->pop_comp();
				$data['pref']=$this->user_model->pop_pref();
				$data['tskills']=$this->user_model->pop_tskills();
				
				$data['title']= 'Welcome';
				
				$this->load->view('header_view') ;
				$this->load->view('preview_view', $data);
				$this->load->view('footer_view');
				
			}
			else
			{
				$data['language']=$this->user_model->pop_lang();
				$data['os']=$this->user_model->pop_os();
				$data['fwork']=$this->user_model->pop_fwork();
				
				
				$this->load->view('header_view');
				$this->load->view('welcome_view.php', $data);
				$this->load->view('footer_view');
			}
		}
	
						
      

	
	
		
		
	}
	public function update_info()
	{	
		$data['language']=$this->user_model->pop_lang();
		$data['os']=$this->user_model->pop_os();
		$data['fwork']=$this->user_model->pop_fwork();
	
		
		switch ($this->input->post('case_update')) {
			//update only
			
			case "Updatepinfo":
				$this->user_model->update_pinfo();
				break;
			case "Updatetskills":
				$this->user_model->update_tskills();
				break;
			case "Updateeduc":	
				$this->user_model->update_educ();
				break;
			case "Updatecomp":
				$this->user_model->update_comp();
				break;
			
			case "Updatepref":
				$this->user_model->update_pref();
				break;
			
			
			//add additional	
			case "inserteduc":
				$this->user_model->insert_educ();
				break;
			
			case "insertcomp":
				$this->user_model->insert_comp();
				break;
				
			case "insertpref":
				$this->user_model->insert_pref();
				break;
				
			//remove
			case "Rempref":
				$this->user_model->remove_pref();
				break;
			case "Remcomp":
				$this->user_model->remove_comp();
				break;
			case "Remeduc":
				$this->user_model->remove_educ();
				break;

		}
		
			
	
		
		if($this->input->post('page_update')=='main_page'){
		
			$data['pinfo']=$this->user_model->pop_pinfo();
			$data['educ']=$this->user_model->pop_educ();
			$data['comp']=$this->user_model->pop_comp();
			$data['pref']=$this->user_model->pop_pref();
			$data['tskills']=$this->user_model->pop_tskills();
			
			$this->load->view('header_view');
			$this->load->view('welcomenew_view.php',$data);
			$this->load->view('footer_view');
		}
		else{
			$data['pinfo']=$this->user_model->pop_pinfo();
			$data['educ']=$this->user_model->pop_educ();
			$data['comp']=$this->user_model->pop_comp();
			$data['pref']=$this->user_model->pop_pref();
			$data['tskills']=$this->user_model->pop_tskills();
			
			$this->load->view('header_view');
			$this->load->view('preview_view.php',$data);
			$this->load->view('footer_view');
			
			
		}

		
	}
	public function edit_mpage()
	{
		$data['language']=$this->user_model->pop_lang();
		$data['os']=$this->user_model->pop_os();
		$data['fwork']=$this->user_model->pop_fwork();
		
		$data['pinfo']=$this->user_model->pop_pinfo();
		$data['educ']=$this->user_model->pop_educ();
		$data['comp']=$this->user_model->pop_comp();
		$data['pref']=$this->user_model->pop_pref();
		$data['tskills']=$this->user_model->pop_tskills();
		
		$data['title']= 'Edit';
		
		$this->load->view('header_view') ;
		$this->load->view('preview_view', $data);
		$this->load->view('footer_view');
		
	}
	
	
}
?>
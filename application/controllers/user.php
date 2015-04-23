
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
	}
	public function index()

	{

		$data['regclick']="";
		$data['logctr']="";
		$data['regvalidate']="";
		if(($this->session->userdata('user_email')!=""))
		{
			$result2=$this->user_model->check_data();
			if($result2!=true){
				$this->welcome();
			}
			else{
				$this->profile();

			}
		}
		else{

			$data['title']= 'Nemoto Technical Brain Phil Co. Inc.';
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
    $this->load->view('header_view',$data) ;
		$this->load->view('welcome_view', $data);
		$this->load->view('footer_view', $data);
	}
	public function login()
	{
		$data['regclick']="";
		$data['pass']="";
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
					$data['title']="Profile";

					$data['pinfo']=$this->user_model->pop_pinfo();
					$data['tskills']=$this->user_model->pop_tskills();
					$data['educ']=$this->user_model->pop_educ();
					$data['comp']=$this->user_model->pop_comp();
					$data['pref']=$this->user_model->pop_pref();

					$this->load->view('header_view', $data);
					$this->load->view('welcomenew2_view',  $data);
					$this->load->view('footer_view', $data);


				}
				else
				{
					if($this->session->userdata('uname')=='admin'){

						$data['title']="Admin";
						$data['language']=$this->user_model->pop_lang();
						$data['os']=$this->user_model->pop_os();
						$data['fwork']=$this->user_model->pop_fwork();
						$data['results']="";

						$this->load->view('header_view', $data);
						$this->load->view('admin_view', $data);
						$this->load->view('footer_view', $data);
					}
					else{
						$this->welcome();
					}
				}
		}
		else{
			$data['title']= 'Nemoto Technical Brain Phil Co. Inc.';
			$data['logctr']='false';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view", $data);
			$this->load->view('footer_view',$data);
		}
	}
	public function profile()
	{

		$data['pass']="";
		if($this->session->userdata('uname')=='admin'){
			$data['title']="Admin";
			$data['language']=$this->user_model->pop_lang();
			$data['os']=$this->user_model->pop_os();
			$data['fwork']=$this->user_model->pop_fwork();
			$data['results']="";

			$this->load->view('header_view');
			$this->load->view('admin_view', $data);
			$this->load->view('footer_view');
		}
		else {
			if($this->user_model->check_data() == true){
				$data['language']=$this->user_model->pop_lang();
				$data['os']=$this->user_model->pop_os();
				$data['fwork']=$this->user_model->pop_fwork();
				$data['title']="Profile";

				$data['pinfo']=$this->user_model->pop_pinfo();
				$data['tskills']=$this->user_model->pop_tskills();
				$data['educ']=$this->user_model->pop_educ();
				$data['comp']=$this->user_model->pop_comp();
				$data['pref']=$this->user_model->pop_pref();

				$this->load->view('header_view', $data);
				$this->load->view('welcomenew2_view',  $data);
				$this->load->view('footer_view', $data);
			}
			else{
				$data['language']=$this->user_model->pop_lang();
				$data['os']=$this->user_model->pop_os();
				$data['fwork']=$this->user_model->pop_fwork();
				$data['title']="Welcome";

				$data['pinfo']=$this->user_model->pop_pinfo();
				$data['tskills']=$this->user_model->pop_tskills();
				$data['educ']=$this->user_model->pop_educ();
				$data['comp']=$this->user_model->pop_comp();
				$data['pref']=$this->user_model->pop_pref();

				$this->load->view('header_view', $data);
				$this->load->view('welcome_view',  $data);
				$this->load->view('footer_view', $data);

			}
		}
	}
	public function search()
	{
		if($this->session->userdata('logged_in')=='FALSE' || $this->session->userdata('logged_in')=='')
		{
			$this->index();
		}
		else{
			$data['title']= 'Search';
			$data['language']=$this->user_model->pop_lang();
			$data['os']=$this->user_model->pop_os();
			$data['fwork']=$this->user_model->pop_fwork();

			$config["base_url"] = base_url() . "index.php/user/search";
			$config["total_rows"] = $this->user_model->record_count();
			$config["per_page"] = 2;
			$config["uri_segment"] = 3;
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = round($choice);
			$config['first_tag_open'] = $config['last_tag_open']=
			$config['next_tag_open']= $config['prev_tag_open'] =
			$config['num_tag_open'] = '<li>';
      $config['first_tag_close'] = $config['last_tag_close']=
			$config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';

			$config['cur_tag_open'] = "<li><span><b>";
			$config['cur_tag_close'] = "</b></span></li>";

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
			$data["results"] = $this->user_model->fetch_applicants($config["per_page"], $page);
			$data["links"] = $this->pagination->create_links();

			$this->load->view('header_view', $data);
			$this->load->view('admin_view.php', $data);
			$this->load->view('footer_view', $data);

		}
	}



	public function view()
	{
		if($this->session->userdata('logged_in')=='FALSE' || $this->session->userdata('logged_in')=='')
		{
			$this->index();
		}
		else{
			if($this->input->post('viewCTR')!=""){
				$data['title']= 'View Applicant';

				$data['pinfo']=$this->user_model->pop_pinfo();
				$data['tskills']=$this->user_model->pop_tskills();
				$data['educ']=$this->user_model->pop_educ();
				$data['comp']=$this->user_model->pop_comp();
				$data['pref']=$this->user_model->pop_pref();

				$this->load->view('header_view', $data);
				$this->load->view('viewapp_view.php', $data);
				$this->load->view('footer_view', $data);
			}
			else{
				$this->search();

			}

		}
	}
	public function registration()
	{
		$data['regclick']="";
		$data['logctr']="";
		$data['regvalidate']="";
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE && $this->input->post('regbtn'))
		{
				$data['regvalidate']= 'false';
		}
		else
		{
			if($this->input->post('regbtn') &&
			$this->input->post('con_password')!="" &&
			$this->input->post('password')!="" &&
			$this->input->post('email_address')!=""){
					$data['regclick']= 'true';
					$this->user_model->adduser();
			}


		}
		$data['title']= 'Nemoto Technical Brain Phil Co. Inc.';
		$this->load->view('header_view',$data);
		$this->load->view("registration_view", $data);
		$this->load->view('footer_view',$data);
	}
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();

		$newdata2 = array(
		'uname'   =>'',
		'name'  =>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata2 );
		$this->session->sess_destroy();

		$newdata3 = array(
		'name'   =>'',
		'sex'  =>'',
		'age' => '',
		'os'   =>'',
		'fwork'  =>'',
		'lang' => '',
		);
		$this->session->unset_userdata($newdata3 );
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
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('welcome_view', $error);
			}




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

				$data['title']= 'Preview';

				$this->load->view('header_view', $data) ;
				$this->load->view('preview_view', $data);
				$this->load->view('footer_view', $data);

			}
			else
			{
				$data['language']=$this->user_model->pop_lang();
				$data['os']=$this->user_model->pop_os();
				$data['fwork']=$this->user_model->pop_fwork();
				$data['title']="Welcome";


				$this->load->view('header_view', $data);
				$this->load->view('welcome_view.php', $data);
				$this->load->view('footer_view', $data);
			}
		}








	}
	public function update_info()
	{
		$data['pass']="";
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
			$data['title']="Profile";

			$this->load->view('header_view', $data);
			$this->load->view('welcomenew2_view.php',$data);
			$this->load->view('footer_view', $data);
		}
		else{
			$data['pinfo']=$this->user_model->pop_pinfo();
			$data['educ']=$this->user_model->pop_educ();
			$data['comp']=$this->user_model->pop_comp();
			$data['pref']=$this->user_model->pop_pref();
			$data['tskills']=$this->user_model->pop_tskills();
			$data['title']="Preview";

			$this->load->view('header_view', $data);
			$this->load->view('preview_view.php',$data);
			$this->load->view('footer_view', $data);


		}


	}
	public function change()
	{

		$data['cpass_er']="";
		$data['pass']="";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('new_pass', 'New Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('conf_pass', 'Password Confirmation', 'trim|required|matches[new_pass]');

		if($this->session->userdata('logged_in')=='FALSE' || $this->session->userdata('logged_in')=='')
		{
			$this->index();
		}
		else if($this->form_validation->run() == FALSE && $this->input->post('change_pass'))
		{
			$data['title']="Profile";
		}
		else if($this->input->post('change_pass')){
			$data['ch_pass']=$this->user_model->change_pass();
			$data['title']="Profile";
			$data['pass']=$data['ch_pass'];
			if($data['pass']=="false"){
				$data['cpass_er']="Current Password didn't match.";
			}
			else{
				$data['pass']="true";
			}
		}
		else{

			$data['title']="Profile";
		}

		$this->load->view('header_view', $data);
		$this->load->view('changepass_view', $data);
		$this->load->view('footer_view', $data);
	}



}
?>

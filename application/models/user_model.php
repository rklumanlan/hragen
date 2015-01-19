<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
	
	function login($email,$password)
    {	
		if($email=='admin'){
			$this->db->where("uname",$email);
			$this->db->where("pword",$password);
			$query=$this->db->get("admin");
			if($query->num_rows()>0)
			{
				foreach($query->result() as $rows)
				{
					//add all data to session
					$newdata = array(
							'uname' 		=> $rows->uname,
							'name' 	=> $rows->name,
							'logged_in' 	=> TRUE
					   );
				}
					$this->session->set_userdata($newdata);
					return true;       
						 
			}
			
		}
		
			else{
			$this->db->where("email",$email);
			$this->db->where("password",$password);
				
			$query=$this->db->get("user");
			if($query->num_rows()>0)
			{
				foreach($query->result() as $rows)
				{
					//add all data to session
					$newdata = array(
							'user_id' 		=> $rows->id,
							'user_name' 	=> $rows->username,
							'user_email'    => $rows->email,
							'logged_in' 	=> TRUE,
					   );
				}
					$this->session->set_userdata($newdata);
					return true;       
						 
			}
		}
		return false;
    }
	
	function check_data()
    {	$pid=$this->session->userdata('user_id');
		$this->db->where("uid",$pid);
        $query=$this->db->get("pinfo");
        if($query->num_rows()>0)
        {
                return true;
		}
		return false;
		
		
    }
	function pop_lang()
    {	
		$this->db->select('*');
		$this->db->from('languages'); 
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function pop_os()
    {	
		$this->db->select('*');
		$this->db->from('os'); 
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function pop_fwork()
    {	
		$this->db->select('*');
		$this->db->from('fwork'); 
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	
	
	
	
	
	function pop_data()
    {	
		$this->db->select('*');
		$this->db->from('pinfo a'); 
		$this->db->join('tskills b', 'b.uid=a.uid', 'left');
		
		
		//$this->db->select('*');
		//$this->db->from('pinfo');
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	
	
	function pop_pinfo()
    {	
		if($this->input->post('viewCTR')!=NULL)
		{
			$pid=$this->input->post('viewCTR');
		}
		else{
			$pid=$this->session->userdata('user_id');
		}
		
		$this->db->select('*');
		$this->db->from('pinfo');
		$this->db->where('uid', $pid);
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function pop_tskills()
    {	
		
		if($this->input->post('viewCTR')!=NULL)
		{
			$pid=$this->input->post('viewCTR');
		}
		else{
			$pid=$this->session->userdata('user_id');
		}
		
		
		$this->db->select('*');
		$this->db->from('tskills');
		$this->db->where('uid', $pid);
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function pop_educ()
    {	
		
		if($this->input->post('viewCTR')!=NULL)
		{
			$pid=$this->input->post('viewCTR');
		}
		else{
			$pid=$this->session->userdata('user_id');
		}
		
		
		$this->db->select('*');
		$this->db->from('educ');
		$this->db->where('uid', $pid);
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function pop_comp()
    {	
		
		if($this->input->post('viewCTR')!=NULL)
		{
			$pid=$this->input->post('viewCTR');
		}
		else{
			$pid=$this->session->userdata('user_id');
		}
		
		
		$this->db->select('*');
		$this->db->from('comp');
		$this->db->where('uid', $pid);
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function pop_pref()
    {	
		
		if($this->input->post('viewCTR')!=NULL)
		{
			$pid=$this->input->post('viewCTR');
		}
		else{
			$pid=$this->session->userdata('user_id');
		}
		
		
		$this->db->select('*');
		$this->db->from('pref');
		$this->db->where('uid', $pid);
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query; // just return $query
		}
	

    }
	function search()
    {	
		$name=trim($this->input->post('name'));
		$age=trim($this->input->post('age'));
		$sex=trim($this->input->post('sex'));
		
		$language=$this->input->post('lang');
		$os=$this->input->post('os');
		$fwork=$this->input->post('fwork');
		
		
		
		
		$query='';
		$qry='';
		
		if($name!=''){
		$this->db->like('fname', $name); 
		}
		if($age!='-'){
		$this->db->where('age', $age);
		}
		if($sex!='-'){
		$this->db->where('sex', $sex);
		}
		for($i=0;$i<count($os);$i++)
		{
				$osl = $os[$i];
				if($osl!='')
				{
				$this->db->where("FIND_IN_SET('".$osl."', os_code)");
				}
		}
		for($i=0;$i<count($language);$i++)
		{
				$languagel = $language[$i];
				if($languagel!='')
				{
				$this->db->where("FIND_IN_SET('".$languagel."', lang_code)");
				}
		}
		for($i=0;$i<count($fwork);$i++)
		{
				$fworkl = $fwork[$i];
				if($fworkl!='')
				{
				$this->db->where("FIND_IN_SET('".$fworkl."', fwork_code)");
				}
		}
		
		
		$this->db->select('*');
		$this->db->from('pinfo');
		$this->db->join('tskills', 'pinfo.uid = tskills.uid');
		$rs = $this->db->get(); 
		if ($rs->num_rows() > 0)
		{
			return $rs; // just return $query
		}

    }
	
	
	
	
	
	
	
	
	
	public function add_user()
	{
		$data=array(
			'username'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email_address'),
			'password'=>md5($this->input->post('password'))
			);
		$this->db->insert('user',$data);
	}

	
	
	public function add_pinfo($file_name)
	{
		
		
		$data=array(
			'uid'=>$this->session->userdata('user_id'),
			'fname'=>$this->input->post('fname'),
			'mname'=>$this->input->post('mname'),
			'lname'=>$this->input->post('lname'),
			'address'=>$this->input->post('add'),
			'city'=>$this->input->post('prov_mun'),
			'sex'=>$this->input->post('sex'),
			'age'=>$this->input->post('age'),
			'imgfname'=>$file_name
			);
		$this->db->insert('pinfo',$data);
		
		$lang=$this->input->post('lang');
		$os=$this->input->post('os');
		$fwork=$this->input->post('fwork');
		
		
		$pid=$this->session->userdata('user_id');
		
		if($lang!=NULL){
			$langval=implode(',', $lang);
		}
		else{
			$langval="";
		}
		if($os!=NULL){
			$osval=implode(',', $os);
		}
		else{
			$osval="";
		}
		if($fwork!=NULL){
			$fworkval=implode(',', $fwork);
		}
		else{
			$fworkval="";
		}
		$data = array('lang_code'=>$langval,'fwork_code'=>$fworkval,'os_code'=>$osval,'uid'=>$pid);
		$this->db->insert('tskills', $data); 
				
		
		
		
		
	
		
	
		for ($a=1;$a<=4;$a++)
		{
			${"dateY1" . $a}=$this->input->post('DAtty1'.$a);
			${"dateY2" . $a}=$this->input->post('DAtty2'.$a);
			if(${"dateY1" . $a} != "-" && ${"dateY1" . $a} != "-" )
			{
				$data3=array(
				'uid'=>$this->session->userdata('user_id'),
				'school'=>$this->input->post('school'.$a),
				'yearFrom'=>$this->input->post('DAtty1'.$a),
				'yearTo'=>$this->input->post('DAtty2'.$a),
				'fstudy'=>$this->input->post('mjr'.$a),
				'degree'=>$this->input->post('degree'.$a),
				'educCTR'=>$a,
				'desc'=>$this->input->post('EAdes'.$a)
				);
				$this->db->insert('educ',$data3);
			}
		}
		
		for ($b=1;$b<=4;$b++)
		{
			if($this->input->post('mon1'.$b) != 0 || $this->input->post('mon2'.$b) != 0 || 
			$this->input->post('TPy1'.$b)!= 0 || $this->input->post('TPy2'.$b) != 0 )
			{
				$data4=array(
					'uid'=>$this->session->userdata('user_id'),
					'compname'=>$this->input->post('compname'.$b),
					'title'=>$this->input->post('title'.$b),
					'prdesc'=>$this->input->post('PEdes'.$b),
					'loc'=>$this->input->post('loc'.$b),
					'month1'=>$this->input->post('mon1'.$b),
					'month2'=>$this->input->post('mon1'.$b),
					'year1'=>$this->input->post('TPy1'.$b),
					'year2'=>$this->input->post('TPy2'.$b)
					);
				$this->db->insert('comp',$data4);
			}
		}
		for ($c=1;$c<=3;$c++)
		{
			if($this->input->post('prname'.$c)!="" || $this->input->post('cnum'.$c)!="" || 
			$this->input->post('cemail'.$c)!="")
			{
				$data5=array(
					'uid'=>$this->session->userdata('user_id'),
					'pname'=>$this->input->post('prname'.$c),
					'cnum'=>$this->input->post('cnum'.$c),
					'prefCTR'=>$c,
					'cemail'=>$this->input->post('cemail'.$c)
					);
				$this->db->insert('pref',$data5);
			}
		}
	}
	
	function update_pinfo()
    {	
		$pid=$this->session->userdata('user_id');
		$data = array(
			'fname'=>$this->input->post('fname'),
			'mname'=>$this->input->post('mname'),
			'lname'=>$this->input->post('lname'),
			'address'=>$this->input->post('add'),
			'city'=>$this->input->post('prov_mun'),
			'sex'=>$this->input->post('sex'),
			'age'=>$this->input->post('age')
			);
	
		$this->db->where('uid', $pid);
		$this->db->update('pinfo', $data); 

	}
	
	function insert_educ()
    {	
			
			
			$data2 = array( 
				'uid'=>$this->session->userdata('user_id'),
				'school'=>$this->input->post('school'),
				'yearFrom'=>$this->input->post('DAtty1'),
				'yearTo'=>$this->input->post('DAtty2'),
				'fstudy'=>$this->input->post('mjr'),
				'degree'=>$this->input->post('degree'),
				'educCTR'=>$this->input->post('addeducCtr'),
				'desc'=>$this->input->post('EAdes')
				);
				
			$this->db->insert('educ', $data2); 
			
	
	}
		
	function update_educ()
    {	
		for ($a=1;$a<=$this->input->post('educCTR');$a++)
		{
			
			
			
			$data2 = array( 
				'school'=>$this->input->post('school'.$a),
				'yearFrom'=>$this->input->post('DAtty1'.$a),
				'yearTo'=>$this->input->post('DAtty2'.$a),
				'fstudy'=>$this->input->post('mjr'.$a),
				'degree'=>$this->input->post('degree'.$a),
				'desc'=>$this->input->post('EAdes'.$a)
				);
				
			$this->db->update('educ', $data2); 	
			$this->db->where('educCTR',$a);
			$this->db->where('uid',$this->session->userdata('user_id'));
			
			

		}
	
	}
	function update_comp()
    {	
		for ($b=1;$b<=$this->input->post('compCTR');$b++)
		{
			
			
			$data4=array(
					'uid'=>$this->session->userdata('user_id'),
					'compname'=>$this->input->post('compname'.$b),
					'title'=>$this->input->post('title'.$b),
					'prdesc'=>$this->input->post('PEdes'.$b),
					'loc'=>$this->input->post('loc'.$b),
					'month1'=>$this->input->post('mon1'.$b),
					'month2'=>$this->input->post('mon1'.$b),
					'year1'=>$this->input->post('TPy1'.$b),
					'year2'=>$this->input->post('TPy2'.$b)
				);
			
			$this->db->update('comp', $data4); 	
			$this->db->where('compCTR',$b);
			$this->db->where('uid',$this->session->userdata('user_id'));
			
			
			
			
		}
		
	
	}
	function update_pref()
    {	
		for ($c=1;$c<=$this->input->post('prefCTR');$c++)
		{
			if($this->input->post('prname'.$c)!="" || $this->input->post('cnum'.$c)!="" ||
			$this->input->post('cemail'.$c)!="")
				{
					$prefdata=array(
						'pname'=>$this->input->post('prname'.$c),
						'cnum'=>$this->input->post('cnum'.$c),
						'cemail'=>$this->input->post('cemail'.$c)
						);
					$this->db->update('pref',$prefdata); 	
					$this->db->where('prefCTR',$c);
					$this->db->where('uid',$this->session->userdata('user_id'));
			
				}
		}
	
	}
	function update_tskills()
    {	
		$lang=$this->input->post('lang');
		$os=$this->input->post('os');
		$fwork=$this->input->post('fwork');
		if($lang!=NULL){
			$langval=implode(',', $lang);
		}
		else{
			$langval="";
		}
		if($os!=NULL){
			$osval=implode(',', $os);
		}
		else{
			$osval="";
		}
		if($fwork!=NULL){
			$fworkval=implode(',', $fwork);
		}
		else{
			$fworkval="";
		}
		$data = array('lang_code'=>$langval,'fwork_code'=>$fworkval,'os_code'=>$osval);
		$this->db->insert('tskills', $data); 
		$this->db->where('uid', $this->session->userdata('user_id'));
				
		
		
		
		
		
		
		
		
	
	}
			
			
		
		
}

?>
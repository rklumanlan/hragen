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
			return $query->result(); // just return $query
		}
		else
		{
			return array();
		}
	

    }
	function pop_os()
    {	
		$this->db->select('*');
		$this->db->from('os'); 
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
		}
	

    }
	function pop_fwork()
    {	
		$this->db->select('*');
		$this->db->from('fwork'); 
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
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
		$this->db->where('uid', $pid);
		$this->db->from('pinfo');
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
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
		$this->db->where('uid', $pid);
		$this->db->from('tskills');
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
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
		$this->db->where('uid', $pid);
		$this->db->from('educ');
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
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
			return $query->result(); // just return $query
		}
		else
		{
			return array();
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
		$this->db->where('uid', $pid);
		$this->db->from('pref');
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
		}
		
	

    }
	
	function query(){
		if($this->input->post('search')){
			$this->session->set_userdata(array(
					'name'     => $this->input->post('name'),
					'sex'      => $this->input->post('sex'),
					'age'      => $this->input->post('age'),
					'lang'     => $this->input->post('lang'),
					'os'   => $this->input->post('os'),
					'fwork'   => $this->input->post('fwork')
			));
			
			
		}
		
		$name=$this->session->userdata('name');
		$age=$this->session->userdata('age');
		$sex=$this->session->userdata('sex');
		
		$language=$this->session->userdata('lang');
		$os=$this->session->userdata('os');
		$fwork=$this->session->userdata('fwork');
		
		
		if($name!=''){
		
		$this->db->like('pinfo.fname', $name); 
		}
		if($age!='-'){
		$this->db->where('pinfo.age', $age);
		}
		if($sex!='-'){
		$this->db->where('pinfo.sex', $sex);
		}
		for($i=0;$i<count($os);$i++)
		{
			if($os!=NULL){
				$osl = $os[$i];
				$this->db->where("FIND_IN_SET('".$osl."', tskills.os_code)");
			}
		}
		for($i=0;$i<count($language);$i++)
		{
			if($language!=NULL){
				$languagel = $language[$i];
				$this->db->where("FIND_IN_SET('".$languagel."', tskills.lang_code)");
			}
		}
		for($i=0;$i<count($fwork);$i++)
		{
			if($fwork!=NULL){
				$fworkl = $fwork[$i];
				$this->db->where("FIND_IN_SET('".$fworkl."', tskills.fwork_code)");
			}
		}
		
		
		$this->db->select('*');
		$this->db->from('pinfo');
		$this->db->join('tskills', 'pinfo.uid = tskills.uid');
	}
	function record_count() {
		$this->query();
        return $this->db->count_all_results();
    }
 	
    function fetch_applicants($limit, $start) {
		$this->db->limit($limit, $start);
		$this->query();
        $query = $this->db->get();
 
       if ($query->num_rows() > 0)
		{
			return $query->result(); // just return $query
		}
		else
		{
			return array();
		}
   }
	
	
	function adduser()
    {	
		$this->db->where("username",$this->input->post('user_name'));
		$this->db->where("email",trim($this->input->post('email_address')));
		$this->db->where("password",md5($this->input->post('password')));
		$this->db->select('*');
		$this->db->from('user');
		
		
        $query=$this->db->get();
		$query2= $query->result();
        if($query->num_rows()>0)
        {
             return TRUE;
		}
		else{
			$data=array(
				'username'=>$this->input->post('user_name'),
				'email'=>$this->input->post('email_address'),
				'password'=>md5($this->input->post('password'))
				);
			$this->db->insert('user',$data);
			return FALSE;
		}
		
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
			
		$query = $this->db->get_where('pinfo',$data);
		if($query->num_rows()>0)
        {
             return FALSE;
		}
		else{
			$this->db->insert('pinfo',$data);
		}
			
			
		
		
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
					'year2'=>$this->input->post('TPy2'.$b),
					
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
					'cemail'=>$this->input->post('cemail'.$c)
					);
				$this->db->insert('pref',$data5);
			}
		}
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
			'desc'=>$this->input->post('EAdes')
			);
		$query = $this->db->get_where('educ',$data2);	
		if($query->num_rows()>0)
        {
             return False;
		}
		else{
			$this->db->insert('educ', $data2); 
		}
	
	}
	
	function insert_pref()
    {	
		$prefdata=array(
			'pname'=>$this->input->post('prname'),
			'cnum'=>$this->input->post('cnum'),
			'cemail'=>$this->input->post('cemail'),
			'uid'=>$this->session->userdata('user_id')
			);
		$query = $this->db->get_where('pref',$prefdata);	
		if($query->num_rows()>0)
        {
             return False;
		}
		else{
			$this->db->insert('pref',$prefdata); 	
		}

	}
	
	function insert_comp()
    {	
		$data4=array(
				'uid'=>$this->session->userdata('user_id'),
				'compname'=>$this->input->post('compname'),
				'title'=>$this->input->post('title'),
				'prdesc'=>$this->input->post('PEdes'),
				'loc'=>$this->input->post('loc'),
				'month1'=>$this->input->post('mon1'),
				'month2'=>$this->input->post('mon1'),
				'year1'=>$this->input->post('TPy1'),
				'year2'=>$this->input->post('TPy2')
			);
		$query = $this->db->get_where('comp',$data4);	
		if($query->num_rows()>0)
        {
             return False;
		}
		else{
			$this->db->insert('comp', $data4); 	
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
		
	function update_educ()
    {	
		$educCTR=$this->input->post('ctr_update');
		$data2 = array( 
			'school'=>$this->input->post('school'.$educCTR),
			'yearFrom'=>$this->input->post('1DAtty'.$educCTR),
			'yearTo'=>$this->input->post('2DAtty'.$educCTR),
			'fstudy'=>$this->input->post('mjr'.$educCTR),
			'degree'=>$this->input->post('degree'.$educCTR),
			'desc'=>$this->input->post('EAdes'.$educCTR)
			);
		$this->db->where('uid',$this->session->userdata('user_id'));	
		$this->db->where('educ_id',$educCTR);
		$this->db->update('educ', $data2); 	
		
			
	}
	function update_comp()
    {	
		$compCTR=$this->input->post('ctr_update');
		$data3 = array( 
				'compname'=>$this->input->post('compname'.$compCTR),
				'title'=>$this->input->post('title'.$compCTR),
				'prdesc'=>$this->input->post('PEdes'.$compCTR),
				'loc'=>$this->input->post('loc'.$compCTR),
				'month1'=>$this->input->post('1mon'.$compCTR),
				'month2'=>$this->input->post('2mon'.$compCTR),
				'year1'=>$this->input->post('1TPy'.$compCTR),
				'year2'=>$this->input->post('2TPy'.$compCTR),
			);
		$this->db->where('comp_id',$compCTR);
		$this->db->where('uid',$this->session->userdata('user_id'));
		$this->db->update('comp', $data3); 	
		
	
	}
	
	function update_pref()
    {	
		$prefCTR=$this->input->post('ctr_update');
		$data4 = array( 
			'pname'=>$this->input->post('prname'.$prefCTR),
			'cnum'=>$this->input->post('cnum'.$prefCTR),
			'cemail'=>$this->input->post('cemail'.$prefCTR),
			);
		$this->db->where('prefid',$prefCTR);
		$this->db->where('uid',$this->session->userdata('user_id'));	
		$this->db->update('pref', $data4); 	
				
		
	
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
		
		$this->db->select('*');
		$this->db->from('tskills'); 
		$query = $this->db->get(); 
	
		if ($query->num_rows() > 0)
		{
			$data = array('lang_code'=>$langval,'fwork_code'=>$fworkval,'os_code'=>$osval);
			$this->db->where('uid', $this->session->userdata('user_id'));
			$this->db->update('tskills', $data); 
			
		}
		else
		{
			$data = array('lang_code'=>$langval,'fwork_code'=>$fworkval,'os_code'=>$osval,
				'uid'=>$this->session->userdata('user_id'));
			$this->db->insert('tskills', $data); 
		}
	
	}
	
	function remove_pref()
    {	
		$prefCTR=$this->input->post('ctr_update');
		$this->db->where('prefid',$prefCTR);
		$this->db->where('uid', $this->session->userdata('user_id'));
		$this->db->delete('pref'); 
		
	
	}
	function remove_comp()
    {	
		$prefCTR=$this->input->post('ctr_update');
		$this->db->where('comp_id',$prefCTR);
		$this->db->where('uid', $this->session->userdata('user_id'));
		$this->db->delete('comp'); 
		
	
	}
	function remove_educ()
    {	
		$prefCTR=$this->input->post('ctr_update');
		$this->db->where('educ_id',$prefCTR);
		$this->db->where('uid', $this->session->userdata('user_id'));
		$this->db->delete('educ'); 
		
	
	}
	/*public function record_count() {
		$name=trim($this->input->post('name'));
		$age=trim($this->input->post('age'));
		$sex=trim($this->input->post('sex'));
		
		$language=$this->input->post('lang');
		$os=$this->input->post('os');
		$fwork=$this->input->post('fwork');
		
		if($name!=''){
		$this->db->like('fname', $name); 
		}
		if($age!='-'){
		$this->db->like('age', $age);
		}
		if($sex!='-'){
		$this->db->like('sex', $sex);
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
		
		return $this->db->count_all_results();
		
		
    }*/
			
			
		
		
}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataOPs extends CI_Model {

  public function __construct()
   {
		parent::__construct();
		
   }
   
   public function getThrough($usen,$passn)
   {
		$req=$this->db->select('*')
					  ->from('LoginAccs')
					  ->where('username',$usen)
					  ->where('password1',$passn);
		$rem=$this->db->count_all_results();
		return $rem;
   }
   
    public function getChecker1($userna)
   {
		$req=$this->db->select('*')
					  ->from('LoginAccs')
					  ->where('username',$userna);
		$rem=$this->db->count_all_results();
		return $rem;
   }
   
   public function setUserDet1($entries)
   {
		$data1 = array(
			'fname1' => $entries['fullN'] ,
			'gender1' => $entries['gender'] ,
			'age1' => $entries['ageV'] ,
			'raddr1' => $entries['resAdd'] ,
			'contact1' => $entries['contN'] ,
			'userna1' => $entries['userN'] ,
			'passwr1' => $entries['passC']
		);
		$data2 = array(
			'username' => $entries['userN'] ,
			'password1' => $entries['passC']
		};
		$this->db->insert('reg_members', $data1); 
		$this->db->insert('loginaccs', $data2);	
		return $data1;	
   }
   
      public function getCSVText()
   {
		$this->load->dbutil();
		$query = $this->db->query("show fields from coigexg1.LoginAccs");
		$delimiter = ",";
		$newline = "\r\n";
		$csvt=$this->dbutil->csv_from_result($query, $delimiter, $newline); 
		return $csvt;
   }
}


/* End of file DataOPs.php */
/* Location: ./application/models/DataOPs.php */
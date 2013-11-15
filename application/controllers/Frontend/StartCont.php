<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StartCont extends CI_Controller {

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
	public function index()
	{	
		/*$this->load->model('DataOps');
		$dat['csvtext']=$this->DataOps->getCSVText();
		$ccc = rand(10,1000);
		$fn="aaa".$ccc.".csv";
		write_file($fn, $dat['csvtext']);*/
		$dat['mainc1P']='Frontend/CSVText';
		$dat['maincontP']='Frontend/MainContent';
		$this->load->view('Frontend/StartPage',$dat);
	}
	
	public function validatori()
	{
		$dat['usen']=$this->input->post('userna1');
		$dat['passw']=$this->input->post('passwr1');
		$this->load->model('DataOps');
		$md=$this->DataOps->getThrough($dat['usen'],$dat['passw']);
		if($md=='1'){
			$dat['maincontP']='Frontend/LoginVali';
		}
		else{
			$dat['maincontP']='Frontend/LoginError';
		}
		$this->load->view('Frontend/StartPage',$dat);
	}
	
	public function userChecker()
	{
		$userna=$this->input->get('usern');
		$this->load->model('DataOps');
		$md=$this->DataOps->getChecker1($userna);
		if($md=='0'){
			$resp=1;
		}
		else{
			$resp=2;
		}
		echo $resp;
	}
	
	public function regist()
	{	
		$dat['maincontP']='Frontend/Registrator';
		$this->load->view('Frontend/StartPage',$dat);
	}
	
	public function regDetails()
	{	
		$dat1['fullN']=$this->input->post('fullna1');
		$dat1['gender']=$this->input->post('gender1');
		$dat1['ageV']=$this->input->post('ager1');
		$dat1['resAdd']=$this->input->post('address1');
		$dat1['contN']=$this->input->post('contact1');
		$dat1['userN']=$this->input->post('userna1');
		$dat1['passC']=$this->input->post('passwr1');
		$this->load->model('DataOps');
		$md=$this->DataOps->setUserDet1($dat1);
		if($md){
			$dat['results']=$md;
			$dat['maincontP']='Frontend/UserCreat';
			$this->load->view('Frontend/StartPage',$dat);
		}
	}
}

/* End of file StartCont.php */
/* Location: ./application/controllers/Frontend/StartCont.php */
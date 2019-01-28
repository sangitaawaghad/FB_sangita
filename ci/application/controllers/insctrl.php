<?php
class insctrl extends CI_Controller
{
	public function index()
	{
		  $this->load->model('dbm');
		  $result['r']=$this->dbm->getRecord();
          $this->load->view('register',$result);	
	}
	public function save()
	{
		$this->load->helper("form");
	   $name=$this->input->get('name');
	   $contact=$this->input->get('contact');
	   $email=$this->input->get('email');
	   $this->load->model('dbm');
	   $v=$this->dbm->saveRecord($name,$email,$contact);
	   if($v>0)
	   {
	      echo"Record Inserted...";
		  $this->load->model('dbm');
		  $result['r']=$this->dbm->getRecord();
          $this->load->view('register',$result);		  
	   }
	   else
	   {
	      echo"Record not Inserted...";
	   }
	}
}
?>
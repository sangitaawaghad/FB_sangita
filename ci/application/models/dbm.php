<?php
class dbm extends CI_Model
{
   public function saveRecord($n,$e,$c)
   {
      $data=array( 'name'=>$n,
				   'email'=>$e,
				   'contact'=>$c);
		$this->load->database();
		$v=$this->db->insert('employee',$data);
		return $v;
   }
   public function getRecord()
   {
	   $this->load->database();
	   $query=$this->db->get('employee');
	   return $query->result();
   }
}
?>
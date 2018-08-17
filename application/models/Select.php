<?php
class Select extends CI_Model {
 
function getPosts(){
	$this->load->database(); // load database
	$q = $this->db->query("SELECT * FROM vehicle");
	return $q->result();
}
function add($data)
        {
        	$this->load->database();

        	$count = $this->db->insert('customer', $data);
        	if($count>0)
        	{
        		return true;
        	}
        	else
        	{
        		return false;
        	}
        }
 
}
?>

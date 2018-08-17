<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Main extends CI_Controller {

	function __Construct(){
  parent::__Construct ();
   
   $this->load->model('Select'); // load model
}
	
	public function index()
	{
		 $data['posts'] = $this->Select->getPosts();
		$this->load->view('main_page', $data);
		
	}

	public function faq()
	{
		$this->load->view('faq');

	}
	public function about()
	{
		$this->load->view('about');
	}
	public function search_result()
	{
		 $data['posts'] = $this->Select->getPosts();
		$this->load->view('search_result', $data);
	}
	public function book_vehicle()
{
	$data['page']='vehicle/booking';
	$this->load->view('booking',$data);
}

	public function addCustomers()
        {
        	
            $name = $this->input->post('fn');
            $address = $this->input->post('ad');
			$contact_number = $this->input->post('cn');
            $age = $this->input->post('age');
            
              $data = array(
                     'Name'=>$name,
                     'Address'=>$address,
                     'contact_number'=>$contact_number,
                     'age'=>$age                    
                    );

              $this->load->model('Select');
              if($this->Select->add($data))
              {
              	base_url('index.php/main/booked');
				}
				else
				{
					echo "Not done";
				}


        }
     public function booked()
     {
     	$this->load->view('booked');
     }

}

?>
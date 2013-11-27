<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('user_model','user');
	}//end construct()

	public function index()
	{

		$data['page'] = 'home_view';
		$this->load->view('page_holder',$data);

	}//end index()


	public function register()
	{

		$gender = $this->input->post('gender');
	    $age = $this->input->post('age');
	    $weight = $this->input->post('weight');
	    $past_history = $this->input->post('past_history');
	    $desired_amount = $this->input->post('desired_amount');
	    $limit_amount = $this->input->post('limit_amount');
	    $hospital_id = $this->input->post('hospital_id');

	   $status = $this->user->insertRecord($gender, $weight, $age, $past_history, $hospital_id, $desired_amount, $limit_amount);

	   echo json_encode(array('status' => $status));

	}//end add_entry()

}
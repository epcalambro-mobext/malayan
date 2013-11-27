<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('user_model');
	}//end construct()

	public function index()
	{

		$data['page'] = 'home_view';
		$this->user_model->insertRecord('12', '23', '23', 'adsadsadasd', '1');
		$this->load->view('page_holder',$data);

	}//end index()

}
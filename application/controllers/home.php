<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}//end construct()

	public function index()
	{

		$data['page'] = 'home_view';
		$this->load->view('page_holder',$data);

	}//end index()

}
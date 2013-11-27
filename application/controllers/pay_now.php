<?php
	if(! DEFINED('BASEPATH')) exit("No direct access allowed");

	class Pay_Now extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->load->view('header');
			$this->load->view('pay_now');
			$this->load->view('footer');
		}

		function gateway()
		{
			$this->load->view('header');
			$this->load->view('pay_gateway');
			$this->load->view('footer');
		}
	}
?>
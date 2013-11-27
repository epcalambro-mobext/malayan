<?php
	if(! DEFINED('BASEPATH')) exit("No direct access allowed");

	class User_Model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->database();
		}

		public function insertRecord($gender, $weight, $age, $mHistory, $hId, $desiredAmount, $limitAmount)
		{
			$data = array(
					'U_Gender' => $gender,
					'U_Weight' => $weight,
					'U_Age' => $age,
					'U_Desired_Amount' => $desiredAmount,
					'U_Limit_Amount' => $limitAmount,
					'U_Medical_History' => $mHistory,
					'H_Id' => $hId 
					);

			if($this->db->insert('tbl_users', $data))
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
<?php
	if(! DEFINED('BASEPATH')) exit("No direct access allowed");

	class Hospital_Model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->database();
		}

		public function getHospitals()
		{
			$hospitalList = $this->db->query('select * from tbl_hospitals');

			if($hospitalList->num_rows() > 0)
			{
				foreach($hospitalList->result() as $value)
				{
					$data[] = array(
							'H_Address' => $value->H_Address,
							'H_Name' => $value->H_Name,
							'H_Long' => $value->H_Long,
							'H_Lat' => $value->H_Lat,
							'H_City' => $value->H_City,
							'H_Contact' => $value->H_Contact
 							);
				}
				return $data;
			}
			else
			{
				return false;
			}

		}
	}
?>
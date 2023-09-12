<?php 
class User_Model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function register($Name, $email, $password, $address, $mobile, $gender) {
		$this->load->database();
		$data = array(
			'name' => $Name,
			'email' => $email,
			'password' => $password,
			'address' => $address,
			'contact_no' => $mobile,
			'gender' => $gender
		);
		return $this->db->insert('registration_details', $data);
	}
	function add_travel_details($email, $location, $name, $no_of_people, $aadhar_no, $age, $price) {
		$this->load->database();
		$data = array(
			'email' => $email,
			'location' => $location,
			'name' => $name,
			'no_of_people' => $no_of_people,
			'aadhar_no' => $aadhar_no,
			'age' => $age,
			'price' => $price
		);
		return $this->db->insert('travel_booking', $data);
	}

	function getUserDetails($email) {
		$this->load->database();
		$this->db->where("email", $email);
		$query = $this->db->get('registration_details');
		return $query->row();
	}

	
}
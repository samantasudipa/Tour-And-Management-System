<?php
class admin_model extends CI_Model {
	function adminLogin($email, $pass) {
		$this->db->where('email', $email);
		$this->db->where('password', $pass);
		$this->db->where('role', 1);
		$query = $this->db->get("registration_details");
		if($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	function getUserDatails() {
		$query = $this->db->get('registration_details');
		return $query->result();
	}
	function deleteUser($userID) {
		$this->db->where('serial_no', $userID);
		return $this->db->delete('registration_details');
	}
	function getBookingDatails() {
		$query = $this->db->get('booking_details');
		return $query->result();
	}
	function getFeedbackDatails() {
		$query = $this->db->get('feedback');
		return $query->result();
	}
	function deleteFeedback($userID) {
        $this->db->where('user_id', $userID);
		return $this->db->delete('feedback');
	}

	function get_travel_booking() {
		$query = $this->db->get('travel_booking');
		return $query->result();
	}
}
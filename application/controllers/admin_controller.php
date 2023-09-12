<?php
class admin_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	function adminlogin() {
  	   $this->load->view('admin_login');
  	   if($this->input->post('submit')) {
  	   	if($this->admin_model->adminLogin($this->input->post('email1'), md5($this->input->post('password')))) {
  	   		redirect('admin_controller/adminHome');
  	   	} else {
  	   		echo "<script>alert('login Faliure')</script>";
            redirect('admin_controller/adminlogin');
  	   	}
  	   }
    }

    function adminHome() {
    	$this->load->view('adminhome');

        if($_SESSION['role'] != 1) {
            redirect('User_Controller/navigation');
        }
    }
    function userDetails() {
    	$data['userDetails'] = $this->admin_model->getUserDatails();
    	$this->load->view('userDetails', $data);
    }
    function deleteUser($userID) {
    	if($this->admin_model->deleteUser($userID)) {
            redirect('admin_controller/userDetails');
    	} else {
            redirect('admin_controller/userDetails');
    	}
    }
    function bookingDetails() {
    	$data['travel_booking'] = $this->admin_model->get_travel_booking();
    	$this->load->view('bookingDetails', $data);
    }
    function feedbackDetails() {
    	$data['feedbackDetails'] = $this->admin_model->getFeedbackDatails();
    	$this->load->view('feedbackDetails', $data);
    }
    function deleteFeedback($userID) {
        if($this->admin_model->deleteFeedback($userID)) {
            redirect("Home_Controller/feedback_display");
        } else {
            redirect("Home_Controller/feedback_display");
        }
    }
}

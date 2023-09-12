<?php 
class MailSend extends CI_Controller
{
	function index()
	{
		$this->load->view("mailform");
	}
	function sent()
	{
		$config= array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => 'tour&travels@gmail.com',
						'smtp_pass' => 'tour&travels',
						'charset' => 'iso-8859-1',
						'mailtype'=> 'html',
						'wordwrap'=> TRUE
					  );
		$to= $this->input->post("email");
		$sub= $this->input->post("subject");
		$body= $this->input->post("body");

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$this->email->from('tour&travels@gmail.com','');
		$this->email->to($to);
		$this->email->subject($sub);
		$this->email->message($body);

		if($this->email->send())
		{
			echo "mail send successfully";
		}
		else	
		{
			echo "mail not sent";
		}	
		//$this->load->view('mailform');
		//$email= $this->input->post('email');
		//$subject= $this->input->post('subject');
		//$body= $this->input->post('body');
		//echo $email,$subject,$body;
	}
}
?>
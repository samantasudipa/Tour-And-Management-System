<?php
class User_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->library('session');
		$this->load->library("paypal_lib");
		$this->load->model("User_Model");
	}
	//=====================login========================================// 
  
 

	function userlogin()
	{
		$this->load->view('user_login');
		if($this->input->post('submit'))
		{
			$email =$this->input->post('email1');
			$password=md5($this->input->post('password'));

            $userDetails = $this->User_Model->getUserDetails($email);

			if($this->Home_model->user_loginrecords($email,$password))
			{
				$_SESSION['email'] = $email;
				$_SESSION['role'] = $userDetails->role;
				echo "<script>alert('login successfully')</script>";
	            echo "<script>window.location.href='navigation'</script>";
			}
			else
			{
				echo "<script>alert('login Faliure')</script>";
	            echo "<script>window.location.href='userlogin'</script>";
			}
		}
	}

	function logout()
	{
				session_destroy();
				echo "<script>alert('logout  successfully')</script>";
	            echo "<script>window.location.href='userlogin'</script>";
	}
	//=========================logout==============================================//
	function navigation()
	{
		if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
		$this->load->view('home', $data);

	}
	
	//-------------------------------user_register------------------------------------------//
	function savedata()
	{
    	$this->load->view('new_register');
		
            if($this->input->post('Register')) {

		        $Name = $this->input->post("Name");
                $email =$this->input->post("email");
                $password =md5($this->input->post("password"));
                $address =$this->input->post("address");
                $mobile =$this->input->post("mobile");
                $gender =$this->input->post("gender");
        
                if($this->User_Model->register($Name, $email, $password, $address, $mobile, $gender)) {
                	$_SESSION['email'] = $email;
				echo "<script>alert('Register successfully')</script>";
	            echo "<script>window.location.href='navigation'</script>";
                } else {
                	redirect("User_Controller/new_register");
                }
	        }
	}

	function about()
	{
		$this->load->view('about');
	}
	function contact_us()
	{
		$this->load->view('contact_us');
		if($this->input->post('submit'))
		{
			$name= $this->input->post('Name');
			$email= $this->input->post('email');
			$address= $this->input->post('address');	
			$phone= $this->input->post('mobile');			
			$query= $this->input->post('query');
			
			$data=array('name'=>$name,'email'=>$email,'address'=>$address,'phone_no'=>$phone,'query'=>$query);

			if($this->Home_model->contact_data($data))
			{
				echo "<script>alert('submitted  successfully')</script>";
	            echo "<script>window.location.href='contact_us'</script>";
			}
			else
			{
				echo "<script>alert('Not submitted')</script>";
	            
			}	
		
    	}
	}


	function userdata()
	{
		$this->load->view('user_home');
	}
    function itinerary()
    {
    	$this->load->view('itn');
    }

    //===============================user hotel booking=======================================//
	function user_booking()
	{
		$result['data']=$this->Home_model->booking_display_data();
		$this->load->view('user_booking_display.php',$result);
	}
	function buy()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);



      $this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}

function buy1()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);


		$this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}
	function buy2()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);
		

		$this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}
	public function pay($item_name, $item_number, $ammount) {
		$this->paypal_lib->add_field("item_name", $item_name);
		$this->paypal_lib->add_field("item_number", $item_number);
		$this->paypal_lib->add_field("ammount", $ammount*0.013);

		$this->paypal_lib->paypal_auto_form();
	}
	function buy3()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);
		$this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}
	function buy4()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);
		$this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}
	function buy5()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);
		$this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}
	function buy6()
	{
	//	$id=$_GET['book'];
	//	$id1=$_GET['book1'];
	//	$id2=$_GET['book2'];
	//	$this->paypal_lib->add_field("item_name",$id);
	//	$this->paypal_lib->add_field("item_number",$id1);
	//	$this->paypal_lib->add_field("amount",$id2);
		$this->load->view('order_details');
		if($this->input->post('submit')) {

            $location_text = $this->input->post('location_text');
			$location=$this->input->post('location');
			$no_of_people=$this->input->post('no_of_people');
			$aadhar_no=$this->input->post('aadhar_no');
			$age=$this->input->post('age');
			$price=$this->input->post('price');

			$userData = $this->User_Model->getUserDetails($_SESSION['email']);

			$this->User_Model->add_travel_details($userData->email, $location_text, $userData->name, $no_of_people, $aadhar_no, $age, $price);
            $this->pay($this->input->post('location'), $this->input->post('no_of_people'), $this->input->post('price'));
        }
	}
	function user_book_insert_data()
	{ 
		$id=$this->input->get('book');
		$result['data']=$this->Home_model->bookrecordsbyid($id);
		
		$this->load->view('booking',$result);
		if($this->input->post('submit'))
		{
			$hotel_name=$this->input->post('hotel');
			$contact_no=$this->input->post('mobile');
			$room_type=$this->input->post('room_type');
			$email=$this->input->post('email');

			$data=array('hotel_name'=>$hotel_name,'phone_no'=>$contact_no,'room_type'=>$room_type,'email'=>$email,'status'=>'pending');

			
			if($this->Home_model->book_data_records($data,$id))
			{
				

				echo "<script>alert('Updated  successfully')</script>";
	            echo "<script>window.location.href='view_my_booking'</script>";
			}
			else
			{
				echo "<script>alert('not updated')</script>";
	            echo "<script>window.location.href='view_my_booking'</script>";
			}

		}
	}

	function view_my_booking()
	{
		$id=$_SESSION['email'];
		$result['data']=$this->Home_model->my_booking_display_data($id);
		$this->load->view('my_booking.php',$result);
	}


//------------------------------------user_food_display--------------------------------//
function user_food_display()
	{
		$result['data']=$this->Home_model->food_user_records();
		$this->load->view('user_food',$result);
	}
	//---------------------------------user route--------------------------------------//
	function user_routedisp()
	{
		$result['data']=$this->Home_model->route_disp();
		$this->load->view('user_route_disp.php',$result);
	}
//--------------------------------user hotel-------------------------------------------------//
	function user_hotel_disp()
	{
		$result['data']=$this->Home_model->hotel_disp();
		$this->load->view('user_hoteldisplay.php',$result);
	}
	function userhome()
	{
		if(isset($_SESSION['email'])) {
		    $data['email'] = $_SESSION['email'];
	    } else {
		    $data['email'] = "";
	    }
		$this->load->view('home', $data);
	}
	//==========================feedback=================================================//
	function feedbackdata()
    {
    	$this->load->view('feedback');
		if($this->input->post('submit'))
		{
			$name= $this->input->post('name');
			$email= $this->input->post('email');
			$phone= $this->input->post('number');
			$service= $this->input->post('rate');
			$message= $this->input->post('sms');
			
			$data=array('name'=>$name,'email'=>$email,'phone_no'=>$phone,'rate'=>$service,'message'=>$message);

			if($this->Home_model->feedbackrecords($data))
			{
				echo "<script>alert('Feedback submitted successfully!!')</script>";
	            echo "<script>window.location.href='feedbackdata'</script>";
			}
			else
			{
				echo "<script>alert('Feedback not submitted!!')</script>";
	            echo "<script>window.location.href='feedbackdata'</script>";
			}	
		
    	}
    }
    //==================================enquiry==================================================//

    function enquirydata()
    {
    	$this->load->view('enquiry');
		if($this->input->post('submit'))
		{
			$name= $this->input->post('name');
			$email= $this->input->post('email');
			$phone= $this->input->post('number');
			$message= $this->input->post('sms');
			
			$data=array('name'=>$name,'email'=>$email,'phone_no'=>$phone,'message'=>$message);

			if($this->Home_model->enquiryrecords($data))
			{
				echo "<script>alert('Enquiry submitted successfully!!')</script>";
	            echo "<script>window.location.href='enquirydata'</script>";
			}
			else
			{
				echo "<script>alert('Enquiry not submitted!!')</script>";
	            echo "<script>window.location.href='enquirydata'</script>";
			}	
		
    	}
	}
//=========================User Profile===================================//	
	function my_profile()
	{
		$id=$_SESSION['email'];		
		$result['data']=$this->Home_model->myrecords($id);
		$this->load->view('myprofile',$result);
	}
	function user_prodisp()
	{
		$id=$_SESSION['email'];	
		$result['data']=$this->Home_model->userpro_disp();
		$this->load->view('myprofile.php',$result);
	}

	function myprofile_edit()
	{
		$id=$this->input->get('ep');
		$result['data']=$this->Home_model->profile_recordsbyid($id);
		
		$this->load->view('myprofile_edit',$result);
		if($this->input->post('submit'))
		{
			$name= $this->input->post('Name');
			$email= $this->input->post('email');
			$address= $this->input->post('address');	
			$phone= $this->input->post('mobile');			
			$gender= $this->input->post('gender');
			
			$data=array('name'=>$name,'email'=>$email,'address'=>$address,'phone_no'=>$phone,'gender'=>$gender,'status'=>'user');


			
			if($this->Home_model->profile_data_records($data,$id))
			{
				echo "<script>alert('updated successfully')</script>";
	            echo "<script>window.location.href='route_display_data'</script>";
			}
			else
			{
				echo "<script>alert('Not updated')</script>";
	            echo "<script>window.location.href='route_display_data'</script>";
			}

		}
	}
//======================change password=================================//	
	function changepassword()
		{
			$this->load->view('changepass');
			if($this->input->post('submit'))
			{
			
			$oldpass=md5($this->input->post('oldpass'));
			$newpass=md5($this->input->post('newpass'));
			$confirmpass=md5($this->input->post('confpass'));

			if ($oldpass!=$newpass) 
			{
	
			if($newpass==$confirmpass)
			{
				$id=$_SESSION['email'];
				if($this->Hello_models->changepassrecords($id,$confirmpass))
				{
				echo "<script>alert('password change successfully!!')</script>";
	            echo "<script>window.location.href='logout'</script>";
				}
			}			
	 			else
				{
					echo "<script>alert('new vs confirm are not same!!')</script>";
				}
		}
				else
				{
					echo "<script>alert('old vs new are same!!')</script>";

				}
	}
			
}
function goa()
{
	if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
	
	$this->load->view("goa.php", $data);
}
function raj()
{
	if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
	$this->load->view("raj.php", $data);
}
function man()
{
	if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
	$this->load->view("man.php", $data);
}
function vara()
{
if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
	$this->load->view("vara.php", $data);
}
function ladh()
{
	if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
	$this->load->view("ladh.php", $data);
}
function assam()
{
	if(isset($_SESSION['email'])) {
		$data['email'] = $_SESSION['email'];
	} else {
		$data['email'] = "";
	}
	$this->load->view("assam.php", $data);
}

}





?>
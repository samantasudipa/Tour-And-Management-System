<?php
class Home_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->library('session');
	}
	// function navigation()
	// {
	// 	$this->load->view('home');

	// }
	
//----------------------login---------------------------------------------------//
	function logindata()
	{
		$this->load->view('login');
		if($this->input->post('submit'))
		{
			$_SESSION['email']=$this->input->post('email');
			$password=md5($this->input->post('psw'));

			if($this->Home_model->loginrecords($_SESSION['email'],$password))
			{

				echo "<script>alert('login  successfully')</script>";
	            echo "<script>window.location.href='homedata'</script>";
			}
			else
			{
				echo "<script>alert('login  faliure')</script>";
	            
			}
		}
	}

	function logout()
	{
		session_destroy();
		echo "<script>alert('logout successfully!!')</script>";
	            echo "<script>window.location.href='logindata'</script>";
	}

	//-------admin profile--------------------------------------------------//
	function adminprofile()
	{
		$id=$_SESSION['email'];		
		$result['data']=$this->Home_model->adminrecords($id);
		$this->load->view('adminprofile',$result);
	}

	function admindata()
	{
		$id=$this->input->get('ep');
		$result['data']=$this->Home_model->adminrecordsbyid($id);
		
		$this->load->view('adminprofileupdate',$result);
		if($this->input->post('submit'))
		{
			$nme=$this->input->post('name');
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));

			$data=array('name'=>$nme,'email'=>$email,'password'=>$password);

			
			if($this->Home_model->admindatarecords($data,$id))
			{
				

				echo "<script>alert('Updated  successfully')</script>";
	            echo "<script>window.location.href='adminprofile'</script>";
			}
			else
			{
				echo "<script>alert('Not updated')</script>";
	            echo "<script>window.location.href='adminprofile'</script>";
			}

		}
	}
	function homedata()
	{
		$this->load->view('adminhome');

	}

	//---------------------------------------------------------------------------------------------//
	
	
    //-------------------------Route details----------------------------------//
    function routedata()
    {
    	$this->load->view('route');
		if($this->input->post('submit'))
		{
			$from= $this->input->post('from');
			$to= $this->input->post('to');
			$fare= $this->input->post('fare');
			$reservation= $this->input->post('rev');
			$pick_up= $this->input->post('pick');
			
			$data=array('from'=>$from,'to'=>$to,'fare'=>$fare,'reserv_type'=>$reservation,'pickup_point'=>$pick_up);

			if($this->Home_model->routerecords($data))
			{

				echo "<script>alert('inserted successfully')</script>";
	            echo "<script>window.location.href='route_display_data'</script>";

	

			}
			else
			{
				echo "<script>alert('not inserted')</script>";
	            echo "<script>window.location.href='route_display_data'</script>";
			}	
		
    }
}
	function route_display_data()
	{
		$result['data']=$this->Home_model->route_display_data();
		$this->load->view('route_display',$result);
	}

	function route_update_data()
	{
		$id=$this->input->get('ep');
		$result['data']=$this->Home_model->routerecordsbyid($id);
		
		$this->load->view('route_update',$result);
		if($this->input->post('submit'))
		{
			$from=$this->input->post('from');
			$to=$this->input->post('to');
			$fare=$this->input->post('fare');
			$reserv_type=$this->input->post('rev');
			$pickup=$this->input->post('pick');

			$data=array('from'=>$from,'to'=>$to,'fare'=>$fare,'reserv_type'=>$reserv_type,'pickup_point'=>$pickup);

			
			if($this->Home_model->route_data_records($data,$id))
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
	function route_deletedata()
	{
		$id=$this->input->get('del');
		if($this->Home_model->deleterecords($id))
			{

				echo "<script>alert('Deleted successfully')</script>";
	            echo "<script>window.location.href='route_display_data'</script>";
			}
			else
			{
				echo "<script>alert('Not Deleted')</script>";
	            echo "<script>window.location.href='route_display_data'</script>";
			}
		}

    //------------------------------------Food details----------------------------------------//
     function fooddata()
    {
    	$this->load->view('food');
		if($this->input->post('submit'))
		{
			$hotel_name= $this->input->post('hotel');
			$address= $this->input->post('address');
			$location= $this->input->post('loc');
			$phone= $this->input->post('mobile');			
			$food_type= $this->input->post('food');
			
			$data=array('hotel_name'=>$hotel_name,'address'=>$address,'location'=>$location,'phone_no'=>$phone,'food_type'=>$food_type);

			if($this->Home_model->foodrecords($data))
			{

				echo "<script>alert('Inserted successfully')</script>";
	            echo "<script>window.location.href='food_display'</script>";

			}
			else
			{
				echo "<script>alert('Not Inserted!!')</script>";
	            echo "<script>window.location.href='food_display'</script>";
			}	
		
    }
}
	function food_display()
	{
		$result['data']=$this->Home_model->food_display_records();
		$this->load->view('food_display',$result);
	}

	function food_update_data()
	{
		$id=$this->input->get('ep');
		$result['data']=$this->Home_model->foodrecordsbyid($id);
		
		$this->load->view('food_update',$result);
		if($this->input->post('submit'))
		{
			$hotel_name1=$this->input->post('hotel');
			$address1=$this->input->post('address');
			$location1=$this->input->post('loc');
			$contact_no1=$this->input->post('mobile');
			$food1=$this->input->post('food');

			$data=array('hotel_name'=>$hotel_name1,'address'=>$address1,'location'=>$location1,'phone_no'=>$contact_no1,'food_type'=>$food1);

			
			if($this->Home_model->food_data_records($data,$id))
			{

				echo "<script>alert('Updated successfully!!')</script>";
	            echo "<script>window.location.href='food_display'</script>";
			}

			else
			{
				echo "<script>alert('Not Updated!!')</script>";
	            echo "<script>window.location.href='food_display'</script>";
			}

		}
	}

	function food_deletedata()
	{
		$id=$this->input->get('del');
		if($this->Home_model->food_deleterecords($id))
			{

				echo "<script>alert('Deleted successfully!!')</script>";
	            echo "<script>window.location.href='food_display'</script>";
			}
			else
			{
				echo "<script>alert('Not deleted!!')</script>";
	            echo "<script>window.location.href='food_display'</script>";
			}
		}


//--------------------------------Hotel Details-------------------------------------------------//
    function hoteldata()
    {
    	$this->load->view('hotel');
		if($this->input->post('submit'))
		{
			$hotel_name= $this->input->post('hotel');
			$email= $this->input->post('email');
			$address= $this->input->post('address');
			$location= $this->input->post('loc');
			$phone= $this->input->post('mobile');			
			$room_type= $this->input->post('room_type');
			$room_avl= $this->input->post('room_avl');
			
			$data=array('hotel_name'=>$hotel_name,'address'=>$address,'location'=>$location,'phone_no'=>$phone,'room_type'=>$room_type,'room_available'=>$room_avl);

			if($this->Home_model->hotelrecords($data))
			{

				echo "<script>alert('Inserted successfully!!')</script>";
	            echo "<script>window.location.href='hotel_display'</script>";
				
			}
			else
			{
				echo "<script>alert('Not Inserted!!')</script>";
	            echo "<script>window.location.href='hotel_display'</script>";
			}	
		
    }
}
	
	function hotel_display()
	{
		$result['data']=$this->Home_model->hotel_display_data();
		$this->load->view('hotel_display',$result);
	}

	function hotel_update_data()
	{
		$id=$this->input->get('ep');
		$result['data']=$this->Home_model->hotelrecordsbyid($id);
		
		$this->load->view('hotel_update_data',$result);
		if($this->input->post('submit'))
		{
			$hotel_name=$this->input->post('hotel');
			$address=$this->input->post('address');
			$location=$this->input->post('loc');
			$contact_no=$this->input->post('mobile');
			$room_type=$this->input->post('room_type');
			$room_available=$this->input->post('room_avl');

			$data=array('hotel_name'=>$hotel_name,'address'=>$address,'location'=>$location,'phone_no'=>$contact_no,'room_type'=>$room_type,'room_available'=>$room_available);

			
			if($this->Home_model->hotel_data_records($data,$id))
			{
				echo "<script>alert('Updated successfully!!')</script>";
	            echo "<script>window.location.href='hotel_display'</script>";
			}
			else
			{
				echo "<script>alert('not updated!!')</script>";
	            
			}

		}
	}
		function hotel_deletedata()
		{
			$id=$this->input->get('del');
			if($this->Home_model->hotel_deleterecords($id))
			{

				echo "<script>alert('deleted successfully!!')</script>";
	            echo "<script>window.location.href='hotel_display'</script>";
			}
			else
			{
				echo "<script>alert('not deleted successfully!!')</script>";
	            
			}
		}
	//---------------------------------Feedback--------------------------------------------------//
	
	
    function feedback_display()
	{
		$result['data']=$this->Home_model->feedback_display_data();
		$this->load->view('feedback_diplay.php',$result);
	}
	//=================================Enquiry=============================================//

	
	function enquiry_display()
	{
		$result['data']=$this->Home_model->enquiry_display_data();
		$this->load->view('enquiry_display.php',$result);
	}


	//=====================================booking update==================================//

	function booking_details_update()
	{
		$result['data']=$this->Home_model->booking_display_data1();
		$this->load->view('admin_booking_display',$result);
	}
	function admin_booking_update()
	{
		$id=$this->input->get('bk');
		$result['data']=$this->Home_model->admin_booking_recordsbyid($id);
		
		$this->load->view('booking_update',$result);
		if($this->input->post('submit'))
		{
			$hotel_name=$this->input->post('hotel');
			$room_type=$this->input->post('room_type');
			$status=$this->input->post('status');

			$data=array('hotel_name'=>$hotel_name,'room_type'=>$room_type,'status'=>$status);

			
			if($this->Home_model->admin_booking_data_records($data,$id))
			{

				echo "<script>alert('Inserted successfully!!')</script>";
	            echo "<script>window.location.href='booking_details_update'</script>";
			}
			else
			{
				echo "<script>alert('Not Inserted!!')</script>";
	         
			}

		}
	}
	function contact_display()
	{
		$result['data']=$this->Home_model->contact_display_data();
		$this->load->view('contact_disp',$result);
	}
}
?>
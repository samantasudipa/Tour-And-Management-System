<?php
class Home_model extends CI_Model
{
	function loginrecords($email,$password)
	{
		$query=$this->db->query("SELECT * FROM admin_details WHERE email='$email' AND password='$password'");
		if($query->num_rows())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	//====================user login===========================//
		function user_loginrecords($email,$password)
	{
		$query=$this->db->query("SELECT * FROM registration_details WHERE email='$email' AND password='$password'");
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	//==========================Admin details================================//
	function adminrecords($email)
	{
		$this->db->select('*');
		$this->db->from('admin_details');
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->result();
	}
	function adminrecordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('admin_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();

	}
	function admindatarecords($data,$id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->update('admin_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	//============================Food details==================================//
	function foodrecords($data)
	{
		$query= $this->db->insert('food_details',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function food_display_records()
	{
		$this->db->select('*');
		$this->db->from('food_details');
		$query=$this->db->get();
		return $query->result();
	}
	function foodrecordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('food_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();

	}
	function food_data_records($data,$id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->update('food_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function food_deleterecords($id)
	{
		$this->db->where('user_id',$id);
		if($this->db->delete('food_details'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	//------------------------------Route Details-----------------------------------------//

	function routerecords($data)
	{
		$query= $this->db->insert('route_details',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function route_display_data()
	{
		$this->db->select('*');
		$this->db->from('route_details');
		$query=$this->db->get();
		return $query->result();
	}

	function routerecordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('route_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();

	}
	function route_data_records($data,$id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->update('route_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	function deleterecords($id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->delete('route_details'))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	//---------------------------Hotel Details-----------------------------------------//
	function hotelrecords($data)
	{
		$query= $this->db->insert('hotel_details',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function hotel_display_data()
	{
		$this->db->select('*');
		$this->db->from('hotel_details');
		$query=$this->db->get();
		return $query->result();
	}

	function hotelrecordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('hotel_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();

	}
	function hotel_data_records($data,$id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->update('hotel_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function hotel_deleterecords($id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->delete('hotel_details'))
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	//======================feedback==============================//

	function feedbackrecords($data)
	{
		$query= $this->db->insert('feedback',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function feedback_display_data()
	{
		$this->db->select('*');
		$this->db->from('feedback');
		$query=$this->db->get();
		return $query->result();
	}
	//============================Enquiry========================================================//
	function enquiryrecords($data)
	{
		$query= $this->db->insert('enquiry',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function enquiry_display_data()
	{
		$this->db->select('*');
		$this->db->from('enquiry');
		$query=$this->db->get();
		return $query->result();
	}

	//============================user  hotel booking display===============================//

	function booking_display_data()
	{
		$this->db->select('*');
		$this->db->from('hotel_details');
		$query=$this->db->get();
		return $query->result();
	}

	function bookrecordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('hotel_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();
	}
	function book_data_records($data,$id)
	{
		
		$this->db->where('user_id',$id);
		if($this->db->insert('booking_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	function my_booking_display_data($email)
	{
		$this->db->select('*');
		$this->db->from('booking_details');
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->result();
	}
	//---------------------------------user register-------------------------------------//
	function saverecords($name,$email,$password,$address,$phone)
	{
		//$query= $this->db->insert('admin_details',$data);
		$query=$this->db->query("INSERT INTO `registration_details`(`serial no`, `name`, `email`, `password`, `address`, `contact no`) VALUES ('','$name','$email','$password','$address','$phone')");
            
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}	
//-----------------------------------user_food_display----------------------------------//
	function food_user_records()
	{
		$this->db->select('*');
		$this->db->from('food_details');
		$query=$this->db->get();
		return $query->result();
	}
	
//==============admin booking update=================================================//

function booking_display_data1()
	{
		$this->db->select('*');
		$this->db->from('booking_details');
		$query=$this->db->get();
		return $query->result();
	}

	function admin_booking_recordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('booking_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();
	}

	function admin_booking_data_records($data,$id)
	{
		$this->db->where('user_id',$id);
		if($this->db->update('booking_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	//---------------------------------user route display------------------------------------//	
	function route_disp()
	{
		$this->db->select('*');
		$this->db->from('route_details');
		$query=$this->db->get();
		return $query->result();
	}
//-------------------------------user hotel display----------------------------------------//
	function hotel_disp()
	{
		$this->db->select('*');
		$this->db->from('hotel_details');
		$query=$this->db->get();
		return $query->result();
	}	
//=========================Change password========================================//

	function changepassrecords($email,$confirmpass)
	{
		$query="UPDATE `admin_details` SET `password`='$confirmpass' WHERE email='$email'";

		if($this->db->query($query))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
//===============================User Profile===================================//
	function userpro_disp($email)
	{
		$this->db->select('*');
		$this->db->from('admin_details');
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->result();
	}
	function myrecords($email)
	{
		$this->db->select('*');
		$this->db->from('admin_details');
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->result();
	}

	function profile_recordsbyid($id)
	{
		$this->db->select('*');
		$this->db->from('admin_details');
		$this->db->where('user_id',$id);
		$query=$this->db->get();
		return $query->result();
	}
	function profile_data_records($data,$id)
	{
		$this->db->where('user_id',$id);
		if($this->db->update('admin_details',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	//=====================contact us=====================//

	function contact_data($data)
	{
		$query= $this->db->insert('contact_us',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function contact_display_data()
	{
		$this->db->select('*');
		$this->db->from('contact_us');
		$query=$this->db->get();
		return $query->result();
	}
}	
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Travel Booking Details</h1>

<table id="customers">
  <tr>
    <th>email</th>
    <th>name</th>
    <th>location</th>
    <th>no_of_people	</th>
    <th>aadhar_no</th>
    <th>age</th>
    <th>price</th>
  </tr>
  
  	<?php foreach($travel_booking as $travel_booking_Item) {
  		?>
  		<tr>
  		<td><?php echo $travel_booking_Item->email; ?></td>
        <td><?php echo $travel_booking_Item->name; ?></td>
        <td><?php echo $travel_booking_Item->location; ?></td>
        <td><?php echo $travel_booking_Item->no_of_people; ?></td>
        <td><?php echo $travel_booking_Item->aadhar_no; ?></td>
        <td><?php echo $travel_booking_Item->age; ?></td>
        <td><?php echo $travel_booking_Item->price; ?></td>
        </tr>
    <?php
  	}
  	?>
    
  
</table>

</body>
</html>



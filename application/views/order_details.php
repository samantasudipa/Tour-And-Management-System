<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		* {
  box-sizing: border-box;
}

input[type=text], select, input, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10%;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.topnav {
  background-color: #333;
  overflow: hidden;
  width: 100%;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  margin: auto;
  width: 100%;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
	</style>
</head>
<body>
  <div class="topnav">
     <a class="active" href="">Booking Details</a>
  </div>
<div class="container">
	<form method="post">
		<div class="row">
		<label>Location</label>
		<input type="hidden" name="location_text" id="location_text">
		<select id="location" name="location">
			<option>---SELECT---</option>
			<option value="15099">Goa (15099Rs)</option>
			<option value="21099">Rajasthan (21099Rs)</option>
			<option value="23999">Manali (23999Rs)</option>
			<option value="17999">varanasi (17999Rs)</option>
			<option value="15099">Ladakh (15099Rs)</option>
			<option value="9999">Assam (9999Rs)</option>
		</select><br><br>
		No of People: <input type="number" name="no_of_people" id="no_of_people" value="1"><br><br>
		Aadhar No: <input type="text" name="aadhar_no" id="aadhar_no" required pattern="[0-9]{12}"  maxlength="12"><br><br>
		Age: <input type="number" name="age" id="age"><br><br>

		Price: <input type="number" name="price" id="price" style="pointer-events:none;"><br><br>

		<input type="submit" name="submit" value="Book Now"> <br>
		</div>
	</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
	var locationName = $('#location').find(":selected").text();
    var locationValue = $('#location').find(":selected").val();
    var no_of_people = document.getElementById("no_of_people").value;
    document.getElementById("location_text").value = locationName;
    document.getElementById("price").value = locationValue * no_of_people;


	$("#no_of_people").change(function() {
        var locationName = $('#location').find(":selected").text();
        var locationValue = $('#location').find(":selected").val();
        var no_of_people = document.getElementById("no_of_people").value;

        document.getElementById("location_text").value = locationName;
        

        document.getElementById("price").value = locationValue * no_of_people;

    });
    $("#location").change(function() {
        var locationName = $('#location').find(":selected").text();
        var locationValue = $('#location').find(":selected").val();
        var no_of_people = document.getElementById("no_of_people").value;

        document.getElementById("location_text").value = locationName;

        document.getElementById("price").value = locationValue * no_of_people;
    });
</script>
</html>
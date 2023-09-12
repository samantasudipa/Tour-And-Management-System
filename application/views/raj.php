<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
</head>
<body>
	<h1 align="center">Rajasthan</h1>
	<h4>Rajasthan ('Land of Kings')[8] is a state in northern India.It covers 342,239 square kilometres (132,139 sq mi) or 10.4 percent of India's total geographical area. It is the largest Indian state by area and the seventh largest by population. It is on India's northwestern side, where it comprises most of the wide and inhospitable Thar Desert (also known as the Great Indian Desert) and shares a border with the Pakistani provinces of Punjab to the northwest and Sindh to the west, along the Sutlej-Indus River valley. It is bordered by five other Indian states: Punjab to the north; Haryana and Uttar Pradesh to the northeast; Madhya Pradesh to the southeast; and Gujarat to the southwest. Its geographical location is 23.3 to 30.12 North latitude and 69.30 to 78.17 East longitude, with the Tropic of Cancer passing through its southernmost tip.</h4>
	<img src="<?php echo base_url()?>image/raj1.jpg" height="300" width="500"></a>
	<img src="<?php echo base_url()?>image/raj2.jpg" height="300" width="500"></a>
	<img src="<?php echo base_url()?>image/raj3.jpg" height="300" width="500"></a><br><br><br>
	<table border="1" cellpadding="41" cellspacing="0" align="center">
		<td>The Heritage Resort,Rajasthan</td>
		<td>5 Nights 4 Days Package</td>
		<td>$21099(perhead)</td>
    </table>
    <br><br>
    <br>
	<?php
	if($email != "") {
		echo '<center><button style="background:green;color:white; width:20%;height: 30%;"><a href="buy2" style="background:green;color:white;">Book</a></button></center>';
	} else {
		echo '<center><button style="background:green;color:white; width:20%;height: 30%;"><a onclick="login()" style="background:green;color:white;">Book</a></button></center>';
	}
	?>
	
	<a href="home"></a>
	<script type="text/javascript">
		function login() {
			if(confirm("Please Login!")) {
				window.location.href = "<?php echo site_url('User_Controller/userlogin'); ?>";
			}
		}
	</script>
</body>
</html>
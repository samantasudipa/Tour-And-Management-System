<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
</head>
<body>
	<h1 align="center">Varanasi</h1>
	<h4>Varanasi (Vārāṇasī; is a city on the Ganges river in northern India that has a central place in pilgrimage, death, and mourning in the Hindu world.[10] The name Varanasi was officially so revived after 1947,but the city is still widely known as Banaras or Benares (Banāras;and since ancient times also as Kashi,The city has a syncretic tradition of Muslim artisanship that underpins its tourism.Located in the middle-Ganges valley in the southeastern part of the state of Uttar Pradesh, Varanasi lies on the left bank of the river. It is 692 kilometres (430 mi) to the southeast of India's capital New Delhi, 320 kilometres (200 mi) south-east of the state capital, Lucknow, and 121 kilometres (75 mi) east of Allahabad, another Hindu pilgrimage site.</h4>
	<img src="<?php echo base_url()?>image/vara1.jpg" height="300" width="500">
	<img src="<?php echo base_url()?>image/vara2.jpg" height="300" width="500">
	<img src="<?php echo base_url()?>image/vara3.jpg" height="300" width="500">
	<table border="1" cellpadding="41" cellspacing="0" align="center">
		<td>The Worship Resort,Varanasi</td>
		<td>5 Nights 4 Days Package</td>
		<td>$17999(perhead)</td>
    </table>
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
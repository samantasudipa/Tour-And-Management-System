<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
</head>
<body>
	<h1 align="center">Manali</h1>
	<h4>Manali is a town in the Indian state of Himachal Pradesh.[2] It is situated in the northern end of the Kullu Valley, formed by the Beas River. The town is located in the Kullu district, approximately 270 kilometres (170 mi) north of the state capital of Shimla and 544 kilometres (338 mi) northeast of the national capital of Delhi. With a population of 8,096 people recorded in the 2011 Indian census Manali is the beginning of an ancient trade route through Lahaul and Ladakh, over the Karakoram Pass and onto Yarkand and Hotan in the Tarim Basin of China. Manali is a popular tourist destination in India and serves as the gateway to the Lahaul and Spiti district as well as the city of Leh in Ladakh.</h4>
	<img src="<?php echo base_url()?>image/man1.jpg" height="300" width="500">
	<img src="<?php echo base_url()?>image/man2.jpg" height="300" width="500">
	<img src="<?php echo base_url()?>image/man3.jpg" height="300" width="500">
	<table border="1" cellpadding="41" cellspacing="0" align="center">
		<td>The Snow Resort,Manali</td>
		<td>7 Nights 6 Days Package</td>
		<td>$23999(perhead)</td>
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
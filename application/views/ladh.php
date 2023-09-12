<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
</head>
<body>
	<h1 align="center">Ladakh</h1>
	<h4>Ladakh is a region administered by India as a union territory, and constitutes a part of the larger Kashmir region, which has been the subject of dispute between India, Pakistan, and China since 1947.Ladakh is bordered by the Tibet Autonomous Region to the east, the Indian state of Himachal Pradesh to the south, both the Indian-administered union territory of Jammu and Kashmir and the Pakistan-administered Gilgit-Baltistan to the west, and the southwest corner of Xinjiang across the Karakoram Pass in the far north. It extends from the Siachen Glacier in the Karakoram range to the north to the main Great Himalayas to the south.The eastern end, consisting of the uninhabited Aksai Chin plains, is claimed by the Indian Government as part of Ladakh, and has been under Chinese control since 1962.</h4>
	<img src="<?php echo base_url()?>image/ladh1.jpg" height="300" width="500">
	<img src="<?php echo base_url()?>image/ladh2.jpg" height="300" width="500">
	<img src="<?php echo base_url()?>image/ladh3.jpg" height="300" width="500">
	<table border="1" cellpadding="41" cellspacing="0" align="center">
		<td>Sunshine Resort,Ladakh</td>
		<td>3 Nights 2 Days Package</td>
		<td>$15099(perhead)</td>
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
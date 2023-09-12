<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
</head>
<body>
	<h1 align="center">Assam</h1>
	<h4>Assam is a state in northeastern India, south of the eastern Himalayas along the Brahmaputra and Barak River valleys. Assam covers an area of 78,438 km2 (30,285 sq mi). The state is bordered by Bhutan and Arunachal Pradesh to the north; Nagaland and Manipur to the east; Meghalaya, Tripura, Mizoram and Bangladesh to the south; and West Bengal to the west via the Siliguri Corridor, a 22 kilometres (14 mi) wide strip of land that connects the state to the rest of India. Assamese is the official and most commonly spoken language of the state, followed by Bengali, which is official in the Barak Valley and Bodo, which is co-official in Assam and official in Bodoland Territorial Region.</h4>
	<img src="<?php echo base_url()?>image/assam1.jpg" height="300" width="500">
		<img src="<?php echo base_url()?>image/assam2.jpg" height="300" width="500">
			<img src="<?php echo base_url()?>image/assam3.jpg" height="300" width="500">
			<table border="1" cellpadding="41" cellspacing="0" align="center">
		<td>The Garden Resort,Assam</td>
		<td>3 Nights 2 Days Package</td>
		<td>$9999(perhead)</td>
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
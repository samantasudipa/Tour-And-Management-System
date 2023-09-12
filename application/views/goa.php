<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
</head>
<body>
	<h1 align="center">Goa</h1>
	<h4>Goa is a state on the southwestern coast of India within the Konkan region, geographically separated from the Deccan highlands by the Western Ghats.It is surrounded by the Indian states of Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its western coast. It is India's smallest state by area and its fourth-smallest by population. Goa has the highest GDP per capita among all Indian states,two and a half times as high as the GDP per capita of the country as a whole.The Eleventh Finance Commission of India named Goa the best-placed state because of its infrastructure, and India’s National Commission on Population rated it as having the best quality of life in India (based on the commission’s “Indicators”).It is the third-highest ranking among Indian states in the human development index.Panaji is the state's capital, while Vasco da Gama is its largest city. The historic city of Margão in Goa still exhibits the cultural influence of the Portuguese, who first voyaged to the subcontinent in the early 16th century as merchants, and conquered it soon thereafter, whereupon Goa became an overseas territory of the Portuguese Empire, part of what was then known as Portuguese India, and remained as such for about 450 years until it was annexed by India in 1961.Goa’s official language, which is spoken by a majority of its inhabitants, is Konkani.Goa is visited by large numbers of international and domestic tourists each year because of its white-sand beaches, active nightlife, places of worship, and World Heritage-listed architecture. It also has rich flora and fauna because it lies very close to the North Western Ghats rainforests, one of the rare biodiversity hotspots of the world.</h4>
	<img src="<?php echo base_url()?>image/goa1.jpg"  height="300" width="500">
	<img src="<?php echo base_url()?>image/goa2.jpg"  height="300" width="550">
	<img src="<?php echo base_url()?>image/goa3.jpg"  height="300" width="500">
	<table border="1" cellpadding="41" cellspacing="0" align="center">
		<td>The Water Valley Resort,Goa</td>
		<td>4 Nights 3 Days Package</td>
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
		function buy2() {
			if(confirm("Please Login!")) {
				window.location.href = "<?php echo site_url('User_Controller/userlogin'); ?>";
			}
		}
	</script>
</body>
</html>
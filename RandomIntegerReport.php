
<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

 
<?php
$numbers = array();
$one = 0;
$two = 0;
$three = 0;
$four = 0;
$five = 0;
$six = 0;
$seven = 0;
$eight = 0;
$nine = 0;

for ($x = 0; $x <= 99; $x++) {
    $rand = rand(1,9);	
	switch ($rand){
		case 1:
			$one++;
			break; 
		case 2:
			$two++;
			break; 
		case 3:
			$three++;
			break; 
		case 4:
			$four++;
			break; 
		case 5:
			$five++;
			break; 
		case 6:
			$six++;
			break; 
		case 7:
			$seven++;
			break; 
		case 8:
			$eight++;
			break; 
		case 9:
			$nine++;
			break; 
} 
}
echo "One:$one     Two:$two     Three:$three    Four:$four    Five:$five     Six:$six   Seven:$seven   Eight:$eight  Nine:$nine";




	$dataPoints = array(
	array("y" => $one, "label" => "1"),
	array("y" => $two, "label" => "2"),
	array("y" => $three, "label" => "3"),
	array("y" => $four, "label" => "4"),
	array("y" => $five, "label" => "5"),
	array("y" => $six, "label" => "6"),
	array("y" => $seven, "label" => "7"),
	array("y" => $eight, "label" => "8"),
	array("y" => $nine, "label" => "9")
	);
?>
 
<body>
<div id="chartContainer"></div>
 
<script type="text/javascript">
 
$(function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Chart of Generated Numbers"
	},
	data: [
	{
		type: "column",                
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}
	]
});
chart.render();
});
</script>
</body>
 
</html>
<?php 

if (isset($_POST["submit"])) {
	$para = $_POST["para"];
	$de = $_POST["de"];
	$monto = $_POST["monto"];

	$string = $para . "_" . $de;

	$curl = curl_init();
	curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.currconv.com/api/v7/convert?q=" . $string . "&compact=ultra&apiKey=0521f97814a244b5856df79e900aca5a",
      CURLOPT_RETURNTRANSFER => 1
 	));
	$response = curl_exec($curl);
	$response = json_decode($response, true);
	$rate = $response[$string];
	$total = $rate * $monto;
	
}

?>
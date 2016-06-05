<?php

$response=array();
if(isset($_GET["id"])){
	$id = $_GET["id"];
	$con= mysqli_connect("localhost","root","","hyptelecom");

	$result = mysqli_query($con,"select * from DEVICE where id='".$id."'") or die(mysql_error());
	if(mysqli_num_rows($result) > 0){
		
		$response["device"] = array();
		$response["message"] = "Device found!";
		$response["success"] = 1;
		

		while($row = mysqli_fetch_array($result)){

			$entry = array();
			$entry["id"] = $row["id"];
			$entry["name"] = $row["name"];
			$entry["image_path"] = $row["image_path"];
			$entry["price"] = $row["price"];
			$entry["description"] = $row["description"];
			$entry["cpu"] = $row["cpu"];
			$entry["os"] = $row["os"];
			$entry["resolution"] = $row["resolution"];
			$entry["display_type"] = $row["display_type"];
			$entry["display_size"] = $row["display_size"];
			$entry["sim"] = $row["sim"];
			$entry["weight"] = $row["weight"];
			$entry["dimensions"] = $row["dimensions"];
			$entry["device_type"] = $row["device_type"];

			$entry["sl_services"] = array();
			$entry["assistances"] = array();

			$sl_services_result = mysqli_query($con,"select SL.id,name,image_path from SL_SERVICE SL inner join DEV_SL DEVSL on SL.id=DEVSL.id_sl where DEVSL.id_dev='".$id."'") or die(mysql_error());

			if(mysqli_num_rows($sl_services_result) > 0){

				$response["success"] = 1;
				$response["message"] = "SL services and Device found!";

				while ($sl_service_row = mysqli_fetch_array($sl_services_result)) {
					
					$sl_entry = array();
					$sl_entry["id"] = $sl_service_row["id"];
					$sl_entry["name"] = $sl_service_row["name"];
				    $sl_entry["image_path"] = $sl_service_row["image_path"];
					
					array_push($entry["sl_services"], $sl_entry);
					

				}
			}
			else{
				$response["success"] = 0;
				$response["message"] = "SL services not found!";
			}

			$assistances_result = mysqli_query($con,"select ASS.id,name from ASSISTANCE ASS inner join DEV_ASSISTANCE DEVAS on ASS.id=DEVAS.id_assistance where DEVAS.id_dev='".$id."'") or die(mysql_error());

				if(mysqli_num_rows($assistances_result) > 0){

					$response["success"] = 1;
					$response["message"] = "Assistances and Device found!";

					while ($assistances_row = mysqli_fetch_array($assistances_result)) {
						
						$assistance_entry = array();
						$assistance_entry["id"] = $assistances_row["id"];
						$assistance_entry["name"] = $assistances_row["name"];
						
						array_push($entry["assistances"], $assistance_entry);
						

					}
					
				}
				else{
					$response["success"] = 0;
					$response["message"] = "Assistance services not found!";
				}

			array_push($response["device"],$entry);
			// echo json_encode($response["device"]).'<br/>';
		}

	}
	else{
		$response["success"] = 0;
		$response["message"] = "Device not found!";
	}
}
else{
	$response["success"] = 0;
	$response["message"] = "Device id not set in GET request!";
}

echo json_encode($response);
?>
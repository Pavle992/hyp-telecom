<?php

require_once('dbconnection.php');



class AssistenceGrid {

	private $db;

	function __construct() {
		$this->db = new MySql();
	}

	function __destruct(){
		
	}

	public function getAssistenceByCategory($cat, $hilight = 0) {
		$this->db->connect();

		if ($hilight) $sql = "SELECT assistance.name, assistance.id FROM assistance WHERE id in (SELECT DISTINCT dev_assistance.id_assistance FROM dev_assistance JOIN device on dev_assistance.id_dev=device.id WHERE device.device_type='$cat') AND highlight_flag = 'Y';";
		else $sql = "SELECT assistance.name, assistance.id FROM assistance WHERE id in (SELECT DISTINCT dev_assistance.id_assistance FROM dev_assistance JOIN device on dev_assistance.id_dev=device.id WHERE device.device_type='$cat');";

		
		$result = $this->db->con->query($sql);

		$resultArray = array();
		$i=0;

		if ($result->num_rows > 0) {
			
			
			while ($row = $result->fetch_assoc()) {
				$resultArray+=array($i => array('name' => $row['name'], 'id' => $row['id']));
				
				$i+=1;
			}
		}

		return $resultArray;	

	}

	public function getAllAssistence($hilight = 0) {
		$this->db->connect();

		if ($hilight) $sql = "SELECT name, id  FROM assistance WHERE highlight_flag = 'Y'";
		else $sql = "SELECT name, id FROM assistance";
		$result = $this->db->con->query($sql);

		$resultArray = array();
		$i=0;

		if ($result->num_rows > 0) {
			
			
			while ($row = $result->fetch_assoc()) {
				
				$resultArray+=array($i => array('name' => $row['name'], 'id' => $row['id']));
				
				$i+=1;
			}
		}

		return $resultArray;	

	}
}



$grid = new AssistenceGrid();

$result = array();

$hilight = $_POST['hilight'];


if ($_POST['phone'] == 1 && $_POST['tablet'] == 1 && $_POST['smart'] == 1) {
	$result =  $grid->getAllAssistence($hilight);
}

else {
	if ($_POST['phone'] == 1) $result = array_merge($result, $grid->getAssistenceByCategory("Phone", $hilight));
	if ($_POST['tablet'] == 1) $result = array_merge($result, $grid->getAssistenceByCategory("Tablet", $hilight));
	if ($_POST['smart'] == 1) $result = array_merge($result, $grid->getAssistenceByCategory("Smart", $hilight));
}

$result = array_unique($result, SORT_REGULAR);


 echo json_encode($result);




?>

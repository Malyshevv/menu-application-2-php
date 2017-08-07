<?php
include ('db.php');

class MainClass {

	function menu() {
		$query     = "SELECT * FROM menu ORDER BY id";
		$querymenu = $this->connect->query($query);
		$storemenu = $this->connect->store_result();

		while ($row = $querymenu->fetch_assoc()) {
			$menu[] = $row;
		}

		return $menu;
	}

	function contact() {
		$query     = "SELECT * FROM contact";
		$querymenu = $this->connect->query($query);
		$storemenu = $this->connect->store_result();

		while ($row = $querymenu->fetch_assoc()) {
			$contact[] = $row;
		}

		return $contact;
	}

}

$menus    = $main->menu();
$contacts = $main->contact();

?>
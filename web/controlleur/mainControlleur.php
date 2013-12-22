<?php
class mainControlleur {
	public function colorPicker() {
		include "class/colorPickerView.php";
		return new colorPicker("colorPickerView.php");
	}

	public function errorView() {
		include "class/errorView.php";
		return new errorView("errorView.php");
	}

	public function accueil() {
		include "class/accueilView.php";
		return new accueilView("accueilView.php");
	}

	public function about() {
		include "class/aboutView.php";
		return new aboutView("aboutView.php");
	}

	public function codingame() {
		include "class/codinGameView.php";
		return new codinGameView("codinGameView.php");
	}

	public function raytracer() {
		include "class/raytracerView.php";
		return new raytracerView("raytracerView.php");
	}

	public function shell42() {
		include "class/shell42View.php";
		return new shell42View("shell42View.php");
	}
}
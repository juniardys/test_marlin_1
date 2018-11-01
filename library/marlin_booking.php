<?php

/**
* Marlin Booking
*/
class Marlin_booking
{
	public $angka = array();
	public $totmarlinbooking = 0;

	function __construct(Array $inp) {
		$this->angka = $inp;
	}

	public function result($angka) {
		if (($angka % 3 == 0) && ($angka % 5 == 0)) {
			$this->totmarlinbooking++;
			return "Marlin Booking";
		} elseif (($angka % 3 == 0)) {
			if ($this->totmarlinbooking >= 2) {
				return "Marlin";
			} else {
				return "Booking";
			}
		} elseif (($angka % 5 == 0)) {
			if ($this->totmarlinbooking >= 2) {
				return "Booking";
			} else {
				return "Marlin";
			}
		}
		return "";
	}

	public function show_result() {
		$result = "";
		for ($i=0; $i < count($this->angka); $i++) { 
			$angka = $this->angka[$i];
			if ($this->totmarlinbooking >= 5) break;
			$result .= ($i+1).") ".$angka." ==> ";
			$result .= $this->result($angka)."<br>\n";
		}
		return $result;
	}
}
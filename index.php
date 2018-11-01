<?php
session_start();

require('library/marlin_booking.php');

if (isset($_POST['btn_reset'])) {
	session_destroy();
} elseif (isset($_POST['btn_submit2'])) {
	$jml_perulangan = $_POST['jml_perulangan'];
	$angka = $_POST['angka'];
	$mb = new Marlin_booking($angka);
	$result = $mb->show_result();
} elseif (isset($_POST['btn_submit1'])) {
	session_destroy();
	$jml_perulangan = $_POST['jml_perulangan'];
	if ($jml_perulangan < 0) $jml_perulangan = 0;
}

include('views/tampilan.php');
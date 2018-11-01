<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Marlin 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<hr>
	<form method="post">
    <div class="form-group">
		<label for="jml_perulangan">Jumlah Perulangan:</label>
		<input type="number" class="form-control" id="jml_perulangan" name="jml_perulangan" value="<?php echo @$jml_perulangan ?>">
	</div>
	<div class="text-center">
	<?php if (!(@$jml_perulangan > 0)) { ?>
		<button type="submit" class="btn btn-primary" name="btn_submit1">Submit</button>
	<?php } ?>
	</div>
	</form>
	<hr>
	<form method="post">
	<?php for ($i=0; $i < @$jml_perulangan; $i++) { ?>
	<div class="form-group">
		<label for="angka_<?php echo $i ?>">Angka <?php echo $i+1; ?>:</label>
		<input type="number" class="form-control" id="angka_<?php echo $i ?>" name="angka[]" value="<?php echo @$angka[$i] ?>">
	</div>
	<?php } ?>
	<div class="text-center">
	<?php if (@$jml_perulangan > 0) { ?>
		<input type="hidden" name="jml_perulangan" value="<?php echo @$jml_perulangan ?>">
		<button type="submit" class="btn btn-primary" name="btn_submit2">Submit</button>
		<button type="submit" class="btn btn-default" name="btn_reset">Reset</button>
	<?php } ?>
	</div>
	</form>
	<hr>
	<?php if (@$result) { ?>
	<h3>Result:</h3><br>
	<?php echo $result; ?>
	<?php } ?>
</div>
</body>
<script type="text/javascript" src="assets/JQuery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</html>
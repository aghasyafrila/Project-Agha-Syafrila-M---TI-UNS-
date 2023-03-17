<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".submit").click(function(event) {
			event.preventDefault();
			var bilangan1 = $("#bil1").val();
			var bilangan2 = $("#bil2").val();
			var option 	= $("#hitung").find("option:selected").val();
			
			jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>"+"index.php/kalkulator/hitung",
			dataType: 'json',
			data: {bil1: bilangan1, bil2: bilangan2, hitung:option},
			success: function(res) {
			jQuery("#value").html(res.hasil);
			}
			});
			});
			});
	</script>
</head>
<body>
<div class="container" style="margin-top: 100px; margin-left: 250px;">
<div class="row">
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
<p>Kalkulator</p>
<?php
	echo form_open();
	$bil1 = array(
		'class' 	=> 'from-control',
		'type'		=> 'number',
		'name'		=> 'bil1',
		'id'		=> 'bil1'
		);
	echo form_input($bil1);
	echo "<br>";
	echo "<br>";
	$bil2 = array(
		'class' 	=> 'from-control',
		'type'		=> 'number',
		'name'		=> 'bil2',
		'id'		=> 'bil2'
		);
	echo form_input($bil2);
	echo "<br><br>";
	?>
	<select id="hitung">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<?php
	echo "<br> <br>";
		echo form_submit('submit', 'Hasil', "class='btn btn-danger submit'");
		
		echo form_close();
		?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
    		<center>
    		<h1>Hasil:</h1>
    		<h1 id="value"></h1>
    		</div>
    		</center>
    	</div>
    </div>
	<div class="row" style="margin-top:2px; margin-left: 250px;">
	<div class="col-md-4 offset-md-4">
		<div>
		<button class="btn btn-primary">LOGOUT</button>
		</div>
	</div>
    </div>
	
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
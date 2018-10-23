<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">

			<form class="contact100-form validate-form" action="yuhu.php">
				<?php 
if(isset($_POST['hitung_bmi'])){
	$berat = $_POST['berat'];
	$tinggi = $_POST['tinggi'];
	$bmi = $berat/(($tinggi/100) * ($tinggi/100));
	if ($berat == NULL || $berat == 0){
		echo "<script> window.alert('datane di isi lengkap sek ndoro...');window.location='./.';</script>" ;
	} else if ($tinggi == NULL || $tinggi ==0){
		echo "<script> window.alert('datane di isi lengkap sek ndoro...');window.location='./.';</script>" ;
		}
	else if($berat && $tinggi == NULL){
		echo "<script> window.alert('datane di isi lengkap sek ndoro...');window.location='./.';</script>" ;
	
	} else {


	if ($bmi <= 18.5) {
	    $output = '<b style="color:green;"><i>Byuh...Kuru Ndoro</i></b>';
	     $saran = "Dhahar sing Rodok Kathah Ndoro!!...";

	  } else if ($bmi > 18.5 && $bmi<=24.9 ) {
	    $output = '<b style="color:blue;"><i>Josss ideal Ndoro...</i></b>';
	    $saran = "Ojo Dumeh Ndoro Tetep Pertahanke....";

	  } else if ($bmi > 24.9 && $bmi<=29.9) {
	    $output = '<b style="color:pink;"><i>Jenengan Kabotan Awak Ndoro..</i></b>';
	    $saran = "Olahraga Sing Teratur Sekalian Diatur Pola Dhahare Ndoro...";

	  } else if ($bmi > 30.0) {
	    $output = '<b style="color:red;"><i>POLL Kelemon Ndoro...</i></b>';
	    $saran = "WAJIB Olahraga Teratur Atur Pola Dhahar Ndoro...";
	  }	
	  ?>
	  <br>
<p style="text-align: justify;"><center><h4>HASIL</h4></center>
    	Monggo Dipun Maos!!! : <?php echo round($bmi,2) ?><br>
    	Status anda : <?php echo $output; ?><br>
    	<b style="color: blue;"><?php echo $saran ?></b></p>
	  <?php
	  }		
} 

 ?>
 <div class="container-contact100-form-btn">
					<a href="yuhu.php"><button class="contact100-form-btn" style="background-color: pink;">
						Balik Ndoro
					</button></a>
				</div>

			</form>

			





			<div class="contact100-more flex-col-c-m" style="background-image: url('12.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Markas Besar TNI AU <br> Diskomlek<br>
						Gd. B2 Lt.6 <br>
						Prajurit Kepala Endro Prasetyo J.
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Via Talipon
						</span>

						<span class="txt3">
							+62 822 97600061
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Via Imiel
						</span>

						<span class="txt3">
							Prajurit2011@gmail.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>

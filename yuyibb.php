<?php 
/**
 * 
 */
class yuyibb{

	function hitung($bmi, $jk){
		if ($jk=="Perempuan") {
			if ($bmi<18) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		} elseif ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=23) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>23
			 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
	
		}
	}

}
$menghitung = new yuyibb(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$jk = $_POST['jk'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$bmi = $bb/($tb*$tb/10000);
	$menghitung->hitung($bmi, $jk);
}
 ?>
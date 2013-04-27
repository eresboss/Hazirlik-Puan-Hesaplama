<?php
  echo "<title>Nazilli IIBF Hazirlik Puan Hesaplama v0.5 Beta</title>";
if($_POST)

$vize1 = $_POST['vize1'];
$vize2 = $_POST['vize2'];
$quiz1 = $_POST['quiz1'];
$quiz2 = $_POST['quiz2'];
$quiz3 = $_POST['quiz3'];
$quiz4 = $_POST['quiz4'];
$quiz5 = $_POST['quiz5'];
$quiz6 = $_POST['quiz6'];
$quiz7 = $_POST['quiz7'];
$quiz8 = $_POST['quiz8'];
$final = $_POST['final'];
 
?>
<legend><b>Nazilli IIBF Hazirlik Puan Hesaplama v0.5 Beta</b></legend>

<form action="" method="POST">
<span>Vize 1</span>
<span><input type="text" name="vize1"/></span>
<span>Vize 2</span>
<span><input type="text" name="vize2"/></span><br>
<span>Quiz 1</span>
<span><input type="text" name="quiz1"/></span>
<span>Quiz 2</span>
<span><input type="text" name="quiz2"/></span>
<span>Quiz 3</span>
<span><input type="text" name="quiz3"/></span>
<span>Quiz 4</span>
<span><input type="text" name="quiz4"/></span><br>
<span>Quiz 5</span>
<span><input type="text" name="quiz5"/></span>
<span>Quiz 6</span>
<span><input type="text" name="quiz6"/></span>
<span>Quiz 7</span>
<span><input type="text" name="quiz7"/></span>
<span>Quiz 8</span>
<span><input type="text" name="quiz8"/></span><br>
<span>Final</span>
<span><input type="text" name="final"/></span><br>
<input type="submit" value="Hesapla" />
</form>

<?php
$ortala = ($vize1+$vize2+(($quiz1+$quiz2+$quiz3+$quiz4+$quiz5+$quiz6+$quiz7+$quiz8)/8))/3*(0.4)+($final)*(0.6);
	echo 'Ortalama:<strong>'.$ortala.'</strong>';
	?>

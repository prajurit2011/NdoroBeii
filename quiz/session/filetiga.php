Filetiga.php

<?php
session_start();
echo 'Halo '.$_SESSION['Raden Beii'].' HOOOOPPPPPPS :D';
echo '</br>';
?>
<?php
session_unset();
session_destroy();
?>
<?
//Hasil nya tidak ada(kosong)

echo @$_SESSION['Raden Beii'];
?>

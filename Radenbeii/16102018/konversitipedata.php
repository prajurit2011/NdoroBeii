<html>
<head>
             <title>.:: Konversi Type Data ::.</title>
</head>
<body>
<font face=tahoma size=15 text effect=shadow>
<?php
$bayar="500.77 Rupiah";
print ("Kui Tipe Data String : $bayar <br>");
settype($bayar,"double");
 echo "Kui Tipe Data Double";
settype($bayar,"integer");
echo "Tipe data Integer : $bayar <br>";
?>
</body>
</html>
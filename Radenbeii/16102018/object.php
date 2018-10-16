<?php
class Sapa{var $variable;
}
// membuat object pesan. ini disebut instansiasi
$pesan = new Sapa();
$pesan->variable="HALO RADEN BEIII"; // memberikan nilai utk properti str pada object pesan

    echo $pesan->variable;
    echo '<br>';
    $pesan->variable="Kentara Mendhung";
    echo $pesan->variable;
    echo '<br>';
    $pesan->variable=540908;
  

echo $pesan ->variable;// mencetak nilainya (pengolahan data)
?>
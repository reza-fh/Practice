<?php

include "connection.php";

$input=$db->exec("insert into siswa(nama,pekerjaan) values('".$_POST["Nama"]."','".$_POST["Pekerjaan"]."')");

if ($input) {
    header('Location: index.php');
}
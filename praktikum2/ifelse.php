<?php

$nilai = 80;

if($nilai >= 90){ // diatas 90
    echo "Nilai Kamu ajib";
} else if ($nilai <= 90 && $nilai >= 70) { // rentang nilai 70 - 90
    echo "Nilai kamu bagus";
} else { // dibawah 70
    echo "Nilai Kamu Lumayan Bagus";
}
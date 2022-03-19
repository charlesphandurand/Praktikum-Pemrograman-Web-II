<?php
    $tinggi_prisma = 5.4;
    $alas_segitiga = 3.5;
    $tinggi_segitiga = 4.4;
    $volume = ($alas_segitiga * $tinggi_segitiga / 2) * $tinggi_prisma;

    echo number_format($volume, 3, ',')." m3";
?>
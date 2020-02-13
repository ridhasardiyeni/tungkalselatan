<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    if ($page == 'galeri')
        include 'galeri.php';
    if ($page == 'video')
        include 'video.php';
    if ($page == 'home') 
        include 'home.php';
    if ($page == 'fasilitas')
        include 'fasilitas.php';
    if ($page == 'user') 
        include 'user.php';
    //Profil
    if ($page == 'sejarah') 
        include 'sejarah.php';
    if ($page == 'visimisi') 
        include 'visimisi.php';
    //Struktur Organisasi
    if ($page == 'struktur') 
        include 'struktur.php';
    if ($page == 'pemerintahan') 
        include 'pemerintahan.php';
    if ($page == 'pkk') 
        include 'pkk.php';
    if ($page == 'karangtaruna') 
        include 'karangtaruna.php';
    if ($page == 'masyarakat') 
        include 'masyarakat.php';
    //Produk
    if ($page == 'produk')
        include 'produk.php';
    if ($page == 'jasa_masyarakat')
        include 'jasa_masyarakat.php';

    //
    if ($page == 'berita')
        include 'berita.php';
    if ($page == 'aparatur')
        include 'aparatur.php';
?>

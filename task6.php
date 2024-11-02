<?php
// PHP Function 
/*function tampilkan_nama(){
    echo "Nama saya Dimitry Utkin";
}
tampilkan_nama();*/

// String Function
    /*$nama = "muhammad raden iqbal hafidz Fauzi ";
    echo $nama;
    echo '<br/>';
    echo strtoupper($nama);
    echo '<br/>';
    echo ucwords($nama);
    echo '<br/>';
    echo lcfirst($nama);
    echo '<br/>';
    echo strtolower($nama);*/

    // Function define by user :: void
    /*function salam($nama){
        echo "<h2>Assalamu'alaikum".strtoupper($nama)."</h2>";
    }

    salam("ali");
    salam("fadil");
    salam();*/

    // Fungsi return value
    /*function jumlah($a , $b){
        return $a + $b;
    }

    echo '$a + $b = '.jumlah(2,8);*/

    // Membuat Fungsi
    /*function perkenalan(){
        echo "Assalamu'alaikum, ";
        echo "Perkenalkan, nama saya Zhukov<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan();

    echo "<hr/>";

    //memanggil lagi
    perkenalan();*/

    // Membuat Fungsi
    /*function perkenalan($nama, $salam){
        echo $salam.",";
        echo " Perkenalkan, nama saya ".$nama."<br/>";
        echo " Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    /*perkenalan("Zhukov", "Hai");

    echo "<hr/>";

    $saya = "Erwin Romel";
    $ucapansalam = "Selamat Pagi";

    // memanggilnya lagi
    perkenalan($saya, $ucapansalam);*/

    // membuat fungsi
    /*function perkenalan($nama, $salam="Assalamu'alaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Jarwo", "Hi");

    echo "<hr>";

    $saya = "Bambang";
    $ucapansalam = "Selamat pagi";
    // memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);*/

    // membuat fungsi
    /*function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah ". hitungUmur(2003, 2022) ." tahun";*/

    // membuat fungsi
    /*function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamu'alaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        // memanggil fungsi lain
        echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi perkenalan
    perkenalan("Ardianta");*/

    /*function faktorial($angka) {
        if ($angka < 2) {
            return 1;
        } else {
            // memanggil dirinya sendiri
            return ($angka * faktorial($angka-1));
        }
    }

    // memanggil fungsi
    echo "faktorial 5 adalah " . faktorial(5);*/

    /*function pangkatDua($a){
        $a = $a * $a;
    }
    $a = 20;
    echo 'Sebelum Nilai $a :'.$a;
    pangkatDua($a);
    echo '<br/>Sesudah Nilai $a :'.$a;*/

    function pangkatDua($a){
        global $a;
        $a = $a * $a;
    }
    $a = 20;
    echo 'Sebelum Nilai $a :'.$a;
    pangkatDua($a);
    echo '<br/>Sesudah Nilai $a :'.$a;

?>
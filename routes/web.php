<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Basic
Route::get('halo',function()
{
        return 'Halo Ini Aplikasi Laravel Pertama Saya'.
               '<br>Laravel is Magical Framework';
});

Route::get('about',function()
{
        return '<h1>Halo</h1>'
               .'Selamat datang di webapp saya<br>'
               .'Laravel,emang keren.';
});

//Route Basic
Route::get('profil',function()
{
        return '<h1>Halo1</h1>'
                .'Selamat datang di profil saya<br>'
                .'nama saya bilgis maharani.';
});

//Route Parameter
Route::get('biodata/{nama}',function($a)
{
    return 'Halo Ini Biodata '.$a;
});

//Route Parameter
Route::get('biodataa/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d)
{
        return 'Nama saya '.$a.
               '<br>alamat saya '.$b.
               '<br>sekolah saya '.$c.
               '<br>umur saya '.$d;
});

//Route optional parameter
Route::get('pesan/{a?}/{b?}/{c?}',function($mkn=null, $minum=null, $harga=null){
        if(isset($mkn)){
                $mkn = "Anda memesan $mkn";
                echo $mkn;
        }
        if(isset($minum)){
                $minum = " & $minum";
                echo $minum;
        }
        if(isset($harga)){
                $harga = " dengan harga $$harga<br>";
                echo $harga;
        }

        if(!$mkn && !$minum && !$harga && !$sz)
        return " Anda Belum Memesan Sesuatu";
        if ($harga == 25000) {
           echo " Anda memesan minuman dengan ukuran medium";
        }if ($harga == 35000) {
           echo " Anda memesan minuman dengan ukuran large";
        }if ($harga < 25000) {
           echo " Anda memesan minuman dengan ukuran small";
        }
});

//Route optional parameter
Route::get('tni/{nama}/{bb}/{umur}',function($nm=null, $bb=null, $umur=null){
        if(isset($nm)){
                $nm = "Nama anda $nm";
                echo "$nm<br>";
        }
        if(isset($bb)){
                $bb = "Berat badan anda $bb";
                echo "$bb<br>";
        }

        if ($bb == 100 ){
                echo "Anda harus turunkan berat badan<br>";
        }
        if ($bb == 75 ){
                echo "berat badan anda ideal<br>";
        }
        if ($bb == 50 ){
                echo "naikan berat badan anda<br>";
        }
        if ($bb < 50 ){
                echo "Anda kurang nutrisi<br>";
        }
        if(isset($umur)){
                $umur = "umur anda $umur";
                echo "$umur<br>";
        }
        if(umur == 30 && $umur <= 40){
                echo "perwira";
        }if(umur == 40 && $umur <= 50){
                echo "laksamana";
        }if(umur == 50 && $umur <= 60){
                echo "jendral";
        }

        if (!$nm && !$bb)
        return "silahkan isi data terlebih dahulu";
});

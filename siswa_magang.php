<?php

$data_siswa=[];

while(true)
{
    // data siswa
    $siswa=&$data_siswa;

    // baner Aplikasi
    tampil ("tampil Siswa Magang TOP");
    tampil ("=======================");

    // user input data sisiwa magang TOP

    $input_siswa=readline ("masukkan data siswa ? ");

    // validasi huruf
    
    if(!preg_match("/^[a-zA-Z]*$/",$input_siswa)|| empty($input_siswa))
    {
        echo PHP_EOL;
        echo "Hanya huruf yang diijinkan, tidak boleh menggunakan karakter dan huruf !!! \n";
        continue;
    }

    // simpan data siswa

    $siswa[]=$input_siswa;

    //munculkan data siswa

    tampilData($siswa);

    //tanya user lanjut atau tidak

    tanyaUser();

}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}


function tanyaUser()
{
    $tanya=readline("Tambah data? (YES/NO) :");

    if($tanya=="no" || $tanya!=="yes")
    {
        tampil("Terima Kasih Telah Berkunjung!!!!!!!");
        exit;
    }
}

function tampilData($siswa)
{
    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
}















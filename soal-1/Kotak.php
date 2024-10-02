<?php
class PersegiPanjang
{
    // deklarasikan panjang dan lebar
    public $panjang;
    public $lebar;
    public $Luas;
    public $keliling;


    // deklarasikan metode konstruktor
    public function __construct($panjang, $lebar)
    {
        $this -> panjang = $panjang;
        $this -> lebar = $lebar;
    }


    // deklarasikan metode mutator dan asesor



    public function hitungLuas()
    {
        return $this -> panjang * $this -> lebar;
    }

    public function hitungKeliling()
    {  
        return 2*($this -> panjang + $this -> lebar);
    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";


?>
<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $merek;
    public $warna;
    public $kecepatan;

    public function __construct($merek, $warna, $kecepatan)
    {
        $this -> merek = $merek;
        $this -> warna =$warna;
        $this -> kecepatan = $kecepatan;
    }


    // contoh metode melaju()
    public function melaju() {
        echo "Mobil hazure sedang melaju dengan kecepatan $this->kecepatan <br>";
    }

    public function berhenti(){
        echo "mobil hazure mendadak berenti karena ada mobil warna $this->warna didepan <br>";
    }
    
    public function perkenalan() {
        echo "oh ya merek mobil yg sekarang dikendarai oleh hazure adalah $this->merek <br>";
        echo "jadi hazure sekarang menuju taman untuk bertemu dengan sirkel randomiz <br>";
    }

    public function klakson() {
        echo "hazure ngeklakson motor yg menghalangi jalannya <br>";
    }
    
}


$hazure = new mobil("randomizer", "Kuning", 100);
echo $hazure -> melaju();
echo $hazure -> berhenti();
echo $hazure -> perkenalan();
echo $hazure -> klakson();


// buat sebuah objek mobil dan lengkapi atributnya


// panggil keempat metode yang terdapat pada kelas Mobil


?>
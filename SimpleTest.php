<?php
// ini adalah pernyataan use yang mengimpor kelass TestCase dari kerangka kerja PHPUnit.
use PHPUnit\Framework\TestCase;

// ini adalah pernyataan require_once yang digunakan untuk menyertakan file "Wordcount.php".
require_once "Wordcount.php";

// ini adalah deklarasi kelas yang merupakan kelas pengujian.
class SimpleTest extends TestCase
{
    // ini adalah deklarasi metode yaitu metode pengujian yang akan menguji fungsi. 
    public function testCountWords()
    {
        // ini adalah baris kode yang membuat objek dari kelas.
        $Wc = new WordCount();

        // ini adalah deklarasi variabel yang berisi kalimat yang akan diuji jumlah katanya. 
        $TestSentence = "My name is Joko"; // 4 Kata ..
        // ini adalah baris kode yang memanggil metode 'countWords' dari objek '$Wc' dan menyimpan hasilnya dalam variabel '$WordCount'.
        $WordCount = $Wc->countWords($TestSentence);

        // ini adalah pernyataan pengujian yang menggunakan metode 'assertEquals' dari kelas 'TestCase'.
        $this->assertEquals(4, $WordCount);
    }
}
?>
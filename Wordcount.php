<?php
// ini adalah deklarasi kelas.
class WordCount
{
    // ini adalah deklarasi metode yang diberi nama countWords.
    public function countWords($sentence)
    {
        // 'count(explode(" ", $sentence)' berfungsi untuk memecah kalimat menjadi sebuah array kata-kata.
        // 'count(...)' adalah fungsi yang digunakan untuk menghitung jumlah elemen dalam arrya.
        // 'return ...' berfungsi untuk mengembalikan jumlah kata sebagai hasil dari metofe "countWords".
        return count(explode(" ", $sentence));
    }
}
?>
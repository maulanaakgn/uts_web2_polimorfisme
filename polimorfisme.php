<?php
abstract class namaBuah {
    abstract public function deskripsi();
}

class Jeruk extends namaBuah {
    public function deskripsi() {
        return "Ini adalah buah jeruk";
    }
}

class Nanas extends namaBuah {
    public function deskripsi() {
        return "Ini adalah buah nanas";
    }
}

$Buah = [new Jeruk(), new Nanas()];
foreach ($Buah as $namaBuah) {
    echo $namaBuah->deskripsi() . "\n";
}
?>

# 21552011144_Azki Maulana Assariy_UTS_WEB2
## Contoh Polimorfisme :
```php
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
```

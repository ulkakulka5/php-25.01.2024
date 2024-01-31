<?php
class Ksiazka {
    protected $tytul;
    protected $autor;
    protected $rokWydania;
    protected $wydawnictwo;
    protected $gatunek;
    private static $identyfikator = 0;

    public function __construct(s) {
        $this->tytul = "Pan Tadeusz";
        $this->autor = "Adam Mickiewicz";
        $this->rokWydania = 1834;
        $this->wydawnictwo = "GREG";
        $this->gatunek = "Epos";
        self::$identyfikator++;
    }

    public function wpiszTytul($tytul) {
        $this->tytul = $tytul;
    }

    public function wpiszAutora($autor) {
        $this->autor = $autor;
    }

    public function wpiszRokWydania($rokWydania) {
        $this->rokWydania = $rokWydania;
    }

    public function wpiszWydawnictwo($wydawnictwo) {
        $this->wydawnictwo = $wydawnictwo;
    }

    public function wpiszGatunek($gatunek) {
        $this->gatunek = $gatunek;
    }

    public function pobierzTytul() {
        return $this->tytul;
    }

    public function pobierzAutora() {
        return $this->autor;
    }

    public function pobierzRokWydania() {
        return $this->rokWydania;
    }

    public function pobierzWydawnictwo() {
        return $this->wydawnictwo;
    }

    public function pobierzGatunek() {
        return $this->gatunek;
    }

    public function pobierzIdentyfikator() {
        return self::$identyfikator;
    }
}

class Czasopismo extends Ksiazka {
    private $nr;

    public function wpiszNr($nr) {
        $this->nr = $nr;
    }

    public function pobierzNr() {
        return $this->nr;
    }
}

class Multibook extends Czasopismo {
    public function __construct() {
        parent::__construct();
        $this->autor = "Nie podano Autora multibooka";
    }
}
$ksiazka1 = new ksiazka();
$ksiazka2 = new ksiazka();
$ksiazka2 -> wpiszTytul("Komputer Świat - Zostań Mistrzem! Photoshop");
$ksiazka2 -> wpiszAutora("Alicja Żebruń");
$ksiazka2 -> wpiszRokWydania(2022);
$ksiazka2 -> wpiszWydawnictwo("empik");
$ksiazka2 -> wpiszGatunek("Czasopismo");

$ksiazka3 = new ksiazka();
$ksiazka2 -> wpiszTytul("Quo Vadis");
$ksiazka2 -> wpiszAutora("Henryk Sienkiewicz");
$ksiazka2 -> wpiszRokWydania(1896);
$ksiazka2 -> wpiszWydawnictwo("GREG");
$ksiazka2 -> wpiszGatunek("Powieść historyczna");




$czasopismo1 = new czasopismo();
$czasopismo1 -> wpiszNr("25/88");
$czasopismo1 -> wpiszTytul("Komputer Świat - Zostań Mistrzem! Photoshop");
$czasopismo1 -> wpiszRokWydania(2022);
$czasopismo1 -> wpiszWydawnictwo("Empik");



echo "ksiazka1 Tytuł: ". $ksiazka1->pobierzTytul()." Autor: " . $ksiazka1->pobierzAutora()." Rok Wydania: " . $ksiazka1->pobierzRokWydania()." Wydawnictwo: " . $ksiazka1->pobierzWydawnictwo() ." Gatunek: " .$ksiazka1->pobierzGatunek()."Identyfikator: " . $ksiazka1->pobierzIdentyfikator();
echo "<br><br>";
echo "ksiazka2 Tytuł: ". $ksiazka2->pobierzTytul()." Autor: " . $ksiazka2->pobierzAutora()." Rok Wydania: " . $ksiazka2->pobierzRokWydania()." Wydawnictwo: " . $ksiazka2->pobierzWydawnictwo() ." Gatunek: " .$ksiazka2->pobierzGatunek()."Identyfikator: " . $ksiazka2->pobierzIdentyfikator();
echo "<br><br>";
echo "ksiazka3 Tytuł: ". $ksiazka3->pobierzTytul()." Autor: " . $ksiazka3->pobierzAutora()." Rok Wydania: " . $ksiazka3->pobierzRokWydania()." Wydawnictwo: " . $ksiazka3->pobierzWydawnictwo() ." Gatunek: " .$ksiazka3->pobierzGatunek()."Identyfikator: " . $ksiazka3->pobierzIdentyfikator();
echo "<br><br>";
echo "Czasopismo 1 Tytuł: ". $czasopismo1->pobierzTytul()." Autor: " . $czasopismo1->pobierzAutora()." Rok Wydania: " . $czasopismo1->pobierzRokWydania()." Wydawnictwo: " . $czasopismo1->pobierzWydawnictwo() ." Gatunek: " .$czasopismo1->pobierzGatunek()."Identyfikator: " . $czasopismo1->pobierzIdentyfikator()."Numer: ".$czasopismo1->pobierzNr();



?>

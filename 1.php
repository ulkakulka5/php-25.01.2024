<?php
class ksiazka{
        public $tytul;
        public $autor;
        public $rok_wydania;
        public $wydawnictwo;
        public $gatunek;
        public $identyfikator;//?

        protected function wypiszTytul($tytul2){
           $this -> $tytul = $tytul2;
        }
        
        protected function wypiszAutora($autor2){
            $this -> $autor = $autor2;
         }
         
         protected function wypiszRokWydania($rw){
            $this -> $rok_wydania = $rw;
         }
         
         protected function wypiszWydawnictwo($w2){
            $this -> $wydawnictwo = $w2;
         }
         
         protected function wypiszGatunek($gatunek2){
            $this -> $gatunek = $gatunek2;
         }
         
         protected function wypiszIdentyfikator($id){
            $this -> $identyfikator = $id;
         }
        public function pobierzTytul(){
            return $this -> $tytul;
         }
         public function pobierzAutora(){
            return $this -> $autor;
         }
         public function pobierzRokWydania(){
            return $this -> $rok_wydania;
         }
         public function pobierzWydawnictwo(){
            return $this -> $wydawnictwo;
         }
         public function pobierzgatunek(){
            return $this -> $gatunek;
         }
         public function pobierzid(){
            return $this -> $identyfikator;
         }

         public function __contstruct(){
            $this -> tytul = "Pan Tadeusz";
            $this -> autor = "Adam Mickiewicz";
            $this -> rok_wydania = 1834;
            $this -> wydawnictwo = "Wilga";
            $this ->gatunek = "epos narodowy";
            $this -> id= 1;
         }
}

class czasopismo extends ksiazka{
    $nr;
    function WypiszNumer($nr2){
        $this-> $nr =$nr2;
    }
    function pobierzNumer(){
        return $this-> $nr;
    }

}
$ksiazka1= new ksiazka();
$ksiazka2=new ksiazka();
$ksiazka3=new ksiazka();

$ksiazka2 -> pobierzTytul("Komputer Świat. Gimp Krok po kroku");
$ksiazka2 -> pobierzAutora("Rafał Kamiński");
$ksiazka2 -> pobierzRokWydania(2012);
$ksiazka2 -> pobierzWydawnictwo("Ringier Axel Springer Polska");
$ksiazka2 -> pobierzgatunek("czasopismo");
$ksiazka2 ->pobierzid(2);

$ksiazka3 -> pobierzTytul("Igrzyska Śmierci");
$ksiazka3 -> pobierzAutora("Suzanne Collins");
$ksiazka3 -> pobierzRokWydania(2012);
$ksiazka3 -> pobierzWydawnictwo("Media rodzina");
$ksiazka3 -> pobierzgatunek("Literatura młodzieżowa");
$ksiazka3 ->pobierzid(3);

$czasopismo1= new czasopismo();
$czasopismo1= pobierzAutora("xyz");
$czasopismo1= pobierzNumer(12/34);



?>

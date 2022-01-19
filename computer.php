<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
    <?php
    /**
     *  Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo
     * */

     class Computer {

        // attributi 
        private $code;
        private $model;
        private $price;
        private $brand;

        // metodi 
        public function __construct($code, $price) {

            $this -> code = setCode($code);
            $this -> priice = setPrice($price);
        }

        // getter/setter 
        public function getCode() {

            return $this -> code;
        }
        public function setCode($code) {

            if(strlen($code) != 6 || !is_numeric($code)) {
                throw new Exception("Code must contain 6 numbers!!");
            }
            $this -> code = $code;
        }

        public function getModel() {

            return $this -> mdoel;
        }
        public function setModel($mdoel) {

            if(strlen($model) < 3 || strlen($model) > 20) {
                throw new Exception("Type a word between 3 and 20 characters!!");
            }
            $this -> mdoel = $mdoel;
        }

        public function getPrice() {

            return $this -> price;
        }
        public function setPrice($price) {

            if(!is_int($price) || $price < 0 || $price > 2000) {
                throw new Exception("Type a price between 0 and 2000!!");
            }
            $this -> price = $price;
        }

        public function getBrand() {

            return $this -> brand;
        }
        public function setBrand($brand) {

            if(strlen($brand) < 3 || strlen($brand) > 20) {
                throw new Exception("Type a word between 3 and 20 characters!!");
            }
            $this -> brand = $brand;
        }

        public function printMe() {

            echo $this;
        }

        public function __toString() {

            return $this -> getBrand() . " "
            . $this -> getModel() . ": "
            . "€" .$this -> getPrice() . " "
            . "[" . $this -> getCode() . "]"
            . "<br>";
        }
        
     }
    ?>
</head>
<body>
    
</body>
</html>
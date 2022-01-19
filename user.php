<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>

    <?php
        /**
     * 
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
     */

        class User {

            // attributi 
            private $username;
            private $password;
            private $age;


            // metodi 
            public function __construct($username, $password) {

                $this -> setUsername($username);
                $this -> setPassword($password);

            }

            //getter/setter username 
            public function getUsername() {
                return $this -> username;
            }
            public function setUsername($username) {
                if(strlen($username) < 3 || strlen($username) > 16) {
                    throw new Exception("Username should have at least 3 characters and not exceed 16!!");
                }
                $this -> username = $username;
            }

            // getter/setter password 
            public function getPassword() {

                return $this -> password;
            }
            public function setPassword($password) {
                if(ctype_alnum($password)) {
                    throw new Exception("Password must contain a special character!!");
                }
                $this -> password = $password;
            }

            // getter/setter age 
            public function getAge() {
                return $this -> age;
            }
            public function setAge($age) {
                if(!is_int($age)) {
                    throw new Exception("Age must be an integer!!");
                }
                $this -> age = $age;
            }

            public function printMe() {

                echo $this . "<br>";
            }

            public function __toString() {

                return $this -> getUsername() . ": "
                . $this -> getAge() . " " 
                . "[" . $this -> getPassword() . "]";
            }
        }
    ?>
</head>
<body>
   <h1>User1</h1> 
   <?php
        try {
            $user1 = new User("Elena", "my_pws");
            $user1 -> setAge(28);
    
    
            $user1 -> printMe();
        } catch (Exception $e) {
    
            echo  "<h2>" . $e -> getMessage() . "</h2>";
        }
   ?>

    <h1>User2</h1> 
    <?php
        try {
            $user2 = new User("El", "my_pws");
            $user2 -> setAge(28);
    
    
            $user2 -> printMe();
        } catch (Exception $e) {
    
            echo  "<h2>" . $e -> getMessage() . "</h2>";
        }
    ?>
   
    <h1>User3</h1> 
    <?php
        try {
            $user3 = new User("Giacomo", "mypass18");
            $user3 -> setAge(28);


            $user3 -> printMe();
        } catch (Exception $e) {

            echo  "<h2>" . $e -> getMessage() . "</h2>";
        }
    ?>

    <h1>User4</h1> 
    <?php
        try {
            $user4 = new User("Luca", "my_pws");
            $user4 -> setAge("ffew");


            $user4 -> printMe();
        } catch (Exception $e) {

            echo  "<h2>" . $e -> getMessage() . "</h2>";
        }
    ?>
</body>
</html>
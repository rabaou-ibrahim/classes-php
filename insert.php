<?php

if (isset($_POST['Envoyer'])) {
    class User 
    {
        // Attributs de la classe User

        private $id;
        public $login;
        public $email;
        public $firstname;
        public $lastname;
        
        function __construct() 
        {
           $this->login=$_POST['login'];
           $this->email=$_POST['email'];
           $this->firstname=$_POST['firstname'];
           $this->lastname=$_POST['lastname'];    
        }// Constructeur qui initialise les attributs des objets

        // Les méthodes

        public function getUser(){
            return $this->login;
        }//function getter
    
    }

    $myUser = new User(NULL, $_POST['login'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
    // Instanciation de la classe User pour créer un objet "student"

    echo "C'est lui " . $myUser->getUser() . " !";
}

?>

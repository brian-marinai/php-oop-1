<?php

  class User {

      public $name;
      public $lastname;
      public $mail;
      public $username;
      public $password;

      public function __construct($name = "", $lastname = "", $mail, $username, $password ) {

          $this -> name = $name;
          $this -> lastname = $lastname;
          $this -> mail  = $mail;
          $this -> username = $username;
          $this -> password = $password;

      }

      public function __toString() {

          return "User:<br>name: " . $this -> name . "<br>"
               . "lastname: " . $this -> lastname . "<br>"
               . "mail: " . $this -> mail . "<br>"
               . "username: " . $this -> username . "<br>"
               . "password: " . $this -> password . "<br>";

      }
  }

  $user1 = new User("Giorno", "Giovanna", "passione@gmail.com", "Gold Experience", "Admin123");
  echo $user1;

  echo "<br><br>";

  $user2 = new User("Bruno", "Bucciarati", "passione@gmail.com", "Sticky Fingers", "Admin123");
  echo $user2;

?>

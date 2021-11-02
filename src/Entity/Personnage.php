<?php 

namespace App\Entity;
class Personnage {

  public $name;
  public $age;
  public $sexe;
  public $stats = [];

  public static $personnes=[];

  public function __construct($name, $age, $sexe, $stats) {
    $this->name = $name;
    $this->age = $age;
    $this->sexe = $sexe;
    $this->stats = $stats;
    self::$personnes[] = $this;
  }

  public static function createPerson() {
    $p1 = new Personnage("Marco", 24, true, ["force" => 3, "agi" => 1, "intel" => 3]);
    $p2 = new Personnage("Johnny", 56, true, ["force" => 4, "agi" => 4, "intel" => 2]);
    $p3 = new Personnage("Bob", 32, true, ["force" => 2, "agi" => 1, "intel" => 1]);
    $p4 = new Personnage("Martin", 14, true, ["force" => 2, "agi" => 2, "intel" => 2]);
  }

}



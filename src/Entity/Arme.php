<?php 


namespace App\Entity;


class Arme {
  public $name;
  public $description;
  public $domages;

  public static $armes = [];

  public  function __construct($name, $description, $domages) {
    $this->name = $name;
    $this->description = $description;
    $this->domages = $domages;
    self::$armes[] = $this;
  }

public static function getArmeParNom($name){
foreach (self::$armes as $key => $arme) {
  if ($arme->name === $name) {
    return $arme;
  }
}
}
  public static function createWeapon() {
    new Arme('épée', "une épée courte et usée", 4);
    new Arme("hache", "une petite hache de bucheron", 6);
    new Arme("arc", "un arc elfique", 9);
  }
}
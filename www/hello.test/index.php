<?php
Class Tank{
    public $name;
    public $armor;
    public $damage;
    public function __construct($name = null, $armor = null, $damage = null)
    {
        $this->name -> $name;
        $this->armor -> $armor;
        $this->damage -> $damage;
    }
    public function attack(Tank $target){
    echo "{$this->name} выстрелил по {}"
    }
}
?>
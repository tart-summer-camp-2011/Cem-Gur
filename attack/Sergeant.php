<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sergeant
 *
 * @author Cem
 */
class Sergeant extends SoldierAbstract implements ArmyInterface {
    
    function __construct() {
        echo 'New sergeant in army';
        echo '<br>';
    }
    
    public function setAttackPower($value) {
        $this->_attackPower = $value;
    }
    
    public function setLife($value) {
        $this->_life = $value;
    }
    
    public function setSide($value){
        $this->_side = $value;
    }
    
    public function soldierStatus($value) {
        echo '*****';
        echo "<br>".$this->getSide()." ***SOLDIER ".$value."'s life: ".$this->getLife()."...*** <br>";
        echo '*****';
        echo "<br>";
        echo "<br>";
    }
    
    public function victoryMessage() {
        echo '<br>';
        echo '********<br>';
        echo $this->getSide()." WON THE WAR<br>";
        echo '********<br>';
    }

}

?>

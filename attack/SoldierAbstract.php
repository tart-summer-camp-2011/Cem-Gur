<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SoldierAbstract
 *
 * @author Cem
 */
define("ARMY1", "Army numbered 1");
define("ARMY2", "Army numbered 2");

abstract class SoldierAbstract {
    
    protected $_attackPower;
    protected $_life;
    protected $_side;

    public function getAttackPower(){
        return $this->_attackPower;
    }
    
    public function getLife(){
        return $this->_life;
    }
    
    public function getSide() {
        return $this->_side;        
    }
}

?>

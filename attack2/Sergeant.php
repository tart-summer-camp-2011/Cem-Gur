<?php
/*
 * 
 */
class Sergeant extends SoldierAbstract{
    public function __construct()
    {
      $this->setLife(70);
      $this->setAttackPower(5);
    }

}
?>
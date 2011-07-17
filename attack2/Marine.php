<?php
/*
 * 
 */
class Marine extends SoldierAbstract{
    public function __construct()
    {
		$this->setLife(100);
        $this->setAttackPower(3);
    }

}
?>
<?php
/*
 * 
 */
class SoldierAbstract
{
    protected $_life;
    protected $_attackPower;


    public function getLife()
    {
        return $this->_life;
    }

     public function setLife($life)
    {
       $this->_life= $life;

    }
    public function getAttackPower()
    {
        return $this->_attackPower;
    }
    public function setAttackPower($attackPower)
    {
        $this->_attackPower = $attackPower;
    }

    /**
     * @param SoldierAbstract $soldier
     * @return void
     */
	 
    public function attack($soldier)
    {
        $soldier->setLife($soldier->getLife() - $this->getAttackPower());
    }
}
?>


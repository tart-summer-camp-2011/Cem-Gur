<?php
/*
 * 
 */
class Combat
{
    /**
     * @var integer
     */

    protected $_soldierArray = array();
    /**
     * jhgj jhgj
     *
     * @param $soldierType
     * @return int
     */


    /**
     * @param integer $soldierCount
     * @return array
     */
    public function createSoldier($soldierCount)
    {
        $soldier = new HarpAcademi();

        for ( $i=0; $i < $soldierCount; $i++){
            $this->_soldierArray[$i] = $soldier->getSoldier();
        }
    }

    public function letsWar()
    {
        while (!$this->checkVictory()) {

            $count = count($this->_soldierArray);

            $fighterIndex1 = rand(0, $count - 1);
            $fighterIndex2 = rand(0, $count - 1);

            $soldier1 = $this->_soldierArray[$fighterIndex1];
            $soldier2 = $this->_soldierArray[$fighterIndex2];

           if (($fighterIndex1 != $fighterIndex2 &&
                !($soldier1 instanceof Marine &&  $soldier2 instanceof Marine) &&
                !($soldier1 instanceof Sergeant && $soldier2 instanceof Sergeant))) {
                $soldier1->attack($soldier2);

               if ($soldier2->getLife() > 0) {
                   $soldier2->attack($soldier1);

                   if ($soldier1->getLife() <= 0) {
                        $this->_removeSoldier($fighterIndex1);
                   }
               } else {
                   $this->_removeSoldier($fighterIndex2);
               }
            }
        }

        $this->printVictory();
    }

    public function printVictory()
    {
        $lastStandingSoldier = $this->_soldierArray[0];

        if ($lastStandingSoldier instanceof Marine) {
            echo 'Marineler kazandı heyoo!';
        } else {
            echo 'Sergeantler kazandı heyoo!';
        }

        print_r($this->_soldierArray);
    }

    protected function _removeSoldier($index)
    {
       echo 'bir asker oldu <br/>';
       unset($this->_soldierArray[$index]);
       sort($this->_soldierArray);
    }

    public function checkVictory()
    {
        $marineCount = 0;
        $sergeantCount = 0;

        foreach ($this->_soldierArray as $soldier) {
            if ($soldier instanceof Marine) {
                $marineCount++;
            } else if ($soldier instanceof Sergeant) {
                $sergeantCount++;
            }
        }

        if ($marineCount == 0 || $sergeantCount == 0) {
            return TRUE;
        }

        return false;
    }
}
?>

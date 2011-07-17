<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fth
 * Date: 05.07.2011
 * Time: 16:04
 * To change this template use File | Settings | File Templates.
 */
 
class HarpAcademi {

    public function  getSoldier()
    {
        $randomSergeant = Rand(0,1);

            if($randomSergeant==0){
                $randomSergeant = new Marine;
            }

            else
            {
                $randomSergeant = new Sergeant();
            }

        return $randomSergeant;

    }


}

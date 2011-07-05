<?php
include 'autoload.php';

$_armies = array(ARMY1, ARMY2);

for($i = 0; $i < 6; $i++){
    if($i%2 == 0){
        $soldier["$i"] = new Sergeant();
        $soldier["$i"]->setSide($_armies[rand(0, 1)]);
        $soldier["$i"]->setAttackPower(rand(1, 5));
        $soldier["$i"]->setLife(rand(10, 20));
    }else{
        $soldier["$i"] = new Marine();
        $soldier["$i"]->setSide($_armies[rand(0, 1)]);
        $soldier["$i"]->setAttackPower(rand(1, 5));
        $soldier["$i"]->setLife(rand(10, 20));
    }    
}

while(count($soldier) > 0){
    
    unset($sides);
    for($i = 0; $i < count($soldier)-1; $i++){
        $sides["$i"] = $soldier["$i"]->getSide();
    }
    $sides = array_unique($sides);
    $sides = array_values($sides);
    
    if(count($sides) == 1){
        break;
    }
    
    $s1 = rand(0, count($soldier)-1);
    $s2 = rand(0, count($soldier)-1);

    
    if(isset($soldier["$s1"]) && isset($soldier["$s2"])){
        
        $a = $soldier["$s1"]->getSide();
        $b = $soldier["$s2"]->getSide();
    
        if( $a == $b){
            echo "***Friends don't fire each other... SOLDIER ".$s1." and SOLDIER ".$s2." in the same army...***<br>";
        }else{
            echo "***SOLDIER ".$s1." and SOLDIER ".$s2." is fighting right now...***<br>";
            echo "<br>";
            
            $lifeForSoldier1 = $soldier["$s1"]->getLife();
            $lifeForSoldier2 = $soldier["$s2"]->getLife();
            
            $attackPowerForSoldier1 = $soldier["$s1"]->getAttackPower();
            $attackPowerForSoldier2 = $soldier["$s2"]->getAttackPower();
            
            $soldier["$s1"]->setLife($lifeForSoldier1 - $attackPowerForSoldier2);
            $soldier["$s2"]->setLife($lifeForSoldier2 - $attackPowerForSoldier1);
            
            $lifeForSoldier1 = $soldier["$s1"]->getLife();
            $lifeForSoldier2 = $soldier["$s2"]->getLife();
            
            $soldier["$s1"]->soldierStatus("$s1");
            $soldier["$s2"]->soldierStatus("$s2");
            
            if($lifeForSoldier1 <= 0){
                unset($soldier["$s1"]);
                $soldier = array_values($soldier);
            }
            
            if($lifeForSoldier2 <= 0){
                unset($soldier["$s2"]);
                $soldier = array_values($soldier);
            }
        }
    }else{
        break;
    }
}


if(isset ($soldier[0])){
    echo $soldier[0]->victoryMessage();
}else{
    echo "Draw";
}

?>

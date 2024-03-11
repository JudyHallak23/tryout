<?php
    include("InitialSessionCity.php");
    $cities = $city1->getAllCities();

    print_r($cities);
    if(!empty($cities)){
        echo "<table border=1><tr><th>One Week</th>";
        foreach($cities as $key=>$value){
            echo "<td>".$value."</td>";
        }
        echo "</tr><tr><td>Total</td>";
        
        foreach($cities as $key=>$value){
            $index=$city1->getCityIndex($value);
           print_r($index);
            if($key == $index){
                $sum=0;
                for($i=0;$i<7;$i++){
                    $sum+= $city1->infectionnb[$index][$i];
                   print_r($city1->infectionnb);
                }
              
            }
            echo "<td>".$sum."</td>";
        }
        echo "</tr></table>";
    }

?>
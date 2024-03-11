<?php
 include("InitialSessionCity.php");
$cities=$city1->getAllCities();
if(!empty($cities)){
    echo "<h2>Choose a City</h2>";
    foreach($cities as $key=>$value){
        echo "<a href='showCity.php?city=".$value."'>".$value."</a><br>";

}
}
?>
<?php
    include("InitialSessionCity.php");
    $cities = $city1->getAllCities();
    print_r($cities);

    if(!empty($cities)){
        echo "<form action='addInfections.php' method='POST'>";

        echo "<table border=1>
              <tr>
              <th>Infections Nb</th>
              <th>Monday</th>
              <th>Tuesday</th>
              <th>Wednesday</th>
              <th>Thursday</th>
              <th>Friday</th>
              <th>Saturday</th>
              <th>Sunday</th>
              </tr>";
            
    foreach($cities as $key=>$value){
        echo "<tr><td>".$value."</td>";
        for($i=0;$i<7;$i++){
            echo "<td>";
            echo "<input type='text' name='inf[".$key."][".$i."]'>";
            echo "</td>";
        }
        echo "</tr>";
    }
   echo"</table><br>"; 
   echo "<input type='submit' name='saveinfections' value='Save Infections'>
         </form>";

         if(isset($_POST['saveinfections'])){
            unset($city1->infectionnb);
            foreach($cities as $key=>$value){
                for($column=0;$column<7;$column++){
                    $matrix[$column]= $_POST['inf'][$key][$column];
                }
                $city1->infectionnb[]= $matrix;
            }					
				print_r( $city1->infectionnb);
        }
}
?>



<?php
include_once("InitialSessionCity.php");
if(isset($_GET['city'])){
    echo "Infections in ".$_GET['city'];
    $index = $city1->getCityIndex($_GET['city']);
    echo "<table border=1>
          <tr>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Sunday</th>
          <tr>";
}
    echo "<tr>";
   	foreach($city1->infectionnb as $key => $value){
				if($key == $index){
					foreach($value as $key1 => $value1){
					    echo "<td>".$value1."</td>";
					}
				}
			}	
	echo "</tr>";



?>
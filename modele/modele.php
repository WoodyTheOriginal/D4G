<?php

class modele {

private $unPdo , $uneTable, $unId; 

public function chargerCSV()
		{

			$file_to_read = fopen('data.csv', 'r');
 
if($file_to_read !== FALSE){
     
    echo "<table>\n";
    while(($data = fgetcsv($file_to_read, 100, ',')) !== FALSE){
        echo "<tr>";
        for($i = 0; $i < count($data); $i++) {
            echo "<td>".$data[$i]."</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
 
    fclose($file_to_read);

		}


?>

}
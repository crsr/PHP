<?php
$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime; 
error_reporting(1);
echo "<pre>";
$connection = new MongoClient();
$db = $connection->unart_parsing;

$collection = $db->parsed;
$data = $collection->find();
    $c =0;
    $formatted_array = array();
    foreach($data as $key => $d){
        $c++;
        #search and set as $key sheet name
        $unique_file = $d['Foaie'];
        $formatted_array[$unique_file] = $d;
        
        #search and set as $key file name   
        $unique_sheet = $d['Fisier'];
        $formatted_array_final[$unique_sheet] = $formatted_array;
        
        #destroy used values
        unset($formatted_array_final[$unique_sheet][$unique_file]['Foaie']); 
        unset($formatted_array_final[$unique_sheet][$unique_file]['Fisier']); 
        unset($formatted_array_final[$unique_sheet][$unique_file]['_id']); #unique id from mongoDB 
        print_r($formatted_array_final);        
    } 
    
$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo "This page was created in ".$totaltime." seconds"; 
?>
<?php 
    function csvToArray($csvPath){
        $csvArray = array();
        $firstFlg = true;
        $keys = array();
        $count = 0;
        $file = fopen($csvPath, 'r');

        while ($line = fgetcsv($file)) {
            if($firstFlg){
            for($i = 0; $i < count($line); $i++){
                array_push($keys,$line[$i]);
            }
            $firstFlg = false;
            }else{
            for($i = 0; $i < count($line); $i++){
                $csvArray[$count][$keys[$i]] = $line[$i];
            }
            $count++;
            }
        }
        fclose($file);
        return $csvArray;
    }

    
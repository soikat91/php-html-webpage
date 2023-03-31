<?php
function isChecked($inputName,$value){
      
    if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value,$_REQUEST['fruits'])){

        echo " checked ";
    }
    
}

function isCheckedFruits($value){
      
    if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value,$_REQUEST['fruits'])){

        echo " checked ";
    }

    
}



function seletedCity($cities){

    foreach($cities as $city){

        printf("<option value='%s'>%s</option>\n",strtolower($city),ucwords($city));
    }
}
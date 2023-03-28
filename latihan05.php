<?php
    //model 1 
   // $age = array ("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");



   //model 2
      $age["AGUS"] = "35";
      $age["AGNES"] = "65";
      $age["JARJIT"] = "30";
      $age["MEIMEI"] = "25";
      $AGE["KAKROS"]= "35";


    header("Content-Type: application/json");
    echo json_encode($age);

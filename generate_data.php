<?php
$parts = array();
$n = 100; //nunmber of parts

//assign status to eachpart
foreach(range(1,$n) as $x){
    if($x % 15 == 0){
        $parts[] = array("id"=>$x, "status"=>"Coating Damage and Lightning Strike");
    }elseif($x % 5 == 0){
        $parts[] = array("id"=>$x, "status"=>"Lightning Strike");
    }elseif($x % 3 == 0){
        $parts[] = array("id"=>$x, "status"=>"Coating Damage");
    }else{
        $parts[] = array("id"=>$x, "status"=>$x);
    }
}

echo json_encode($parts);
?>
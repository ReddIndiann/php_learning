<?php


function add($a,$b){

$result = $a + $b;

echo "result: " . $result;

};



// add(1,2);

function subtract($a,$b){
    $result = $a - $b;
    echo "result: " . $result;
    };

//subtract(35,2);



function findBiggest(array $arr){

	return max($arr);
}




$big = findBiggest([1,2,3]);
echo $big;

;
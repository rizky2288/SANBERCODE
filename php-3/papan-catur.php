<?php

function papan_catur($angka) {
// tulis kode di sini\        
for($row = 1 ; $row <= $angka ; $row++){
    for($col = 1 ; $col <= $angka; $col++){
        $total=$row+$col;
        if($total%2==0){
            echo " * ";
        }else{
            echo " #";
        }
    }
    echo "<br>";
}

}

// TEST CASES
echo papan_catur(4) . "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8) . "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) . "<br>"; 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
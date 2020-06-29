<?php

function isPalindrome($n)  { 
    for ($i = 0; $i < floor(strlen($n) /  2); $i++){
        if ($n[$i] != $n[strlen($n) - 1 - $i]){
            return false;
        }else{
            return true;
        } 

    } 
} 
  
function convertNumIntoString($num) {   
    if ($num == 0) 
    return "0"; 
    $Snum = ""; 
    while ($num > 0)  
    { 
        $Snum .= ($num % 10 - '0'); 
        $num =(int)($num / 10); 
    } 
    return $Snum; 
} 
  
function palindrome_angka($angka) { 
    // $RPNum = $angka - 1; 
  
    // while (!isPalindrome(convertNumIntoString(abs($RPNum)))){
    //     $RPNum--;
    // }  
    
    $SPNum = $angka + 1;
    if($angka < 10){
        return $angka + 1; 
    } 
    while (!isPalindrome(convertNumIntoString($SPNum)))  
    $SPNum++;  
  
    // if (abs($angka - $RPNum) > abs($angka - $SPNum)) {
    //     return $SPNum; 
    // }else{
    //     return $RPNum; 
    // }
    return $SPNum;
} 

// TEST CASES
echo palindrome_angka(8) . "<br>"; // 9
echo palindrome_angka(10) . "<br>"; // 11
echo palindrome_angka(117) . "<br>"; // 121
echo palindrome_angka(175) . "<br>"; // 181
echo palindrome_angka(1000) . "<br>"; // 1001

?>
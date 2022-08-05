<?php
function fibo(int $iNum){
    $fib = [0,1];
    
    for ($i = 2; $i <= $iNum; $i++) {
        
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

    echo (json_encode(fibo(10)));

?>

<?php
echo '色を選んでください(1.黒、2.白、3.赤)：';
$color = (int)trim(fgets(STDIN));

// if ($color === 1){
//     echo '黒を選びました';
// }elseif($color === 2){
//     echo '白を選びました'; 
// }elseif($color === 3){
//     echo '赤を選びました';
// }

switch ($color){
    case 1:
        echo '黒を選びました';
        break;
    case 2:
        echo '白を選びました';
        break;
    case 3:
        echo '赤を選びました';
        break;
    
} 

<?php 
$scores = [];//点数を蓄積する配列

do{echo '点数を入力>';
    $score =(int)trim(fgets(STDIN));
    if($score === -1){
        break;
    }

    array_push($scores,$score);

    $sum = 0;//合計
    for($i=0; $i<count($scores); $i++){
        echo $i+1,'回目',$scores[$i] ,'点'. "\n";

        $sum += $scores[$i];
    }

    echo '合計点:' . $sum . "\n";

    // 平均点
    $avg = $sum / count($scores);
    echo '平均点:' . $avg . "\n";
}while(true);


// foreach($scores as $sc){
//     echo  $sc . "\n";
// }
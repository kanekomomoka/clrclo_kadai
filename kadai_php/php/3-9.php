<?php
$q1 = 5;
$q2 = 10;

echo $q1 . '+' . $q2 . 'は' ;
$answer = (int)trim(fgets(STDIN));

while($answer !== $q1 + $q2) {
    echo '不正解です';
    $answer = (int)trim(fgets(STDIN));
}

echo 'あたり';
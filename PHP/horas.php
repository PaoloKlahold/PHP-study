<?php



$hStart = readline("\nQue horas começou o jogo?");
$mStart = readline("\nAos quais minutos?");
$hEnd = readline("\nQue horas acabou o jogo?");
$mEnd = readline("\nAos quais minutos?");

if ($hStart < $hEnd) {
    if (((60 - $mStart) + $mEnd) >= 60){
        echo "\nO jogo durou ".($hEnd-$hStart + 1).' horas e '.((60 - $mStart) + $mEnd - 60).' Minutos';
    } else {
        echo "\nO jogo durou ".($hEnd-$hStart).' horas e '.((60 - $mStart) + $mEnd).' Minutos';
    }
} else {
    if (((60 - $mStart) + $mEnd) >= 60){
        echo "\nO jogo durou ".((24 - $hStart) + $hEnd + 1).' horas e '.((60 - $mStart) + $mEnd - 60).' Minutos';
    } else {
        echo "\nO jogo durou ".((24 - $hStart) + $hEnd).' horas e '.((60 - $mStart) + $mEnd)." Minutos";
    }
}

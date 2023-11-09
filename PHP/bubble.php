<?php

$lista = [5, 2, 6, 1, 8, 3];

for ($i = 0; $i < count($lista) - 1; $i++) {
  echo "i -> $i\n";

  for ($j = $i + 1; $j < count($lista); $j++) {
    echo "\t j -> $j\n";

    if ($lista[$i] > $lista[$j]) {
      $aux = $lista[$i];
      $lista[$i] = $lista[$j];
      $lista[$j] = $aux;
    }
  }
}

print_r($lista);
<?php
$cor=filter_input(INPUT_POST, 'cor', FILTER_DEFAULT);
setcookie('cor', $cor);
header("location: index.php");  
<?php
include 'tm.php';
include 'Utils/MetaProcessor.php';
include 'Algorithms/Base.php';

$start = "TM::q0(".MP::n(MP::$i).");\n";
B::Move(1, 20, 'HALT');
file_put_contents('Quine.tm.php', MP::$b."$start?>");
?>

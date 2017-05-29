<?php

function writeLine($end){
  $index = 1;
  echo $index;
  for($i = 2; $i< $end; $i++){
    echo "-$i";
  }
  echo "-$end";
  echo '<br>';
}

writeLine(10);
writeLine(20);
writeLine(500);

?>

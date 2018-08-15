<?php
function vd($val){
  $bt = debug_backtrace();
  $file = $bt[0]['file'];
  $line = $bt[0]['line'];
  highlight_string("<?php\n".var_export($val, true)."\n");
  echo $file.'の'.$line.'行目が実行されました';
  echo '<hr>';
}

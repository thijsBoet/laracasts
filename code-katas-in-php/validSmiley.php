<?php

function count_smileys($arr) {

  $validSmileys = 0;
  
  for ($i = 0; $i<count($arr); $i++){
    if($arr[$i][0] == ':' or ';' and
       $arr[$i][1] == '-' or '~' or '' and
       $arr[$i][-1] == ')' or 'D') {
         $validSmileys++;
       }
  }
  
  echo $validSmileys . "<br>";
}

count_smileys([]);
count_smileys([':D',':~)',';~D',':)']);
count_smileys([':)',':(',':D',':O',':;']);
count_smileys([';]', ':[', ';*', ':$', ';-D']);
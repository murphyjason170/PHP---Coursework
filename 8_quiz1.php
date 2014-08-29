<?php
while ($x < 12) {
     $s = speed($m);
     $n = dancers($f);
     if ($n > 10) {
        $s = 'slow';
        put($s);
     }
     else if ($n < 4) {
        $s = 'fast';
        put($s);
     }
     else {
        put($s);
     }
     $x++;
}
?>
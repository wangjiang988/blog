<?php
//
ob_end_clean();
echo str_pad(" ", 256);
for ($i=100; $i>0; $i--) {
    echo $i. '<br/>';
   flush();
   sleep(1);
    }
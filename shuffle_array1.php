<?php

$learn = array('one','two','three','four');


for ($i=0; $i <=10; $i++) {
    shuffle($learn);
    echo ("$learn[0]\n");
}
?>
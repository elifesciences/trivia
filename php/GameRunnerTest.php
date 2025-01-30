<?php

if (!isset($argv[1])) {
    srand(123);
} else {
    srand($argv[1]);
}


include __DIR__.'/GameRunner.php';

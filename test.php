<?php

$file = '01-reparatøren-af-omdømme.md';

$f = fopen($file, 'r');
echo $line = fgets($f);
fclose($f);

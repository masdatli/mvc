<?php

$name='blabla.bla.bla.ext';
$name=explode('.',$name);
array_pop($name);
$name=implode('.',$name);
print_r($name);

?>
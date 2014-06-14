<?php

$name='aaaaaaaaaaaaaaaaaaaaa.ext';
$name=explode('.',$name);
array_pop($name);
$name=implode('.',$name);
print_r($name);

?>
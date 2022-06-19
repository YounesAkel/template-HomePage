<?php

function divise($dividend,$divisor){

if($divisor==0)
throw new Exception("Divisor by zero!!");

return $dividend/$divisor;

echo divise(5,0);
}

?>
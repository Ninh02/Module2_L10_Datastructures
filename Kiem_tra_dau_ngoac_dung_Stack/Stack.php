<?php
$stack = new SplStack();
$string = " s * (s – a) * (s – b) * (s – c))";
$arrString = str_split($string);
function check($string, $stack)
{
    foreach ($string as $sym) {
        if ($sym == "(") {
            $stack->push($sym);
        } elseif ($sym == ")") {
            if (!$stack->isEmpty()) {
                $stack->pop();
            } else {
                return false;
            }
        }

    }
    return $stack->isEmpty();
}

var_dump(check($arrString, $stack));
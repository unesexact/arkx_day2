<?php

function palindrome($text)
{
    $text = strtolower($text);
    if ($text === strrev($text)){
        return true;
    }
}

echo palindrome("leval") ? "is a palindrome" : "is not a palindrome";

?>
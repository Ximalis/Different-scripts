<?php
function titleCase($str)
{
    $str = mb_convert_case(strtolower($str), MB_CASE_TITLE);
    return $str;
}

echo titleCase("I'm a little tea pot");
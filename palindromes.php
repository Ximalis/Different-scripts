<form method="post" action="<?$_SERVER['PHP_SELF']?>">
    <div>
        <label for="title">Enter word</label>
        <input name="title" id="title" autofocus />
    </div>
    <input type="submit" name="submit" value="Добавить"/>
</form>


<?php

/**
 * Function return true if the given string is a palindrome. Otherwise, return false.
 */

$str = $_POST["title"];
$str = preg_replace("|[^\d\w ]+|i","",$str);
$str = preg_replace("|[\s]+|i"," ",$str);
$str = strtolower($str);

function pal($str) {
    $str2 = '';
    for ($i=strlen($str)-1; $i>=0; $i--){
        $str2 .= $str[$i];
    }
    if ($str2 == $str){
        return true;
    } else {
        return false ;
    }
}

$res = pal($str);

if ($res == true){
    echo 'Word is palindrome';
} else {
    echo 'Not palindrome';
}
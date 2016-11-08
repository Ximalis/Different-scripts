<form method="post" action="<?$_SERVER['PHP_SELF']?>" method="POST">
    <div>
        <label for="title">Enter word</label>
        <input name="title" id="title" autofocus />
    </div>
    <input type="submit" name="submit" value="Добавить"/>
</form>

<?php

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
        return "Word is palindrome ";
    } else {
        return "Not palindrome" ;
    }
}

echo '<h1>' . pal($str) . '</h1>';
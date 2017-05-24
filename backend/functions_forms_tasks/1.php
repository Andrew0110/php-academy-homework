<?php

    function getCommonWords($a, $b) {
        $newArr = array();
        foreach ($a as $key => $value) {
            if (in_array($value, $b)) {
                $newArr[] = $value;
            }
        }
        return $newArr;
    }
    
    if (isset(_POST["send"])) {
        $arr1 = implode(_POST["text1"], " ")
        $arr2 = implode(_POST["text2"], " ")
        
        print_r(getCommonWords($arr1, $arr2));
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name="form" action="" method="post">
        <textarea name="text1"></textarea>
        <textarea name="text2"></textarea>
        <input type="submit" name="send">
    </form>
</body>
</html>

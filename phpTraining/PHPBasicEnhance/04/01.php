<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 10:27
 */
//一重for循环
for($i=100000,$cnt=0;$i>5000;)
{
    $cnt++;
    if($i>50000)
    {
        $i *=0.95;
    }
    else
        $i -=5000;

    echo "第",$cnt,"次过桥","剩余",$i,"元","<br>";
}


?>
</body>
</html>
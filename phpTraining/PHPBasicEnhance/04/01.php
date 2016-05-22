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

echo "<br>";

//打印99乘法表 两层for循环利用钟表指针理解合适

for($i=1;$i<10;$i++)
{
    echo $i,"---";
    for($j=1;$j<= $i;$j++)
        echo $j,"&nbsp";
    echo "<br />";
}
echo "<br>";

//改进版
for($i=1;$i<10;$i++)
{

    for($j=1;$j<= $i;$j++)
        echo $j,"*",$i,"=",$j*$i,"&nbsp";
    echo "<br />";
}
?>
</body>
</html>
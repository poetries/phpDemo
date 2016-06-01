<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
$arr4 = array(1=>3,  'a1'=>11,  3=>5,  "mn"=>18,  88=>2  );
$v1 = current($arr4);	//获得当前单元的值
$v2 = key($arr4);		//获得当前单元的键（下标）
echo "<br />初始，单元的下标和值分别为：$v2,$v1";
$v3 = next($arr4);	//移动到下一个，然后获得其值；
$v4 = key($arr4);	//
echo "<br />然后，现在当前单元的下标和值分别为：$v4,$v3";
next($arr4);//后移一位；
next($arr4);//后移一位；
next($arr4);//后移一位；
$v3 = current($arr4);	//移动到下一个，然后获得其值；
$v4 = key($arr4);	//
echo "<br />连移3次next后，则当前单元的下标和值分别为：$v4,$v3";
//然后：
next($arr4);	//再移动一下：
$v3 = current($arr4);	//移动到下一个，然后获得其值；
$v4 = key($arr4);	//
echo "<br />指针到最后，然后再移动一下，则结果为：“下标和值”分别为：$v4,$v3";
echo "<br />实际情况，此时v3（值） 为：";  var_dump($v3);
echo "<br />实际情况，此时v4（键） 为：";  var_dump($v4);

echo "<h1>下面研究遍历之后的指针位置：</h1>";
$arr5 = array(1=>3,  'a1'=>11,  3=>5,  "mn"=>18,  88=>2  );
foreach($arr5  as  $key => $value){
	echo "<br />$key => $value";
}
$k = key($arr5);
$v = current($arr5);
echo "<br />此时（遍历之后）,“位置”为："; var_dump($k);
echo "<br />此时（遍历之后）,对应“值”为："; var_dump($v);

?>
</body>
</html>

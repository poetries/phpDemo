<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:01
 */

// 马虎者的创建方式

$yan = array('name'=>'燕十八','age'=>'28',174,'安徽');
print_r($yan);

/**
打印结果如下:
Array
(
[name] => 燕十八
[age] => 28
[0] => 174
[1] => 安徽
)


分析出:
如果指定的键,则以指定为准,
如果没指定,则从0开始,逐一递增.(不够准确的)
 **/



$class[] = '张三';
$class[] = '李四';
$class[5] = '王五';
$class[] = '赵六';
$class[] = '郑七';
print_r($class);


/***
如果给出方括号但没有指定键名，则取当前最大整数索引值，新的键名将是该值 + 1。// 上例从5+1开始

如果当前还没有整数索引，则键名将为 0。// 在$yan中得到体现

如果指定的键名已经有值了，该值将被覆盖。(见下例)

 ***/


$butty[] = '林志玲';  // key = 0
$butty[] = '仓井空';  // key = 1
$butty[1] = '武藤兰'; // 指明key = 1单元,值为武藤兰,这其实是再次把1号柜的内容修改为"武藤兰"
$butty[3] = '小泽xxx';

print_r($butty);

// 上面这3个例子,讨论清楚键的增长关系.





$arr = array('中','华','民','国'); // 0 1 2 3
print_r($arr);

unset($arr[3]);
print_r($arr);

$arr[] = '族';
print_r($arr); // 键是:0124,删掉了一个单元,键的增长不受该影响,继续往上增长.

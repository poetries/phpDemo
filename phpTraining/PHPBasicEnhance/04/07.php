
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:50
 */


/***
生活中的场景:

富一代: 儿子,给你N万元,断绝父子关系,爱干吗干吗去.

富二代: 当天去打游戏,打完游戏后,钱就少一些.
第二天,数数钱,还够再打的,再去打一天.
.....
.....
直到某一天,钱不够打了,结束.

分析要素:
1: 给钱,初始化动作,只执行一次.

2: 判断够不够打游戏

3: 如果够,打游戏,
4: 钱减少


for(初始条件1;判断条件2;4:钱减少) {
执行语句3;
}

 ***/

for($i=10; $i >=1; $i--) {
    echo $i,'<br />';
}


/**
扩展一下for循环,同时循环两个数
打印

5  1
4  2
3  3
2  4
1  5
 **/

for($i=5,$j=1; $i >= 1; $i--,$j++) {
    echo $i,'~~~~~',$j,'<br />';
}
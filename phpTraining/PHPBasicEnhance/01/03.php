<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 8:40
 */


// 常量的第3个重要特点,即"全局有效性",说白了,就是页面任意一处都能访问到.
// 这个特点需要结合函数才能体现
// 没学过函数的同学 先不要着急,可以先记住这个特点.


define('HEI',8846);

$hei = 1234;


echo HEI; // 8846
echo '<br />';
echo $hei; // 1234;
echo '<hr />';




function t() {
    echo HEI; //  8846
    echo '<br />';
    var_dump($hei); //
}


t();


// 函数,函数体内,变量有一个作用域的概念.
// 比方: 整个页面是操场
// 函数是操场内的一间小屋.
// 操场上,有一个用户:张三
// 在小屋里,喊张三,
// PHP会认为,在小屋里找张三,
// 而且小屋里张三,和操作上的张三,不是一个人.
// 函数有自己的一片小空间,有自己的变量范围



// 但,与之对比的是,常量,却正确的打印出来.
// 这就是我们所说的,常量的"穿透性",
// 常量一旦定义, 在页面的任何旮旯角落里,都能够访问到.
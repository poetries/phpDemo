<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 23:50
 */
//PHP什么时候用单引号，什么时候用双引号
//单引号不需要解析变量，速度快！
//复杂的字符串两个引号变着用，或用<<<
//单引号里不能包含单引号，双引号里也不能包含双引号；
//
//单双引号的区别：
//1、双引号的变量是解析并输出, 而单引号的变量不解析
//2、对于单引号来说,只有两个转义字符 \', \\，其他都原样输出
//3、对于双引号来说, 可转义字符除\\、\', 不解析外,其他的像\t, \r ,\n等都可以解析
<?php
 用DOM生成如下文档：
<appstore>
    <goods goods_id="g001">
        <name>天龙八部</name>
        <intro><![CDATA[这是一部好书]]></intro>
    </goods>
</appstore>

步骤：
1、先创建“天龙八部文本节点”
2、在创建普通的name节点
3、把文办节点放入name节点中

4、创建cdata节点
5、创建intro节点
6、把ctata加点放入intro中

7、创建goods节点
8、把name/intro节点放入goods节点中

9、创建属性节点goods_id
10、把属性节点放入goods节点中

11、创建AppStore节点
12、把goods放入AppStore中

13、在把AppStore放入文档中

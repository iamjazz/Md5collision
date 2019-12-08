##  Introduce
构造两个不一样的字符串，但是MD5是一样

构造前缀碰撞法”（chosen-prefix collisions）来进行哈希碰撞

## Usage

```
git clone https://github.com/iamjazz/Md5collision.git
cd Md5collision
在本目录中创建一个文本文件。写入任意字符或数字(eg:输入1) 。命名为init.txt
运行fastcoll 输入以下参数。 -p 是源文件 -o 是输出文件
fastcoll_v1.0.0.5.exe -p init.txt -o 1.txt 2.txt
```
##### 输出两个txt文本后
##### 在php环境中运行Md5collision.php

图片1
可以看到，二进制的hash一样。 但是实际内容不一样。
创建一个测试文件命名为webtest.php
#### 内容为
```
<?php
if((string)$_POST['param1']!==(string)$_POST['param2'] && md5($_POST['param1'])===md5($_POST['param2'])){
        echo "ok";
}
else{
	echo "no";
}
?>
```
POST的数据成功时输出ok、否则输出no

图片2

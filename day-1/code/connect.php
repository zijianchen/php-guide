<?php
#这时候我们需要使用PHP来连接Mysql服务器 如果我们是使用PHP来连接Mysql服务器 
#其实PHP就相当于MySQL的客户端
$link = mysql_connect("127.0.0.1","root","admin");

var_dump($link);
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-05 05:50:25 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-05 05:50:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
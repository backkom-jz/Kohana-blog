<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-06 05:51:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$total ~ APPPATH/classes/Model/articles.php [ 13 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Model/articles.php:13
2018-06-06 05:51:32 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Model/articles.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/wangjiuz...', 13, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Index.php(42): Model_Articles->getTotal()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Index->action_total()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Model/articles.php:13
2018-06-06 05:51:58 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-06 05:51:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-06 05:53:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/Model/articles.php [ 14 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Model/articles.php:14
2018-06-06 05:53:04 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Model/articles.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/wangjiuz...', 14, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Index.php(42): Model_Articles->getTotal()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Index->action_total()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Model/articles.php:14
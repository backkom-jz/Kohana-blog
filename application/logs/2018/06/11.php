<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-11 22:12:57 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:15:49 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant POST_TITLE_ERROR - assumed 'POST_TITLE_ERROR' ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 51 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:51
2018-06-11 22:15:49 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(51): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/wangjiuz...', 51, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:51
2018-06-11 22:16:30 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant POST_SMALL_TITLE_ERROR - assumed 'POST_SMALL_TITLE_ERROR' ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 55 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:55
2018-06-11 22:16:30 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(55): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/wangjiuz...', 55, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:55
2018-06-11 22:18:00 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant POST_TITLE_ERROR - assumed 'POST_TITLE_ERROR' ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 52 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:18:00 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(52): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/wangjiuz...', 52, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:18:06 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant POST_TITLE_ERROR - assumed 'POST_TITLE_ERROR' ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 52 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:18:06 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(52): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/wangjiuz...', 52, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:19:01 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant POST_TITLE_ERROR - assumed 'POST_TITLE_ERROR' ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 52 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:19:01 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(52): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/wangjiuz...', 52, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:19:23 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant POST_TITLE_ERROR - assumed 'POST_TITLE_ERROR' ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 52 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:19:23 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(52): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/wangjiuz...', 52, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php:52
2018-06-11 22:25:24 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:25:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:25:32 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:25:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:26:59 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:26:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:27:10 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:35:15 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:35:30 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:36:02 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:36:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:36:21 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:40:23 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:40:55 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:40:58 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:40:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:41:04 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of TypeError given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(TypeError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-11 22:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-11 22:43:55 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'small_title' in 'field list' [ INSERT INTO articles (title, small_title, plate, type, keyword, user_id, is_original, content, create_at) VALUES ('', '', '0', '0', '', '0', '0', '欢迎使用 wangEditor 富文本编辑器', '2018-06-11 22:43:55') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:43:55 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(94): Kohana_Database_Query->execute()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:47:39 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'create_at' in 'field list' [ INSERT INTO articles (title, smalltitle, plate, type, keyword, user_id, is_original, content, create_at) VALUES ('', '', '0', '0', '', '0', '0', '欢迎使用 wangEditor 富文本编辑器', '2018-06-11 22:47:39') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:47:39 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(94): Kohana_Database_Query->execute()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:50:43 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'smalltitle' in 'field list' [ INSERT INTO articles (title, smalltitle, plate, type, keyword, user_id, is_original, content, created_at) VALUES ('test001', 'test', '1', '1', 'test', '0', '0', '欢迎使用 wangEditor 富文本编辑器test001', '2018-06-11 22:50:43') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:50:43 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(94): Kohana_Database_Query->execute()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:52:14 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'smalltitle' in 'field list' [ INSERT INTO articles (title, smalltitle, plate, type, keyword, user_id, is_original, content, created_at) VALUES ('qqq', 'www', '1', '1', 'err', '0', '0', '欢迎使用 wangEditor 富文本编辑器eerere', '2018-06-11 22:52:14') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:52:14 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO art...', false, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(94): Kohana_Database_Query->execute()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-11 22:55:42 --- EMERGENCY: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Admin/Article/Index.php [ 80 ] in file:line
2018-06-11 22:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/Users/wangjiuz...', 80, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(80): json_decode(Array, true)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_real_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
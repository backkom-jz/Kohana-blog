<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-08 01:52:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: data ~ APPPATH/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php [ 153 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php:153
2018-06-08 01:52:01 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php(153): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/wangjiuz...', 153, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_resource_base.php(123): content_5b1a1e0a4840e7_94481931(Object(Smarty_Internal_Template))
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_compiled.php(114): Smarty_Template_Resource_Base->getRenderedTemplateCode(Object(Smarty_Internal_Template))
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_template.php(206): Smarty_Template_Compiled->render(Object(Smarty_Internal_Template))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#8 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Index.php(10): Template->response()
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Index->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#14 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php:153
2018-06-08 02:09:38 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-08 02:09:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-08 02:09:50 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2018-06-08 02:09:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-08 03:39:59 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin/admin_index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:39:59 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/admin_ind...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/admin_ind...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:19 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin_admin/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:19 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin_admin/ind...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin_admin/ind...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:20 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin_admin/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:20 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin_admin/ind...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin_admin/ind...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:20 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin_admin/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:20 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin_admin/ind...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin_admin/ind...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:21 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin_admin/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-08 03:40:21 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin_admin/ind...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin_admin/ind...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
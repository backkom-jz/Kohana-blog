<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-04 02:24:58 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Index/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:24:58 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Welcome.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:48 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Index/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:48 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Welcome.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:49 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Index/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:49 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Welcome.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:49 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Index/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:49 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Welcome.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:50 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Index/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:50 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Welcome.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:50 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Index/index.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-04 02:25:50 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Welcome.php(11): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
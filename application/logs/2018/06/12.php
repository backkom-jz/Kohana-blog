<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-12 00:32:41 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'smalltitle' in 'field list' [ SELECT content, title, smalltitle, articles.id, articles.updated_at, name FROM articles JOIN users ON (users.id = articles.user_id) GROUP BY articles.id ORDER BY articles.id DESC LIMIT 2 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-12 00:32:41 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT content,...', false, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Index.php(33): Kohana_Database_Query->execute()
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/modules/database/classes/Kohana/Database/Query.php:251
2018-06-12 00:33:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: smalltitle ~ APPPATH/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php [ 160 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php:160
2018-06-12 00:33:25 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php(160): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/wangjiuz...', 160, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_resource_base.php(123): content_5b1f3960363f83_58868245(Object(Smarty_Internal_Template))
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_compiled.php(114): Smarty_Template_Resource_Base->getRenderedTemplateCode(Object(Smarty_Internal_Template))
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_template.php(206): Smarty_Template_Compiled->render(Object(Smarty_Internal_Template))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Index/index.tpl')
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Index/index', Array)
#8 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Index.php(41): Template->response()
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#14 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/0fab108cc6fa5bc1131f542f3286f202fc73e690_0.file.index.tpl.php:160
2018-06-12 00:47:58 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php [ 73 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:47:58 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Users/wangjiuz...', 73, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_resource_base.php(123): content_5b1f5e8e6c2f05_28483738(Object(Smarty_Internal_Template))
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_compiled.php(114): Smarty_Template_Resource_Base->getRenderedTemplateCode(Object(Smarty_Internal_Template))
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_template.php(206): Smarty_Template_Compiled->render(Object(Smarty_Internal_Template))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/article/l...')
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/article/l...', Array)
#8 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(27): Template->response()
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_list()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#14 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:48:56 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php [ 73 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:48:56 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Users/wangjiuz...', 73, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_resource_base.php(123): content_5b1f5ec87697c7_81451736(Object(Smarty_Internal_Template))
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_compiled.php(114): Smarty_Template_Resource_Base->getRenderedTemplateCode(Object(Smarty_Internal_Template))
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_template.php(206): Smarty_Template_Compiled->render(Object(Smarty_Internal_Template))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/article/l...')
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/article/l...', Array)
#8 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(27): Template->response()
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_list()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#14 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:48:57 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php [ 73 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:48:57 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Users/wangjiuz...', 73, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_resource_base.php(123): content_5b1f5ec87697c7_81451736(Object(Smarty_Internal_Template))
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_compiled.php(114): Smarty_Template_Resource_Base->getRenderedTemplateCode(Object(Smarty_Internal_Template))
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_template.php(206): Smarty_Template_Compiled->render(Object(Smarty_Internal_Template))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/article/l...')
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/article/l...', Array)
#8 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(27): Template->response()
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_list()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#14 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:49:21 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php [ 73 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 00:49:21 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Users/wangjiuz...', 73, Array)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_resource_base.php(123): content_5b1f5ec87697c7_81451736(Object(Smarty_Internal_Template))
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_template_compiled.php(114): Smarty_Template_Resource_Base->getRenderedTemplateCode(Object(Smarty_Internal_Template))
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_template.php(206): Smarty_Template_Compiled->render(Object(Smarty_Internal_Template))
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/article/l...')
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/article/l...', Array)
#8 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Article/Index.php(28): Template->response()
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Article_Index->action_list()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Article_Index))
#14 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/cache/smarty/compile/5821be80629f1179cc8a6865ad56cdc937688d7a_0.file.list.tpl.php:73
2018-06-12 01:07:06 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin/admin_index/role.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:07:06 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/admin_ind...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/admin_ind...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(62): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_role()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:12:38 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin/permission.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:12:38 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/permissio...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/permissio...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Admin/Index.php(49): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Admin_Index->action_permission()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admin_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:59:09 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:admin/member_list.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:59:09 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('admin/member_li...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('admin/member_li...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Member/Index.php(25): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Member_Index->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Member_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:59:30 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:member/list.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 01:59:30 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('member/list.tpl')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('member/list', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Member/Index.php(25): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Member_Index->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Member_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 02:05:35 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin/member/record_download.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 02:05:35 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/member/re...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/member/re...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Member/Index.php(43): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Member_Index->action_record_download()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Member_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 02:07:07 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin/member/share.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 02:07:07 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/member/sh...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/member/sh...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Member/Index.php(52): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Member_Index->action_record_share()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Member_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 03:55:15 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template 'file:Admin/chart/chart-1.tpl' ~ DOCROOT/framework/smarty/libs/sysplugins/smarty_internal_template.php [ 187 ] in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
2018-06-12 03:55:15 --- DEBUG: #0 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(232): Smarty_Internal_Template->render(false, 1)
#1 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php(134): Smarty_Internal_TemplateBase->_execute(Object(Smarty_Internal_Template), NULL, NULL, NULL, 1)
#2 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(154): Smarty_Internal_TemplateBase->display('Admin/chart/cha...')
#3 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(93): Template::capture('Admin/chart/cha...', Array)
#4 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(173): Template->render(NULL)
#5 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Template.php(179): Template->display(NULL, NULL)
#6 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/classes/Controller/Admin/Chart/Index.php(10): Template->response()
#7 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Controller.php(84): Controller_Admin_Chart_Index->action_chart_1()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Chart_Index))
#10 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/framework/smarty/libs/sysplugins/smarty_internal_templatebase.php:232
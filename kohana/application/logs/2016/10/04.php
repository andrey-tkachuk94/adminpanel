<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-04 13:59:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\Controller\Admin.php [ 62 ] in file:line
2016-10-04 13:59:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-04 14:14:43 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-10-04 14:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\www\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #92, 'username')
#2 Z:\home\localhost\www\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('username')
#3 Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php(88): Kohana_Database_Result->offsetGet('username')
#4 Z:\home\localhost\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-10-04 14:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH\views\admin\login.php [ 5 ] in Z:\home\localhost\www\kohana\application\views\admin\login.php:5
2016-10-04 14:15:22 --- DEBUG: #0 Z:\home\localhost\www\kohana\application\views\admin\login.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 5, Array)
#1 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\www\kohana\application\views\admin.php(10): Kohana_View->__toString()
#5 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php(35): Kohana_Controller_Template->after()
#9 Z:\home\localhost\www\kohana\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\localhost\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\localhost\www\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\localhost\www\kohana\application\views\admin\login.php:5
2016-10-04 14:55:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Admin.php [ 73 ] in Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php:73
2016-10-04 14:55:48 --- DEBUG: #0 Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php(73): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 73, Array)
#1 Z:\home\localhost\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php:73
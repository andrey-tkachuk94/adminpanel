<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-01 03:17:59 --- CRITICAL: View_Exception [ 0 ]: The requested view empty could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\localhost\www\kohana\system\classes\Kohana\View.php:137
2016-10-01 03:17:59 --- DEBUG: #0 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('empty')
#1 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('empty', NULL)
#2 Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php(25): Kohana_View::factory('empty')
#3 Z:\home\localhost\www\kohana\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\www\kohana\system\classes\Kohana\View.php:137
2016-10-01 05:20:53 --- CRITICAL: View_Exception [ 0 ]: The requested view empty could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\localhost\www\kohana\system\classes\Kohana\View.php:137
2016-10-01 05:20:53 --- DEBUG: #0 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('empty')
#1 Z:\home\localhost\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('empty', NULL)
#2 Z:\home\localhost\www\kohana\application\classes\Controller\Admin.php(25): Kohana_View::factory('empty')
#3 Z:\home\localhost\www\kohana\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\localhost\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\www\kohana\system\classes\Kohana\View.php:137
2016-10-01 05:48:22 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Controller\Admin.php [ 63 ] in file:line
2016-10-01 05:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-01 05:54:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Controller\Admin.php [ 22 ] in file:line
2016-10-01 05:54:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-01 05:54:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Controller\Admin.php [ 65 ] in file:line
2016-10-01 05:54:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-01 05:55:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Controller\Admin.php [ 65 ] in file:line
2016-10-01 05:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-01 07:05:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\Controller\Admin.php [ 62 ] in file:line
2016-10-01 07:05:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-01 07:11:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\Controller\Admin.php [ 62 ] in file:line
2016-10-01 07:11:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
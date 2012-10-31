<?php

/*
 * This software is the property of its authors.
 * See the copyright.txt file for more details.
 *
 */

/** defaults - do not change **/

if (isset($_SERVER['default_environment_configuration']) && $_SERVER['default_environment_configuration'])
  require($_SERVER['default_environment_configuration']);

if (isset($_SERVER['environment_configuration']) && $_SERVER['environment_configuration'])
  require($_SERVER['environment_configuration']);

if (!isset($_SERVER['environment']))
  $_SERVER['environment'] = 'development';

if (!isset($_SERVER['baseHostname']) && isset($_SERVER['HTTP_HOST']))
  $_SERVER['baseHostname'] = $_SERVER['HTTP_HOST'];

if (!isset($_SERVER['baseUrl']) && isset($_SERVER['HTTP_HOST']))
  $_SERVER['baseUrl'] = 'http://' . $_SERVER['HTTP_HOST'];

if (!isset($_SERVER['basePath']))
  $_SERVER['basePath'] = realpath(dirname($_SERVER['SCRIPT_FILENAME']));

if (!isset($_SERVER['robots']) || !$_SERVER['robots'])
  $_SERVER['robots'] = 'robots-deny.txt';


//if (!isset($_SERVER['dataPath']) || !$_SERVER['dataPath']) {
//  echo "dataPath not set !";
//  exit;
//}

if (!isset($_SERVER['debugMode']) || !$_SERVER['debugMode'])
  $_SERVER['debugMode'] = false;

if ((!isset($_SERVER['debugPath']) || !$_SERVER['debugPath']) && isset($_SERVER['dataPath']))
  $_SERVER['debugPath'] = $_SERVER['dataPath'] . '/debug.log';

if (!isset($_SERVER['librariesPath']) || !$_SERVER['librariesPath'])
  $_SERVER['librariesPath'] = dirname(dirname(__FILE__));

if (!isset($_SERVER['setupPath']) || !$_SERVER['setupPath'])
  $_SERVER['setupPath'] = $_SERVER['basePath'] . '/setup/auto-setup.php';

if (!isset($_SERVER['remoteAddress']) || !$_SERVER['remoteAddress'])
  $_SERVER['remoteAddress'] = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null);


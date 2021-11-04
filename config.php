<?php
// HTTP
define('HTTP_SERVER', 'http://test.storenitser.shop/');

// HTTPS
define('HTTPS_SERVER', 'https://test.storenitser.shop/');

// DIR
define('DIR_APPLICATION', '/home/leadgin/storenitser.shop/test/catalog/');
define('DIR_SYSTEM', '/home/leadgin/storenitser.shop/test/system/');
define('DIR_IMAGE', '/home/leadgin/storenitser.shop/test/image/');
define('DIR_STORAGE', '/home/leadgin/storenitser.shop/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'leadgin.mysql.tools');
define('DB_USERNAME', 'leadgin_artefact');
define('DB_PASSWORD', '*8me5j@M9J');
define('DB_DATABASE', 'leadgin_artefact');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
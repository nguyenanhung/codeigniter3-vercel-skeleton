<?php

defined('BASEPATH') or exit('No direct script access allowed');

$xadb0VEa_MainCacheAdapter = extension_loaded('apcu') ? 'apcu' : 'file';
$xadb0VEa_MainCacheBackup = $xadb0VEa_MainCacheAdapter === 'file' ? 'dummy' : 'file';
$config['main_cache_adapter'] = [
    'adapter' => $xadb0VEa_MainCacheAdapter,
    'backup' => $xadb0VEa_MainCacheBackup,
    'key_prefix' => GLOBAL_CACHE_PREFIX
];

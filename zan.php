#!/usr/bin/env php
<?php

if (file_exists(__DIR__.'/../../autoload.php')) {
    require_once __DIR__.'/../../autoload.php';
} else {
    require_once __DIR__.'/vendor/autoload.php';
}

$app = new \Zan\Installer\Console\Installer();
$app->init();

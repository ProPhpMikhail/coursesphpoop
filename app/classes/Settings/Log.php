<?php

namespace App\Settings;

use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;

class Log
{
    private $loggers = [];
    private static $instance;

    private static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function __construct()
    {
        $logPath = $_SERVER['DOCUMENT_ROOT'] . '/monolog/' . date('m.d.Y') . '.log';
        $log = new Logger('default');
        $log->pushHandler(new StreamHandler($logPath));
        $this->loggers['default'] = $log;
    }

    public static function setLogger(string $name)
    {
        $obj = self::getInstance();
        if (isset($obj->loggers[$name])) {
            throw new \Exception('Logger name ' . $name . ' is already exist');
        }

        $logPath = $_SERVER['DOCUMENT_ROOT'] . '/monolog/' . date('m.d.Y') . '.log';
        $log = new Logger($name);
        $log->pushHandler(new StreamHandler($logPath));
        $obj->loggers[$name] = $log;
    }

    public static function getLogger(string $name = 'default'): Logger
    {
        $obj = self::getInstance();
        if (!isset($obj->loggers[$name])) {
            throw new \Exception('Logger name ' . $name . ' isn\'t exist');
        }

        return $obj->loggers[$name];
    }
}
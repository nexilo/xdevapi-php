<?php
namespace Nexilo;

class XdevApiClientBuilder
{
    /**
     * @var XdevApiClient
     */
    private static $instance;

    /**
     * @param $dsn
     * @return XdevApiClient
     */
    public static function getInstance($dsn): XdevApiClient
    {
        self::$instance = new XdevApiClient();
        self::$instance->setDsn($dsn);
        return self::$instance;
    }
}

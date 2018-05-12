<?php
namespace Nexilo;

class ClientBuilder
{
    /**
     * @var Client
     */
    private static $instance;

    /**
     * @param $dsn
     * @return Client
     */
    public static function getInstance($dsn): Client
    {
        self::$instance = new Client();
        self::$instance->setDsn($dsn);
        return self::$instance;
    }
}

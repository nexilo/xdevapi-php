<?php
namespace Nexilo;

class Client
{
    /**
     * Scheme DSN string pattern
     */
    private const STRING_DSN = 'mysqlx://%s:%s@%s:%d/%s';

    /**
     * @var string
     */
    private $dsn;

    /**
     * Client constructor.
     * @param string $user
     * @param string $password
     * @param string $hostname
     * @param string $schema
     * @param int $port
     */
    public function __construct(string $user = '', string $password = '', string $hostname = '', string $schema = '', int $port = 33060)
    {
        $this->dsn = vsprintf(self::STRING_DSN, [$user, $password, $hostname, $port, $schema]);
    }

    /**
     * Overwrites default dsn
     *
     * @param string $dsn
     */
    public function setDsn(string $dsn): void
    {
        $this->dsn = $dsn;
    }

    public function getSession()
    {
        return \mysql_xdevapi\getSession($this->dsn);
    }
}
